<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('pages.home')->with('pageTitle', 'Home');
    }

    public function ourStory()
    {
        return view('pages.our-story')->with('pageTitle', 'Our Story');
    }

    public function ourProduct()
    {
        return view('pages.our-product')->with([
            'pageTitle' => 'Our Product'
        ]);
    }

    public function contactUs()
    {
        return view('pages.contact-us')->with('pageTitle', 'Contact Us');
    }

    public function getNews()
    {
        return view('pages.news')->with('pageTitle', 'News');
    }

    public function showNews($id)
    {
        return view('pages.news-detail')->with('pageTitle', 'News');
    }
}
