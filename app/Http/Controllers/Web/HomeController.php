<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about_us()
    {
        return view('web.about_us');
    }


    public function gallery()
    {
        return view('web.gallery');
    }

    public function blog()
    {
        return view('web.blog');
    }

        public function blogDetails()
    {
        return view('web.blog_deatail');
    }
}
