<?php

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

Route::get('/', function () {
    return view('home.index');
});

Route::get('/cart', function () {
    return view('cart.index');
});

Route::get('/categories', function () {
    return view('categories.index');
});

Route::get('/checkout', function () {
    return view('checkout.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/product', function () {
    return view('product.index');
});
