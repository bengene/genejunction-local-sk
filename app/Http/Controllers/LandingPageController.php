<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        $seo = [
            'page_title' => '',
            'meta_title' => 'Sukgarden',
            'meta_desc' => 'SukGarden is the leading brand of ecological home cleaning. Product research and development selected global natural active ingredients, aiming to produce green, healthy, ecological and environmentally friendly cleaning and toiletry products. ',
            'meta_image' => asset('/images/2023091815305860bfc6.jpg'),
        ];

        return view('pages.home')->with($seo);
    }

    public function ourStory()
    {
        $seo = [
            'page_title' => '',
            'meta_title' => 'Sukgarden',
            'meta_desc' => 'SukGarden is the leading brand of ecological home cleaning. Product research and development selected global natural active ingredients, aiming to produce green, healthy, ecological and environmentally friendly cleaning and toiletry products. ',
            'meta_image' => asset('/images/2023091815305860bfc6.jpg'),
        ];

        return view('pages.our-story')->with($seo);
    }

    public function ourProduct()
    {
        $seo = [
            'page_title' => '',
            'meta_title' => 'Sukgarden',
            'meta_desc' => 'SukGarden is the leading brand of ecological home cleaning. Product research and development selected global natural active ingredients, aiming to produce green, healthy, ecological and environmentally friendly cleaning and toiletry products. ',
            'meta_image' => asset('/images/2023091815305860bfc6.jpg'),
        ];

        return view('pages.our-product')->with($seo);
    }

    public function contactUs()
    {
        $seo = [
            'page_title' => '',
            'meta_title' => 'Sukgarden',
            'meta_desc' => 'SukGarden is the leading brand of ecological home cleaning. Product research and development selected global natural active ingredients, aiming to produce green, healthy, ecological and environmentally friendly cleaning and toiletry products. ',
            'meta_image' => asset('/images/2023091815305860bfc6.jpg'),
        ];

        return view('pages.contact-us')->with($seo);
    }

    public function getNews()
    {
        
        $seo = [
            'page_title' => '',
            'meta_title' => 'Sukgarden',
            'meta_desc' => 'SukGarden is the leading brand of ecological home cleaning. Product research and development selected global natural active ingredients, aiming to produce green, healthy, ecological and environmentally friendly cleaning and toiletry products. ',
            'meta_image' => asset('/images/2023091815305860bfc6.jpg'),
        ];

        return view('pages.news')->with($seo);
    }

    public function showNews($id)
    {
        $seo = [
            'page_title' => '',
            'meta_title' => 'Sukgarden',
            'meta_desc' => 'SukGarden is the leading brand of ecological home cleaning. Product research and development selected global natural active ingredients, aiming to produce green, healthy, ecological and environmentally friendly cleaning and toiletry products. ',
            'meta_image' => asset('/images/2023091815305860bfc6.jpg'),
        ];
        
        return view('pages.news-detail')->with($seo);
    }
}
