<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CustomerController;
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
    Route::delete('customers_delete/{city}', 'destroy')->name('customers.delete');
    Route::put('customers_update/{city}', 'update')->name('customers.update');
});


