<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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
    return view('home');
});

Route::controller(CityController::class)->group(function(){
    Route::get('cities/', 'index')->name('cities.index');
    Route::get('cities/create','create')->name('cities.create');
    Route::get('cities/{id}', 'show')->name('cities.show');
    Route::post('cities','store')->name('cities.store');
    Route::get('cities_edit/{id}', 'edit')->name('cities.edit');
    Route::delete('cities_delete/{city}', 'destroy')->name('cities.delete');
    Route::put('cities_update/{city}', 'update')->name('cities.update');
});

Route::controller(CustomerController::class)->group(function(){
    Route::get('customers/', 'index')->name('customers.index');
    Route::get('customers/create','create')->name('customers.create');
    Route::get('customers/{id}', 'show')->name('customers.show');
    Route::post('customers','store')->name('customers.store');
    Route::get('customers_edit/{id}', 'edit')->name('customers.edit');
    Route::delete('customers_delete/{customer}', 'destroy')->name('customers.delete');
    Route::put('customers_update/{customer}', 'update')->name('customers.update');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('products/', 'index')->name('products.index');
    Route::get('products/create','create')->name('products.create');
    Route::get('products/{id}', 'show')->name('products.show');
    Route::post('products','store')->name('products.store');
    Route::get('products_edit/{id}', 'edit')->name('products.edit');
    Route::delete('products_delete/{product}', 'destroy')->name('products.delete');
    Route::put('products_update/{product}', 'update')->name('products.update');
});

Route::controller(OrderController::class)->group(function(){
    Route::get('orders/', 'index')->name('orders.index');
    Route::get('orders/create','create')->name('orders.create');
    Route::get('orders/{id}', 'show')->name('orders.show');
    Route::post('orders','store')->name('orders.store');
    Route::get('orders_edit/{id}', 'edit')->name('orders.edit');
    Route::delete('orders_delete/{order}', 'destroy')->name('orders.delete');
    Route::put('orders_update/{order}', 'update')->name('orders.update');
});








