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
Route::get('/', function () {
    return view('logins/login');
});

//HOME-DASHBOARD
Route::get('/dashboard', function () {
    return view('layouts/master');
});

//ADMINS
Route::get('/profile', 'Admins@index');
Route::get('/update-profile', 'Admins@update_profile');

//DESTINATIONS
Route::get('/objek-wisata', 'Destinations@index');
Route::get('/list-detail-objek-wisata', 'Destinations@list_objek_wisata');
Route::get('/tambah-data-objek-wisata', 'Destinations@add_objek_wisata');
Route::get('/tambah-detail-objek-wisata', 'Destinations@add_detail_objek_wisata');
Route::get('/edit-data-objek-wisata', 'Destinations@update_objek_wisata');

Route::get('/detail-objek-wisata', 'DestinationDetails@detail_objek_wisata');
Route::get('/data-order-objek-wisata', 'DestinationOrders@order_objek_wisata');
Route::get('/tambah-galeri-objek-wisata', 'GaleriDestinations@galeri_objek_wisata');

//HOTELS
Route::get('/hotel', 'Hotels@index');
Route::get('/list-detail-hotel', 'Hotels@list_hotel');
Route::get('/tambah-data-hotel', 'Hotels@add_hotel');
Route::get('/tambah-detail-hotel', 'Hotels@add_detail_hotel');
Route::get('/edit-data-hotel', 'Hotels@update_hotel');

Route::get('/detail-hotel', 'HotelDetails@detail_hotel');
Route::get('/data-order-hotel', 'HotelOrders@order_hotel');
Route::get('/tambah-galeri-hotel', 'GaleriHotels@galeri_hotel');

//RESTAURANTS
Route::get('/restaurant', 'Restaurants@index');
Route::get('/list-detail-restaurant', 'Restaurants@list_restaurant');
Route::get('/tambah-data-restaurant', 'Restaurants@add_restaurant');
Route::get('/tambah-detail-restaurant', 'Restaurants@add_detail_restaurant');
Route::get('/edit-data-restaurant', 'Restaurants@update_restaurant');

Route::get('/detail-restaurant', 'RestaurantDetails@detail_restaurant');
Route::get('/data-order-restaurant', 'RestaurantOrders@order_restaurant');
Route::get('/tambah-galeri-restaurant', 'GaleriRestaurants@galeri_restaurant');
