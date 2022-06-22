<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function ShowHomePage()
    {
        return view('index');
    }
    public function ShowBlogPage()
    {
        return view('blog');
    }
    public function ShowIndex2Page()
    {
        return view('index-2');
    }
    public function ShowShopPage()
    {
        return view('shop');
    }
    public function ShowSingleblogPage()
    {
        return view('singleblog');
    }
}
