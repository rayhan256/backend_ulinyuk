<?php

use App\GaleriHotelModel;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//mst_customers
Route::get('/customer', 'Customers@getAll');
Route::post('/customer/post', 'Customers@insertData');
Route::put('/customer/update/{id}', 'Customers@updateData');
Route::delete('/customer/delete/{id}', 'Customers@deleteData');
Route::get('/customer/{id}', 'Customers@getDataId');

//mst-admins
Route::get('/admin', 'Admins@getAll');
Route::post('/admin/post', 'Admins@insertData');
Route::put('/admin/update/{id}', 'Admins@updateData');
Route::delete('/admin/delete/{id}', 'Admins@deleteData');
Route::get('/admin/{id}', 'Admins@getDataId');

//mst_hotels
Route::get('/hotel', 'Hotels@getAll');
Route::post('/hotel/post', 'Hotels@insertData');
Route::put('/hotel/update/{id}', 'Hotels@updateData');
Route::delete('/hotel/delete/{id}', 'Hotels@deleteData');
Route::get('/hotel/{id}', 'Hotels@getDataId');

//hotel_orders
Route::get('/hotel_order', 'HotelOrders@getAll');
