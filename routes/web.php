<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route:: get ('/', [FrontendController::class, 'index' ]);
Route:: get ('/shop', [FrontendController::class, 'shopProducts']);
Route:: get ('/return-process', [FrontendController::class, 'returnProcess']);
Route:: get ('/product-details', [FrontendController::class, 'productDetails']);
Route:: get ('/type-products', [FrontendController::class, 'typeProducts']);


