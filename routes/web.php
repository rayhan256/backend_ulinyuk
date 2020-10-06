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

//LOGIN
Route::get('/login', function () {
    return view('logins/login');
});

//HOME-DASHBOARD
Route::get('/dashboard', function () {
    return view('layouts/master');
});

//ADMINS
Route::get('/profile', function () {
    return view('admins/profile');
});
Route::get('/update-profile', function () {
    return view('admins/update');
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
Route::get('/hotel-add-data', function () {
    return view('hotels/add');
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
Route::get('/restaurant-add-data', function () {
    return view('restaurants/add');
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
Route::get('/destination-add-data', function () {
    return view('destinations/add');
});
