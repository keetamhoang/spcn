<?php

namespace App\Http\Controllers\Backend;

use App\Model\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AccountController extends AdminController
{
    public function index() {
        return view('admin.user.index');
    }

    public function userAttribute(Request $request) {
        $brands = Account::all();

        return $this->datatable($brands);
    }

    public function datatable($brands)
    {
        return DataTables::of($brands)
            ->editColumn('link_profile', function ($brand) {
                $link = str_replace('https://', '', $brand->link_profile);
                $link = str_replace('http://', '', $link);

                $url = '<a href="http://' . $link . '" target="_blank">' . $link . '</a>';

                return $url;
            })->editColumn('status', function ($brand) {
                if ($brand->status == config('const.ACTIVE')) {
                    $text = '<button data-brand-id="' . $brand->id . '" class="btn btn-success status-btn" data-status="1" type="button">HIỂN THỊ</button>';
                } else {
                    $text = '<button data-brand-id="' . $brand->id . '" class="btn btn-danger status-btn" data-status="0" type="button">KHÔNG HIỂN THỊ</button>';
                }

                return $text;
            })->editColumn('image', function ($brand) {
                $image = '<img src="'.$brand->avatar.'" style="width: 100%">';

                $image = '<div style="width: 100px">'.$image.'</div>';

                return $image;
            })->addColumn('action', function ($brand) {
                $url = '<a type="button" class="btn blue btn-outline" href="/admin/brands/'.$brand->id.'">Sửa</a><a href="/admin/brands/delete/'.$brand->id.'" type="button" class="btn red btn-outline delete-btn">Xóa</a>';

                return $url;
            })->addColumn('ck', function ($brand) {
                $url = '<a data-brand-id="'.$brand->id.'" type="button" class="btn blue ck-btn">Xem CK</a>';

                return $url;
            })->rawColumns(['link_profile', 'image', 'action', 'status', 'ck'])
            ->make(true);
    }
}
