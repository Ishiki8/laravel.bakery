<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [Controllers\MainController::class, 'index'])->name('index');

Route::get('/category/{code}', [Controllers\MainController::class, 'category'])->name('category');

Route::get('/search', [Controllers\MainController::class, 'search'])->name('search');

Route::get('/product/{code}', [Controllers\MainController::class, 'product'])->name('product');

Route::get('/registration', [Controllers\MainController::class, 'registration'])->name('registration');

Route::get('/login', [Controllers\MainController::class, 'login'])->name('login');

Route::get('/admin', [Controllers\MainController::class, 'admin'])->name('admin');

Route::get('/cart', [Controllers\CartController::class, 'cart'])->name('cart');

Route::post('/cart/add/{id}', [Controllers\CartController::class, 'cartAdd'])->name('cart-add');

Route::post('/cart/remove/{id}', [Controllers\CartController::class, 'cartRemove'])->name('cart-remove');
