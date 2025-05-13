<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
       return view('frontend.index');
    }

    public function shopProducts(){
        return view ('frontend.shop');
    }

    public function returnProcess(){
        return view ('frontend.return-process');
    }

    public function productDetails(){
        return view ('frontend.product-details');
    } 

     public function typeProducts(){
        return view ('frontend.type-products');
    } 
}
