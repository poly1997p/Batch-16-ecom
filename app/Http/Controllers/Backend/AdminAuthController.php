<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    Public function loginForm()
    {
         return view('backend.admin-login');

        
    }
}
