<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function universalPlaster()
    {
        return view('frontend.product.universalPlaster');
    }

    public function agniPlaster()
    {
        return view('frontend.product.agniPlaster');
    }

    public function aquaPlaster()
    {
        return view('frontend.product.aquaPlaster');
    }

    public function agniaquaPlaster()
    {
        return view('frontend.product.agniaquaPlaster');
    }
}