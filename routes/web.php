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


// Route::get('/events/list_clients', function () {
//     return view('/events/list_clients');
// });
// Route::get('/list_order', function () {
//     return view('list_order');
// });
// Route::get('/list_products', function () {
//     return view('list_products');
// });
// Route::get('/', [EventController::class, 'index']);
// Route::post('/events', [EventController::class, 'create']);

// Route::post('/events', [EventController::class, 'store']);


Route::get('/list_clients', [ClientController::class, 'index']);
Route::post('/save_client', [ClientController::class, 'create']);
Route::get('/new_client', function () {
    return view('/clients/create');
});





Route::get('/list_products', [ProductController::class, 'index']);
Route::post('/save_product', [ProductController::class, 'store']);
Route::get('/new_product', [ProductController::class, 'create']);
// Route::get('/new_product', function () {
//     return view('/products/create');
// });





Route::get('/new_order', [OrderController::class, 'show']);

Route::get('/list_order', [OrderController::class, 'index']);

Route::post('/save_order', [OrderController::class, 'create']);
// Route::post('/save_order', [ProductController::class, 'create']);
// Route::get('/new_order', function () {
//     return view('/products/create');
// });


// Route::get('/list_clients', function () {
//     return view('/clients/show');
// });

// Route::get('/new_order', function () {
//     return view('/orders/new_order');
// });

// Route::get('/list_orders', function () {
//     return view('/orders/list_orders');
// });

// Route::get('/new_product', function () {
//     return view('/products/new_product');
// });

// Route::get('/list_products', function () {
//     return view('/products/list_products');
// });