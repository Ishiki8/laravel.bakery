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

Route::controller(Controllers\CartController::class)->prefix('cart')->group(function() {
    Route::get('/',  'cart')->name('cart');
    Route::post('/add/{id}', 'cartAdd')->name('cart-add');
    Route::post('/remove/{id}', 'cartRemove')->name('cart-remove');
//    Route::post('/getCart', 'getLsCart')->name('ls-cart');
    Route::get('/confirm', 'cartConfirm')->name('cart-confirm');
    Route::post('/confirm', 'cartConfirmAdd')->name('cart-confirm-add');
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

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/settings', [Controllers\Auth\SettingsController::class, 'userSettingsView'])->name('userSettings');
        Route::post('/settings/change/name', [Controllers\Auth\SettingsController::class, 'changeName'])->name('userChangeName');
        Route::post('/settings/change/email', [Controllers\Auth\SettingsController::class, 'changeEmail'])->name('userChangeEmail');
        Route::post('/settings/change/password', [Controllers\Auth\SettingsController::class, 'changePassword'])->name('userChangePassword');
        Route::post('/settings/change/address', [Controllers\Auth\SettingsController::class, 'changeAddress'])->name('userChangeAddress');
        Route::post('/settings/change/phone', [Controllers\Auth\SettingsController::class, 'changePhone'])->name('userChangePhone');

        Route::get('/orders', [Controllers\MainController::class, 'userOrdersView'])->name('userOrders');
    });
});

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'is_admin', 'prefix' => 'admin'], function () {
        Route::resource('users', App\Http\Controllers\Admin\UsersController::class)->except([
            'edit', 'update', 'show', 'destroy'
        ]);

        Route::resource('orders', App\Http\Controllers\Admin\OrdersController::class)->except([
            'create', 'store', 'show', 'destroy'
        ]);

        Route::resource('products', App\Http\Controllers\Admin\ProductsController::class)->except([
            'show', 'destroy'
        ]);

        Route::resource('categories', App\Http\Controllers\Admin\CategoriesController::class)->except([
            'show', 'destroy'
        ]);
    });
});







