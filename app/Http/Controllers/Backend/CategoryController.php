<?php

namespace App\Http\Controllers\Backend;

use App\Components\Functions;
use App\Http\Requests\CreateBrandRequest;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class CategoryController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        return view('admin.category.index');
    }

    public function categoryAttribute(Request $request) {
        $brands = Category::all();

        return $this->datatable($brands);
    }

    public function datatable($brands)
    {
        return DataTables::of($brands)
            ->editColumn('parent_id', function ($brand) {
                if (!empty($brand->parent_id)) {
                    return $brand->parent->name;
                }

                return '';
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
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/categories/'.$brand->id.'">Sửa</a><a href="/admin/brands/categories/'.$brand->id.'" type="button" class="btn red btn-outline delete-btn">Xóa</a>';

                return $url;
            })->rawColumns(['parent_id', 'image', 'action'])
            ->make(true);
    }

    public function createView() {
        return view('admin.category.create');
    }

    public function store(Request $request) {
        $data = $request->all();

        if (empty($data['name'])) {
            return redirect('admin/categories/create')->with('error', 'Lỗi! Thêm mới không thành công');
        }

        $data['image'] = ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';
        if (empty($data['image'])) {
            unset($data['image']);
        }

        try {
            $data['slug'] = Functions::convertSlug($data['name']);

            $post = Category::create($data);
        } catch (\Exception $e) {
            return redirect('admin/categories/create')->with('error', 'Lỗi! Thêm mới không thành công');
        }

        return redirect('admin/categories/'. $post->id)->with('success', 'Thêm mới thành công');
    }

    public function editView($id) {
        $post = Category::find($id);

        if (empty($post)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        return view('admin.category.edit', compact('post'));
    }

    public function update(Request $request) {
        $data = $request->all();

        $category = Category::find($data['id']);

        if (empty($category)) {
            return redirect()->back()->with('error', 'Không tồn tại');
        }

        $data['image'] = ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';

        if (empty($data['image'])) {
            unset($data['image']);
        }

        $data['slug'] = Functions::convertSlug($data['name']);

        $category->update($data);

        return redirect('admin/categories/'. $category->id)->with('success', 'Cập nhật thành công');
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
        $brand = Category::find($id);

        if (empty($brand)) {
            return redirect('admin/categories')->with('error', 'Không tồn tại');
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
