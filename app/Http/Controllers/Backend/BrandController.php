<?php

namespace App\Http\Controllers\Backend;

use App\Components\Functions;
use App\Http\Requests\CreateBrandRequest;
use App\Model\Brand;
use App\Model\DiscountCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class BrandController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        return view('admin.brand.index');
    }

    public function brandAttribute(Request $request) {
        $brands = Brand::all();

        return $this->datatable($brands);
    }

    public function datatable($brands)
    {
        return DataTables::of($brands)
            ->editColumn('link', function ($brand) {
                if (strpos('http', $brand->link) !== false) {
                    $url = '<a href="' . $brand->link . '" target="_blank">'.$brand->link.'</a>';
                } else {
                    $url = '<a href="http://' . $brand->link . '" target="_blank">' . $brand->link . '</a>';
                }

                return $url;
            })->editColumn('status', function ($brand) {
                if ($brand->status == config('const.ACTIVE')) {
                    $text = '<button data-brand-id="' . $brand->id . '" class="btn btn-success status-btn" data-status="1" type="button">HIỂN THỊ</button>';
                } else {
                    $text = '<button data-brand-id="' . $brand->id . '" class="btn btn-danger status-btn" data-status="0" type="button">KHÔNG HIỂN THỊ</button>';
                }

                return $text;
            })->editColumn('image', function ($brand) {
                $image = '<img src="'.$brand->image.'" style="width: 100%">';

                $image = '<div style="width: 100px">'.$image.'</div>';

                return $image;
            })->addColumn('action', function ($brand) {
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/brands/'.$brand->id.'">Sửa</a><a href="/admin/brands/delete/'.$brand->id.'" type="button" class="btn red btn-outline delete-btn">Xóa</a>';

                return $url;
            })->addColumn('ck', function ($brand) {
                $url = '<a data-brand-id="'.$brand->id.'" type="button" class="btn blue ck-btn">Xem CK</a>';

                return $url;
            })->rawColumns(['link', 'image', 'action', 'status', 'ck'])
            ->make(true);
    }

    public function createView() {
        return view('admin.brand.create');
    }

    public function store(CreateBrandRequest $request) {
        $data = $request->all();

        $data['image'] = ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image'), 'brands') : '';

        $data['status'] = 0;

        $data['link'] = str_replace('https://', '', $data['link']);
        $data['link'] = str_replace('http://', '', $data['link']);
        $data['slug'] = Functions::convertSlug($data['name']);

        DB::beginTransaction();

        try {

            $brand = Brand::create($data);

            $discountCategories = [];

            if (count($data['discounts']) > 0) {
                foreach ($data['discounts'] as $key => $discount) {
                    if (trim($discount) != '' && trim($data['categories'][$key]) != '') {
                        $discountCategories[] = [
                            'name' => $data['categories'][$key],
                            'slug' => Functions::convertSlug($data['categories'][$key]),
                            'brand_id' => $brand->id,
                            'discount' => $discount,
                            'discount_real' => $data['discounts_real'][$key]
                        ];
                    }
                }

                if (count($discountCategories) > 0) {
                    DB::table('discount_categories')->insert($discountCategories);
                }
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            return redirect('admin/brands/create')->with('Lỗi! Thêm mới không thành công');
        }

        return redirect('admin/brands/'. $brand->id)->with('Thêm mới thành công');
    }

    public function editView($id) {
        $brand = Brand::find($id);

        if (empty($brand)) {
            return redirect()->back()->with('error', 'Không tồn tại thương hiệu');
        }

        return view('admin.brand.edit', compact('brand'));
    }

    public function update(CreateBrandRequest $request) {
        $data = $request->all();

        $brand = Brand::find($data['id']);

        if (empty($brand)) {
            return redirect()->back()->with('error', 'Không tồn tại thương hiệu');
        }

        $data['link'] = str_replace('https://', '', $data['link']);
        $data['link'] = str_replace('http://', '', $data['link']);

        $data['image'] = ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image'), 'brands', $brand->image) : $brand->image;
        $data['slug'] = Functions::convertSlug($data['name']);

        DB::beginTransaction();

        try {

            $brand->update($data);

            $discountCategories = [];

            if (count($data['discounts']) > 0) {
                foreach ($data['discounts'] as $key => $discount) {
                    if (trim($discount) != '' && trim($data['categories'][$key]) != '') {
                        $discountCategories[] = [
                            'name' => $data['categories'][$key],
                            'slug' => Functions::convertSlug($data['categories'][$key]),
                            'brand_id' => $brand->id,
                            'discount' => $discount,
                            'discount_real' => $data['discounts_real'][$key]
                        ];
                    }
                }

                if (count($discountCategories) > 0) {
                    DiscountCategory::where('brand_id', $brand->id)->delete();

                    DB::table('discount_categories')->insert($discountCategories);
                }
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            return redirect('admin/brands/create')->with('Lỗi! Thêm mới không thành công');
        }

        return redirect('admin/brands/'. $brand->id)->with('success', 'Cập nhật thành công');
    }

    public function updateStatus(Request $request) {
        $data = $request->all();

        $brand = Brand::find($data['brand_id']);

        if (empty($brand)) {
            return response([
                'status' => 0,
                'message' => 'Không tồn tại thương hiệu'
            ]);
        }

        if ($data['status'] == config('const.ACTIVE')) {
            $data['status'] = config('const.IN_ACTIVE');
        } else {
            $data['status'] = config('const.ACTIVE');
        }

        $brand->update(['status' => $data['status']]);

        return response([
            'status' => 1,
            'message' => 'Cập nhật thành công'
        ]);
    }

    public function delete($id) {
        $brand = Brand::find($id);

        if (empty($brand)) {
            return redirect('admin/brands')->with('error', 'Thương hiệu không tồn tại');
        }

        $brand->delete();

        return redirect()->back()->with('success', 'Xóa thành công');
    }

    public function getCkByBrandId(Request $request) {
        $id = $request->input('id');

        $discountCategory = DiscountCategory::where('brand_id', $id)->get();

        return view('admin.brand.ck', ['discounts' => $discountCategory])->render();
    }
}
