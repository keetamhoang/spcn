<?php

namespace App\Http\Controllers\Backend;

use App\Model\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends AdminController
{
    public function index() {
        return view('admin.transaction.index');
    }

    public function transactionAttribute(Request $request) {
        $trans = Transaction::orderBy('created_at', 'desc')->get();

        return $this->datatable($trans);
    }

    public function datatable($trans)
    {
        return DataTables::of($trans)
            ->editColumn('account_id', function ($tran) {
                if ($tran->account_id != 0 and $tran->account) {
                    return $tran->account->name;
                }

                return 'Admin tổng';
            })->editColumn('status', function ($tran) {
                if ($tran->status == Transaction::CANCEL) {
                    $text = '<span class="label label-sm label-danger"> Đã hủy </span>';
                } else if ($tran->status == Transaction::PENDING) {
                    $text = '<span class="label label-sm label-info"> Đang xử lý </span>';
                } else {
                    $text = '<span class="label label-sm label-success"> Thành công </span>';
                }

                return $text;
            })->editColumn('order_value', function ($tran) {
                return number_format($tran->order_value, 1, ',', '.') . ' đ';
            })->editColumn('publisher_payout', function ($tran) {
                return number_format($tran->publisher_payout, 3, ',', '.') . ' đ';
            })->rawColumns(['status'])
            ->make(true);
    }
}
