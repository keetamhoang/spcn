<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index() {
        $account = Account::find(auth('caba')->user()->id);

        return view('frontend.order.index', compact('account'));
    }
}
