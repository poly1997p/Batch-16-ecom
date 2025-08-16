<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function showSettings(){

        $settings = Settings::first();
        
        return view('backend.settings.show-settings', compact('settings'));
    }
}
