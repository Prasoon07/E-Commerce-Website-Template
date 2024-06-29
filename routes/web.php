<?php
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [FrontendController::class, 'home']);

Route::get('/home-02', [FrontendController::class, 'home_02']);

Route::get('/home-03', [FrontendController::class, 'home_03']);

Route::get('/product', [FrontendController::class, 'product']);

Route::get('/product-detail', [FrontendController::class, 'product_detail']);

Route::get('/shoping-cart', [FrontendController::class, 'shoping_cart']);

Route::get('/blog', [FrontendController::class, 'blog']);

Route::get('/about', [FrontendController::class, 'about']);

Route::get('/contact', [FrontendController::class, 'contact']);