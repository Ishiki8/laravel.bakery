<?php

use Illuminate\Support\Facades\Auth;
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

Route::controller(Controllers\CartController::class)->group(function() {
    Route::get('/cart',  'cart')->name('cart');
    Route::post('/cart/add/{id}', 'cartAdd')->name('cart-add');
    Route::post('/cart/remove/{id}', 'cartRemove')->name('cart-remove');
    Route::get('/cart/confirm', 'cartConfirm')->name('cart-confirm');
    Route::post('/cart/confirm', 'cartConfirmAdd')->name('cart-confirm-add');
});

Route::name('user.')->group(function() {
    Route::get('/login', [Controllers\Auth\LoginController::class, 'loginView'])->name('login');
    Route::post('/login', [Controllers\Auth\LoginController::class, 'login']);

    Route::get('/logout', function() {
        Auth::logout();
        return redirect(route('index'));
    })->name('logout');

    Route::get('/registration', [Controllers\Auth\RegistrationController::class, 'registrationView'])->name('registration');
    Route::post('/registration', [Controllers\Auth\RegistrationController::class, 'register']);

    Route::get('/orders', [Controllers\MainController::class, 'userOrdersView'])->name('userOrders');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/admin/users', [Controllers\Admin\UsersController::class, 'users'])->name('admin-users');
    Route::get('/admin/products', [Controllers\Admin\ProductsController::class, 'products'])->name('admin-products');
    Route::get('/admin/orders', [Controllers\Admin\OrdersController::class, 'orders'])->name('admin-orders');
    Route::get('/admin/categories', [Controllers\Admin\CategoriesController::class, 'categories'])->name('admin-categories');
});

