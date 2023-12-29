<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;


Route::get('', [LandingPageController::class, 'home'])->name('landing-page.home');
Route::get('contact-us', [LandingPageController::class, 'contactUs'])->name('landing-page.contact-us');
Route::get('our-story', [LandingPageController::class, 'ourStory'])->name('landing-page.our-story');
Route::get('our-product', [LandingPageController::class, 'ourProduct'])->name('landing-page.our-product');
Route::get('news', [LandingPageController::class, 'getNews'])->name('landing-page.news');
Route::get('news/{new_id}', [LandingPageController::class, 'showNews'])->name('landing-page.show-news');
