<?php

namespace App\Http\Controllers\Frontend;

use App\Components\Functions;
use App\Model\AccountProduct;
use App\Model\Product;
use App\Model\Promotion;
use Carbon\Carbon;
use Goutte\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Crawler;

class DealController extends Controller
{
    public function index()
    {

    }

    public function genLink(Request $request)
    {
        try {
            $link = $request->input('link');

            // gen short link
            $genLink = Functions::genLink($link);

            // get product info by crawl method
            $productInfo = Functions::getProductInfo($link);

            // get discount
            $discountCategory = Functions::getDiscountByCategory($productInfo['source'], $productInfo['category_slug']);
            $productInfo['category_id'] = $discountCategory['category_id'];
            $productInfo['short_link'] = $genLink;

            $productInfo['image'] = Functions::saveAndCropImage($productInfo['image']);
            $productInfo['updated_at'] = Carbon::now();
            $productInfo['status'] = config('const.ACTIVE');

            // save product into db
            $product = Product::where('root_id', $productInfo['root_id'])->where('source', $productInfo['source'])->first();

            if (!empty($product)) {
                $product->update($productInfo);
            } else {
                $product = Product::create($productInfo);
            }

            // save account_products into db
            DB::table('account_products')->updateOrInsert([
                'account_id' => auth('caba')->user()->id,
                'product_id' => $product->id
            ], [
                'updated_at' => Carbon::now()
            ]);

            $price = $productInfo['price'];
            $productInfo['price'] = number_format($productInfo['price'], 0, '.', '.') . ' VND';
            $productInfo['discount'] = $discountCategory['discount'];
            $productInfo['discount_price'] = $productInfo['discount'] * $price;
            $productInfo['discount_price'] = number_format($productInfo['discount_price'], 0, '.', '.') . ' VND';

            return response([
                'status' => 1,
                'shortLink' => $genLink,
                'productInfo' => $productInfo
            ]);
        } catch (\Exception $ex) {
            dd($ex->getMessage().'|'.$ex->getLine());
            return response([
                'status' => 0,
            ]);
        }
    }

    public function getPromotion($promotionId)
    {
        $promotion = Promotion::find($promotionId);

        if (!$promotion) {
            abort(404);
        }

        return view('frontend.promotion', compact('promotion'));
    }

    public function getPromotionsByCategory($category)
    {
        $promotions = Promotion::orderBy('created_at', 'desc')->where('category_id', $category)->paginate(20);

        return view('frontend.promotions', compact('promotions'));
    }

    public function getLatestPromotion(Request $request)
    {
        $limit = $request->input('limit');

        if (empty($limit)) {
            $limit = 20;
        }

        $promotions = Promotion::orderBy('created_at', 'desc')->limit($limit);

        return view('frontend.promotions', compact('promotions'));
    }
}
