<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function productCreate(){

        return view('backend.product.create');
    }
}
