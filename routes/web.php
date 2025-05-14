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
Route:: get ('/type-products/{type}', [FrontendController::class, 'typeProducts']);
Route:: get ('/view-cart-products', [FrontendController::class, 'viewCart']);
Route:: get ('/checkout', [FrontendController::class, 'checkOut']);

//policy--

Route:: get ('/privecy-policy', [FrontendController::class, 'privecyPolicy']);
Route:: get ('/terms-conditions', [FrontendController::class, 'termsCondition']);
Route:: get ('/refund-policy', [FrontendController::class, 'refundPolicy']);
Route:: get ('/payment-policy', [FrontendController::class, 'paymentPolicy']);
Route:: get ('/about-us', [FrontendController::class, 'aboutUs']);
Route:: get ('/contact-us', [FrontendController::class, 'contactUs']);


