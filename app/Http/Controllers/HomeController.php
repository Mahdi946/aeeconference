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
        return view('about-fa');
    }
    public function org()
    {
        return view('org-fa');
    }
    public function committee()
    {
        return view('committee-fa');
    }
    public function partners()
    {
        return view('partners-fa');
    }
    public function workshops()
    {
        return view('workshops-fa');
    }
    public function contact()
    {
        return view('contact-fa');
    }
}
