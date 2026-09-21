<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
{
    $banners = [];
    $services = [];
    $programs = [];
    $news = [];
    $announcements = [];
    $gallery = [];
    $faqs = [];
    $contacts = [];

    return view('frontend.home.index', compact(
        'banners',
        'services',
        'programs',
        'news',
        'announcements',
        'gallery',
        'faqs',
        'contacts'
    ));
}
}