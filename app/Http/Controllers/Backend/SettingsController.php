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

    public function updateSettings(Request $request)
    {
        $settings = Settings::first();

        $settings->phone = $request->phone;
        $settings->email = $request->email;
        $settings->address = $request->address;
        $settings->facebook = $request->facebook;
        $settings->twitter = $request->twitter;
        $settings->instagram = $request->instagram;
        $settings->youtube = $request->youtube;
        $settings->free_shipping_amount	 = $request->free_shipping_amount;

        if (isset($request->logo)) {

         if ($settings->logo && file_exists('/backend/images/settings' . $settings->logo)) {

            unlink('/backend/images/settings' . $settings->logo);
         }

         $imageName = rand() . '-logo-' . '.' . $request->logo->extension();
         $request->logo->move('/backend/images/settings', $imageName);
         $settings->logo = $imageName;
      }

       if (isset($request->hero_image)) {

         if ($settings->hero_image && file_exists('/backend/images/settings' . $settings->hero_image)) {

            unlink('/backend/images/settings' . $settings->hero_image);
         }

         $sliderName = rand() . '-slider-' . '.' . $request->hero_image->extension();
         $request->hero_image->move('/backend/images/settings', $sliderName);
         $settings->hero_image = $sliderName;
      }

      $settings->save();
      toastr()->success('Setting Update Successfully!');
      return redirect()->back();
    }
}
