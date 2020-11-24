<?php

use App\Http\Middleware\CekLoginMiddleware;
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
// Route::get('/', function () {
//     return view('logins/login');
// });
// Route::get('/login', 'AuthController@login_admin');
// Route::post('/postlogin', 'AuthController@postlogin');

Route::get('/', 'otentikasi\OtentikasiController@index')->name('index');
Route::post('/login', 'otentikasi\OtentikasiController@login')->name('login');

//Route::group(['middleware' => 'CekLoginMiddleware'], function () {});

//HOME-DASHBOARD
Route::get('/dashboard', function () {
    return view('layouts/master');
});

// //ADMINS
// Route::get('/profile', 'Admins@index');
// Route::get('/admin', 'Admins@list_data');

// Route::get('/tambah-data-admin', 'Admins@add_data');
// Route::post('/tambah', 'AuthController@signup');

// Route::get('/update-profile/{id}', 'Admins@update_profile');
// Route::post('/update', 'Admins@update_proses_profile');

//DESTINATIONS
Route::get('/objek-wisata', 'Destinations@index');
Route::get('/list-detail-objek-wisata', 'Destinations@list_objek_wisata');
//tambah data master
Route::get('/tambah-data-objek-wisata', 'Destinations@add_objek_wisata');
Route::post('/tambah-data-ow', 'Destinations@add_proses_objek_wisata');
//tambah data detail
Route::get('/tambah-detail-objek-wisata/{id}', 'DestinationDetails@add_detail_objek_wisata');
Route::post('/tambah-detail-ow', 'DestinationDetails@add_proses_detail_objek_wisata');
//tambah data galeri
Route::get('/tambah-galeri-objek-wisata/{id}', 'GaleriDestinations@galeri_objek_wisata');
Route::post('/tambah-galeri-ow', 'GaleriDestinations@add_galeri_objek_wisata');
// view data detail
Route::get('/detail-objek-wisata/{id}', 'DestinationDetails@detail_objek_wisata');
Route::get('/data-order-objek-wisata', 'DestinationOrders@order_objek_wisata');
// edit data detail
Route::get('/edit-data-objek-wisata/{id}', 'DestinationDetails@update_objek_wisata');
Route::post('/edit-data-ow', 'DestinationDetails@update_proses_objek_wisata');
// hapus data
Route::get('hapus-data-objek-wisata/{id}', 'DestinationDetails@delete_objek_wisata');

//HOTELS
Route::get('/hotel', 'Hotels@index');
Route::get('/list-detail-hotel', 'Hotels@list_hotel');
//tambah data master
Route::get('/tambah-data-hotel', 'Hotels@add_hotel');
Route::post('tambah-data-ho', 'Hotels@add_proses_hotel');
//tambah data detail
Route::get('/tambah-detail-hotel/{id}', 'HotelDetails@add_detail_hotel');
Route::post('/tambah-detail-ho', 'HotelDetails@add_proses_detail_hotel');
//tambah data galeri
Route::get('/tambah-galeri-hotel/{id}', 'GaleriHotels@galeri_hotel');
Route::post('/tambah-galeri-ho', 'GaleriHotels@add_galeri_hotel');
//view data detail
Route::get('/detail-hotel/{id}', 'HotelDetails@detail_hotel');
Route::get('/data-order-hotel', 'HotelOrders@order_hotel');
//edit data detail
Route::get('/edit-data-hotel/{id}', 'HotelDetails@update_hotel');
Route::post('/edit-data-ho', 'HotelDetails@update_proses_hotel');
//hapus data
Route::get('hapus-data-hotel/{id}', 'HotelDetails@delete_hotel');


//RESTAURANTS
Route::get('/restaurant', 'Restaurants@index');
Route::get('/list-detail-restaurant', 'Restaurants@list_restaurant');
//tambah data master
Route::get('/tambah-data-restaurant', 'Restaurants@add_restaurant');
Route::post('/tambah-data-resto', 'Restaurants@add_proses_restaurant');
//tambah data detail
Route::get('/tambah-detail-restaurant/{id}', 'RestaurantDetails@add_detail_restaurant');
Route::post('/tambah-detail-resto', 'RestaurantDetails@add_proses_detail_restaurant');
//tambah data galeri
Route::get('/tambah-galeri-restaurant/{id}', 'GaleriRestaurants@galeri_restaurant');
Route::post('/tambah-galeri-resto', 'GaleriRestaurants@add_galeri_restaurant');
//view data detail
Route::get('/detail-restaurant/{id}', 'RestaurantDetails@detail_restaurant');
Route::get('/data-order-restaurant', 'RestaurantOrders@order_restaurant');
//edit data detail
Route::get('/edit-data-restaurant/{id}', 'RestaurantDetails@update_restaurant');
Route::post('/edit-data-resto', 'RestaurantDetails@update_proses_restaurant');
//hapus data
Route::get('hapus-data-restaurant/{id}', 'RestaurantDetails@delete_restaurant');


//NEWS
Route::get('/berita', 'News@index');
Route::get('/list-berita', 'News@list_berita');

Route::get('/tambah-berita', 'News@add_berita');
Route::post('/tambah', 'News@add_proses_berita');

Route::get('/detail-berita/{id}', 'News@detail_berita');

//tambah data galeri
Route::get('/tambah-galeri-berita/{id}', 'GaleriNews@galeri_berita');
Route::post('/tambah-galeri', 'GaleriNews@add_galeri_berita');

Route::get('/edit-berita/{id}', 'News@update_berita');
Route::post('/edit', 'News@update_proses_berita');

Route::get('/hapus-berita/{id}', 'News@delete_berita');

Route::get('/logout', 'otentikasi\OtentikasiController@logout')->name('logout');
