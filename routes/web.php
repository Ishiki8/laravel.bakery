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
    return view('index')->with('title', 'Главная');
});

Route::get('/category', function () {
    return view('category')->with([
        'title' => 'Категория',
        'category_title' => [
            'bread' => 'Хлеб',
            'buns' => 'Булочки',
            'cakes' => 'Торты',
            'cookies' => 'Печенье',
            'pies' => 'Пирожки'
        ][$_GET['id']]
    ]);
});

Route::get('/search', function () {
    return view('search')->with('title', 'Поиск');
});
