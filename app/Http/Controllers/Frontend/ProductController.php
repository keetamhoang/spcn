<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Account;
use App\Model\AccountProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        $account = Account::find(auth('caba')->user()->id);

        $products = AccountProduct::where('account_id', auth('caba')->user()->id)->orderBy('id', 'desc')->get();

        return view('frontend.product.index', compact('account', 'products'));
    }
}
