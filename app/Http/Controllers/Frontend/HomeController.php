<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class HomeController extends Controller
{
    public function index() {
        return view('frontend.index');
    }
}
