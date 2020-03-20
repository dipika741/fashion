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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
    {
        return view('fashion/index');
    }


    
    public function contact()
    {
        return view('fashion/contact');
    }

    public function blog()
    {
        return view('fashion/blog');
    }

    public function about()
    {
        return view('fashion/about');
    }

    public function faq()
    {
        return view('fashion/faq');
    }

    public function login()
    {
        return view('fashion/login');
    }

  
}
