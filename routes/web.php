<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/{category}', [CategoriesController::class, 'index'])->name('showCategory');

Route::get('/checkout', [CheckoutController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/{category}/{product_id}', [ProductController::class, 'index'])->name('showProduct');
