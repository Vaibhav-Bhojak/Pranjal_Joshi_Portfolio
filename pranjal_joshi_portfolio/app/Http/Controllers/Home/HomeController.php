<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }   

    public function services()
    {
        return view('home.services');
    }

    public function privacyPolicy()
    {
        return view('home.privacy_policy');
    }

    public function termsOfService()
    {
        return view('home.terms');
    }

    public function disclaimer()
    {
        return view('home.disclaimer');
    }   

}
