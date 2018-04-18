<?php

namespace App\Http\Controllers\Backend;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends AdminController
{
    public function index() {
        return view('admin.product.index');
    }

    public function productAttribute(Request $request) {
        $products = Product::orderBy('id', 'desc')->get();

        return $this->datatable($products);
    }

    public function datatable($products)
    {
        return \DataTables::of($products)
            ->editColumn('image', function ($product) {
                $image = '<img src="'.$product->image.'" style="width: 100%">';

                $image = '<div style="width: 100px">'.$image.'</div>';

                return $image;
            })->editColumn('short_link', function ($product) {
                $url = '<a href="http://'.$product->short_link.'" target="_blank">'.$product->short_link.'</a>';

                return $url;
            })->editColumn('cash_back', function ($product) {
                if (isset($product->cashBack)) {
                    $ck = $product->cashBack->discount;
                } else {
                    $ck = config('const.DEFAULT_CK');
                }

                $price = $ck * $product->price / 100;

                $html = '<div class="m-heading-1 border-green m-bordered">'.$ck.'%<br><hr>'.number_format($price, 0, ',', '.').' đ</div>';

                return $html;
            })->addColumn('cash_back_real', function ($product) {
                if (isset($product->cashBack)) {
                    $ck = $product->cashBack->discount_real;
                } else {
                    $ck = config('const.DEFAULT_CK');
                }

                $price = $ck * $product->price / 100;

                $html = '<div class="m-heading-1 border-red m-bordered">'.$ck.'%<br><hr>'.number_format($price, 0, ',', '.').' đ</div>';

                return $html;
            })->editColumn('price', function ($product) {
                return number_format($product->price, 0, ',', '.');
            })->editColumn('status', function ($product) {
                if ($product->status == config('const.ACTIVE')) {
                    $text = '<button data-product-id="' . $product->id . '" class="btn btn-success status-btn" data-status="1" type="button">HIỂN THỊ</button>';
                } else {
                    $text = '<button data-product-id="' . $product->id . '" class="btn btn-danger status-btn" data-status="0" type="button">KHÔNG HIỂN THỊ</button>';
                }

                return $text;
            })->addColumn('action', function ($product) {
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/products/'.$product->id.'">Sửa</a><a href="/admin/products/delete/'.$product->id.'" type="button" class="btn red btn-outline delete-btn">Xóa</a>';

                return $url;
            })->rawColumns(['image', 'status', 'action', 'short_link', 'cash_back', 'cash_back_real'])
            ->make(true);
    }

    public function updateStatus(Request $request) {
        $data = $request->all();

        $product = Product::find($data['product_id']);

        if (empty($product)) {
            return response([
                'status' => 0,
                'message' => 'Không tồn tại sản phẩm'
            ]);
        }

        if ($data['status'] == config('const.ACTIVE')) {
            $data['status'] = config('const.IN_ACTIVE');
        } else {
            $data['status'] = config('const.ACTIVE');
        }

        $product->update(['status' => $data['status']]);

        return response([
            'status' => 1,
            'message' => 'Cập nhật thành công'
        ]);
    }
}
