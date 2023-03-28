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


use App\Http\Controllers\EventController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/list_clients', [ClientController::class, 'show']);
Route::post('/save_client', [ClientController::class, 'store']);
Route::get('/new_client', [ClientController::class, 'create']);
Route::get('/client/edit/{id}', [ClientController::class, 'edit']);
Route::put('/clients/update/{id}', [ClientController::class, 'update']);

Route::get('/list_products', [ProductController::class, 'show']);
Route::post('/save_product', [ProductController::class, 'store']);
Route::get('/new_product', [ProductController::class, 'create']);
Route::get('/estoque/edit/{id}', [ProductController::class, 'edit']);
Route::put('/estoque/update/{id}', [ProductController::class, 'update']);

Route::get('/order/{id}', [OrderController::class, 'order']);
Route::get('/list_orders', [OrderController::class, 'show']);
Route::get('/new_order', [OrderController::class, 'create']);
Route::post('/save_order', [OrderController::class, 'store']);

