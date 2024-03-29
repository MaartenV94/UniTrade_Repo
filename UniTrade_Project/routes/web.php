<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Auth;

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

route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'redirect'])->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/view_catagory', [AdminController::class, 'view_catagory']);

route::post('/add_catagory', [AdminController::class, 'add_catagory']);

route::get('/delete_catagory/{id}', [AdminController::class, 'delete_catagory']);

route::get('/view_product', [AdminController::class, 'view_product']);

route::post('/add_product', [AdminController::class, 'add_product']);

route::get('/show_product', [AdminController::class, 'show_product']);

route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

route::get('/update_product/{id}', [AdminController::class, 'update_product']);

route::post('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']);

route::get('/order', [AdminController::class, 'order']);

route::get('/delivered/{id}', [AdminController::class, 'delivered']);

route::get('/search', [AdminController::class, 'searchdata']);





route::get('/product_details/{id}', [HomeController::class, 'product_details']);

route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);

route::get('/show_cart', [HomeController::class, 'show_cart']);

route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);

route::get('/cash_order', [HomeController::class, 'cash_order']);

route::get('/stripe/{totalprice}', [HomeController::class, 'stripe']);

Route::post('stripe/{totalprice}', [HomeController::class, 'stripePost'])-> name('stripe.post');

route::get('/about_page', [HomeController::class, 'about_page']);

route::get('/testimonial_page', [HomeController::class, 'testimonial_page']);

route::get('/contact_page', [HomeController::class, 'contact_page']);

route::get('/show_order', [HomeController::class, 'show_order']);

route::get('/cancel_order/{id}', [HomeController::class, 'cancel_order']);

route::get('/product_search', [HomeController::class, 'product_search']);



route::get('/product_page', [ProductController::class, 'product_page']);

route::get('/product_page_search', [ProductController::class, 'product_page_search']);



route::get('/upload_page', [UploadController::class, 'upload_page']);

route::post('/new_upload', [UploadController::class, 'new_upload']);





