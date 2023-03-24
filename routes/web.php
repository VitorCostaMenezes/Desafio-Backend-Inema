<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/list_clients', function () {
    return view('list_clients');
});

Route::get('/list_order', function () {
    return view('list_order');
});

Route::get('/list_products', function () {
    return view('list_products');
});

Route::get('/new_client', function () {
    return view('new_client');
});

Route::get('/new_order', function () {
    return view('new_order');
});
Route::get('/new_product', function () {
    return view('new_product');
});
