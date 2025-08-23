<?php

use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\productController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\SubCategoryController;
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
Route:: get ('/category-products/{slug}/{id}', [FrontendController::class, 'categoryProducts']);
Route:: get ('/subcategory-products/{slug}/{id}', [FrontendController::class, 'subCategoryProducts']);
Route:: get ('/shop', [FrontendController::class, 'shopProducts']);
Route:: get ('/return-process', [FrontendController::class, 'returnProcess']);
Route:: get ('/product-details/{slug}', [FrontendController::class, 'productDetails']);
Route:: get ('/type-products/{type}', [FrontendController::class, 'typeProducts']);
Route:: get ('/view-cart-products', [FrontendController::class, 'viewCart']);
Route:: get ('/checkout', [FrontendController::class, 'checkOut']);

//order placing process

Route:: post ('/confirm-order', [FrontendController::class, 'confirmOrder']);
Route:: get ('/success-order/{invoiceid}', [FrontendController::class, 'successOrder']);

//Add to cart routes

Route:: post('/product-details/add-to-cart/{product_id}', [FrontendController::class, 'addToCartDetails']);
Route:: get('/add-to-cart/{product_id}', [FrontendController::class, 'addToCart']);
Route:: get('/add-to-cart/delete/{id}', [FrontendController::class, 'addToCartDelete']);

//policy...

Route:: get ('/privecy-policy', [FrontendController::class, 'privecyPolicy']);
Route:: get ('/terms-conditions', [FrontendController::class, 'termsCondition']);
Route:: get ('/refund-policy', [FrontendController::class, 'refundPolicy']);
Route:: get ('/payment-policy', [FrontendController::class, 'paymentPolicy']);
Route:: get ('/about-us', [FrontendController::class, 'aboutUs']);
Route:: get ('/contact-us', [FrontendController::class, 'contactUs']);
Route:: post ('/contact-message/store', [FrontendController::class, 'contactMessageStore']);

//product searching....
Route:: get ('/search-products', [FrontendController::class, 'searchProduct']);

//admin aurthController
Route::get('/admin/login', [AdminAuthController::class, 'loginForm']);

Route::get('/admin/logout', [AdminAuthController::class, 'logoutAdmin']);

Auth::routes();

Route::get('/admin/dashboard', [AdminController::class, 'adminDsahboard']);

//category routes...

Route::get('/admin/category/create', [CategoryController::class, 'categoryCreate']);
Route::post('/admin/category/store', [CategoryController::class, 'categoryStore']);
Route::get('/admin/category/list', [CategoryController::class, 'categoryList']);
Route::get('/admin/category/delete/{id}', [CategoryController::class, 'categoryDelete']);
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'categoryEdit']);
Route::post('/admin/category/update/{id}', [CategoryController::class, 'categoryUpdate']);

//subCategory routes....

Route::get('/admin/sub-category/create', [SubCategoryController::class, 'subCategoryCreate']);
Route::post('/admin/sub-category/store', [SubCategoryController::class, 'subCategoryStore']);
Route::get('/admin/sub-category/list', [SubCategoryController::class, 'subCategoryList']);
Route::get('/admin/sub-category/delete/{id}', [SubCategoryController::class, 'subCategoryDelete']);
Route::get('/admin/sub-category/edit/{id}', [SubCategoryController::class, 'subCategoryEdit']);
Route::post('/admin/sub-category/update/{id}', [SubCategoryController::class, 'subCategoryUpdate']);

//product routes....

Route::get('/admin/product/create', [productController::class, 'productCreate']);
Route::post('/admin/product/store', [productController::class, 'productStore']);
Route::get('/admin/product/list', [productController::class, 'productList']);
Route::get('/admin/product/delete/{id}', [productController::class, 'productDelete']);
Route::get('/admin/product/edit/{id}', [productController::class, 'productEdit']);
Route::post('/admin/product/Update/{id}', [productController::class, 'productUpdate']);

//delete button ,edit button
Route::get('/admin/product/color/delete/{id}', [productController::class, 'colorDelete']);
Route::get('/admin/product/size/delete/{id}', [productController::class, 'sizeDelete']);
Route::get('/admin/product/gallery-image/delete/{id}', [productController::class, 'galleryImageDelete']);
Route::get('/admin/product/gallery-image/edit/{id}', [productController::class, 'galleryImageEdit']);
Route::post('/admin/product/gallery-image/update/{id}', [productController::class, 'galleryImageUpdate']);

//settings...

Route::get('/admin/general-settings', [SettingsController::class, 'showSettings']);
Route::post('/admin/general-settings/update', [SettingsController::class, 'updateSettings']);
Route::get('/admin/policies', [SettingsController::class, 'showPolicies']);
Route::post('/admin/policies/update', [SettingsController::class, 'updatePolicies']);
Route::get('/admin/show-banner', [SettingsController::class, 'showBanners']);
Route::get('/admin/edit-banner/{id}', [SettingsController::class, 'editBanner']);
Route::post('/admin/update-banner/{id}', [SettingsController::class, 'updateBanner']);

//contact-message...

Route::get('/admin/contact-message/list', [SettingsController::class, 'showContactMessage']);
Route::get('/admin/contact-message/delete/{id}', [SettingsController::class, 'deleteContactMessage']);

//orders...

Route::get('/admin/orders/all', [OrderController::class, 'showOrders']);
Route::get('/admin/order/status/{id}', [OrderController::class, 'updateOrderStatus']);