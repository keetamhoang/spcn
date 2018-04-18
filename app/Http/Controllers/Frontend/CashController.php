<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Account;
use App\Model\CashHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CashController extends Controller
{
    public function index() {
        $account = Account::find(auth('caba')->user()->id);

        return view('frontend.cash.index', compact('account'));
    }

    public function myXu() {
        $account = Account::find(auth('caba')->user()->id);

        $histories = CashHistory::where('account_id', auth('caba')->user()->id)->where('status', config('const.SUCCESS'))->get();

        return view('frontend.cash.my-xu', compact('account', 'histories'));
    }
}
