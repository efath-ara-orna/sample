<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\About;

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
        $alldata=Shop::get();
        return view('frontend.web.front',compact('alldata'));

    }


    
//frontend abot
    public function aboutus(){
        $data=About::first();
      return view('frontend.about.aboutus',compact('data'));
    }
}
