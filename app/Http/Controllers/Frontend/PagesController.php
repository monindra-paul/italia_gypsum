<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('frontend.pages.about');
    }

    public function whygypsum()
    {
        return view('frontend.pages.whygypsum');
    }

    public function product()
    {
        return view('frontend.pages.product');
    }
}
