<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home-fa');
    }
    public function about()
    {
        return view('homepage_fa.about');
    }
    public function org()
    {
        return view('homepage_fa.org');
    }
    public function committee()
    {
        return view('homepage_fa.committee');
    }
    public function partners()
    {
        return view('homepage_fa.partners');
    }
    public function workshops()
    {
        return view('homepage_fa.workshops');
    }
    public function contact()
    {
        return view('homepage_fa.contact');
    }
}
