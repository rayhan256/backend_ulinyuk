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
    return view('index');
});

//HOTELS
Route::get('/hotels', function () {
    return view('hotels/dashboard');
});
Route::get('/hotel-list', function () {
    return view('hotels/list');
});
Route::get('/hotel-detail', function () {
    return view('hotels/detail');
});

//RESTAURANTS
Route::get('/restaurants', function () {
    return view('restaurants/dashboard');
});
Route::get('/restaurant-list', function () {
    return view('restaurants/list');
});
Route::get('/restaurant-detail', function () {
    return view('restaurants/detail');
});

//DESTINATIONS
Route::get('/destinations', function () {
    return view('destinations/dashboard');
});
Route::get('/destination-list', function () {
    return view('destinations/list');
});
Route::get('/destination-detail', function () {
    return view('destinations/detail');
});
