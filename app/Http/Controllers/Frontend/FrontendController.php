<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller; // Import the base Controller class

class FrontendController extends Controller
{
    public function home(){
        return view('Frontend.home');
    }

    public function home_02(){
        return view('Frontend.home-02');
    }

    public function home_03(){
        return view('Frontend.home-03');
    }


    public function product(){
        return view('Frontend.product');
    }
    
    public function product_detail(){
        return view('Frontend.product-detail');
    }

    public function shoping_cart(){
        return view('Frontend.shoping-cart');
    }

    public function blog(){
        return view('Frontend.blog');
    }

    public function about(){
        return view('Frontend.about');
    }

    public function contact(){
        return view('Frontend.contact');
    }
}