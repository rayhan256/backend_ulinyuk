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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//auth user

Route::group(['prefix' => 'auth'], function () {
    Route::post('signup', 'AuthController@signup');
    Route::post('login', 'AuthController@login');


    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

//mst_accounts
// Route::get('/account', 'Accounts@getAll');
// Route::post('/account/post', 'Accounts@insertData');
// Route::put('/account/update/{id}', 'Accounts@updateData');
// Route::delete('/account/delete/{id}', 'Accounts@deleteData');
// Route::get('/account/{id}', 'Accounts@getDataId');

//admins
Route::get('/admin', 'Admins@getAll');
Route::post('/admin/post', 'Admins@insertData');
Route::put('/admin/update/{id}', 'Admins@updateData');
Route::delete('/admin/delete/{id}', 'Admins@deleteData');
Route::get('/admin/{id}', 'Admins@getDataId');

//mst_customers
Route::get('/customer', 'Customers@getAll');
Route::post('/customer/post', 'Customers@insertData');
Route::put('/customer/update/{id}', 'Customers@updateData');
Route::delete('/customer/delete/{id}', 'Customers@deleteData');
Route::get('/customer/{id}', 'Customers@getDataId');



//mst_destination_details
Route::get('/destination_detail', 'DestinationDetails@getAll');
Route::post('/destination_detail/post', 'DestinationDetails@insertData');
Route::put('/destination_detail/update/{id}', 'DestinationDetails@updateData');
Route::delete('/destination_detail/delete/{id}', 'DestinationDetails@deleteData');
Route::get('/destination_detail/{id}', 'DestinationDetails@getDataId');

//mst_destinations
Route::get('/destination', 'Destinations@getAll');
Route::post('/destination/post', 'Destinations@insertData');
Route::put('/destination/update/{id}', 'Destinations@updateData');
Route::delete('/destination/delete/{id}', 'Destinations@deleteData');
Route::get('/destination/{id}', 'Destinations@getDataId');

//mst_destination_orders
Route::get('/destination_order', 'DestinationOrders@getAll');
Route::post('/destination_order/post', 'DestinationOrders@insertData');
Route::put('/destination_order/update/{id}', 'DestinationOrders@updateData');
Route::delete('/destination_order/delete/{id}', 'DestinationOrders@deleteData');
Route::get('/destination_order/{id}', 'DestinationOrders@getDataId');

//mst_galeri_destinations
Route::get('/galeri_destination', 'GaleriDestinations@getAll');
Route::post('/galeri_destination/post', 'GaleriDestinations@insertData');
Route::put('/galeri_destination/update/{id}', 'GaleriDestinations@updateData');
Route::delete('/galeri_destination/delete/{id}', 'GaleriDestinations@deleteData');
Route::get('/galeri_destination/{id}', 'GaleriDestinations@getDataId');

//mst_review_destinations
Route::get('/review_destination', 'ReviewDestinations@getAll');
Route::post('/review_destination/post', 'ReviewDestinations@insertData');
Route::put('/review_destination/update/{id}', 'ReviewDestinations@updateData');
Route::delete('/review_destination/delete/{id}', 'ReviewDestinations@deleteData');
Route::get('/review_destination/{id}', 'ReviewDestinations@getDataId');

//mst_histori_booking_destinations
Route::get('/histori_destination', 'HistoriBookingDestinations@getAll');
Route::post('/histori_destination/post', 'HistoriBookingDestinations@insertData');
Route::put('/histori_destination/update/{id}', 'HistoriBookingDestinations@updateData');
Route::delete('/histori_destination/delete/{id}', 'HistoriBookingDestinations@deleteData');
Route::get('/histori_destination/{id}', 'HistoriBookingDestinations@getDataId');



//mst_hotel_details
Route::get('/hotel_detail', 'HotelDetails@getAll');
Route::post('/hotel_detail/post', 'HotelDetails@insertData');
Route::put('/hotel_detail/update/{id}', 'HotelDetails@updateData');
Route::delete('/hotel_detail/delete/{id}', 'HotelDetails@deleteData');
Route::get('/hotel_detail/{id}', 'HotelDetails@getDataId');

//mst_hotels
Route::get('/hotel', 'Hotels@getAll');
Route::post('/hotel/post', 'Hotels@insertData');
Route::put('/hotel/update/{id}', 'Hotels@updateData');
Route::delete('/hotel/delete/{id}', 'Hotels@deleteData');
Route::get('/hotel/{id}', 'Hotels@getDataId');

//mst_hotel_orders
Route::get('/hotel_order', 'HotelOrders@getAll');
Route::post('/hotel_order/post', 'HotelOrders@insertData');
Route::put('/hotel_order/update/{id}', 'HotelOrders@updateData');
Route::delete('/hotel_order/delete/{id}', 'HotelOrders@deleteData');
Route::get('/hotel_order/{id}', 'HotelOrders@getDataId');

//mst_galeri_hotel
Route::get('/galeri_hotel', 'GaleriHotels@getAll');
Route::post('/galeri_hotel/post', 'GaleriHotels@insertData');
Route::put('/galeri_hotel/update/{id}', 'GaleriHotels@updateData');
Route::delete('/galeri_hotel/delete/{id}', 'GaleriHotels@deleteData');
Route::get('/galeri_hotel/{id}', 'GaleriHotels@getDataId');

//mst_review_hotels
Route::get('/review_hotel', 'ReviewHotels@getAll');
Route::post('/review_hotel/post', 'ReviewHotels@insertData');
Route::put('/review_hotel/update/{id}', 'ReviewHotels@updateData');
Route::delete('/review_hotel/delete/{id}', 'ReviewHotels@deleteData');
Route::get('/review_hotel/{id}', 'ReviewHotels@getDataId');

//mst_histori_booking_hotels
Route::get('/histori_hotel', 'HistoriBookingHotels@getAll');
Route::post('/histori_hotel/post', 'HistoriBookingHotels@insertData');
Route::put('/histori_hotel/update/{id}', 'HistoriBookingHotels@updateData');
Route::delete('/histori_hotel/delete/{id}', 'HistoriBookingHotels@deleteData');
Route::get('/histori_hotel/{id}', 'HistoriBookingHotels@getDataId');



//mst_restaurant_details
Route::get('/restaurant_detail', 'RestaurantDetails@getAll');
Route::post('/restaurant_detail/post', 'RestaurantDetails@insertData');
Route::put('/restaurant_detail/update/{id}', 'RestaurantDetails@updateData');
Route::delete('/restaurant_detail/delete/{id}', 'RestaurantDetails@deleteData');
Route::get('/restaurant_detail/{id}', 'RestaurantDetails@getDataId');

//mst_restaurants
Route::get('/restaurant', 'Restaurants@getAll');
Route::post('/restaurant/post', 'Restaurants@insertData');
Route::put('/restaurant/update/{id}', 'Restaurants@updateData');
Route::delete('/restaurant/delete/{id}', 'Restaurants@deleteData');
Route::get('/restaurant/{id}', 'Restaurants@getDataId');

//mst_restaurant_orders
Route::get('/restaurant_order', 'RestaurantOrders@getAll');
Route::post('/restaurant_order/post', 'RestaurantOrders@insertData');
Route::put('/restaurant_order/update/{id}', 'RestaurantOrders@updateData');
Route::delete('/restaurant_order/delete/{id}', 'RestaurantOrders@deleteData');
Route::get('/restaurant_order/{id}', 'RestaurantOrders@getDataId');

//mst_galeri_restaurants
Route::get('/galeri_restaurant', 'GaleriRestaurants@getAll');
Route::post('/galeri_restaurant/post', 'GaleriRestaurants@insertData');
Route::put('/galeri_restaurant/update/{id}', 'GaleriRestaurants@updateData');
Route::delete('/galeri_restaurant/delete/{id}', 'GaleriRestaurants@deleteData');
Route::get('/galeri_restaurant/{id}', 'GaleriRestaurants@getDataId');

//mst_review_restaurants
Route::get('/review_restaurant', 'ReviewRestaurants@getAll');
Route::post('/review_restaurant/post', 'ReviewRestaurants@insertData');
Route::put('/review_restaurant/update/{id}', 'ReviewRestaurants@updateData');
Route::delete('/review_restaurant/delete/{id}', 'ReviewRestaurants@deleteData');
Route::get('/review_restaurant/{id}', 'ReviewRestaurants@getDataId');

//mst_histori_booking_restaurants
Route::get('/histori_restaurant', 'HistoriBookingRestaurants@getAll');
Route::post('/histori_restaurant/post', 'HistoriBookingRestaurants@insertData');
Route::put('/histori_restaurant/update/{id}', 'HistoriBookingRestaurants@updateData');
Route::delete('/histori_restaurant/delete/{id}', 'HistoriBookingRestaurants@deleteData');
Route::get('/histori_restaurant/{id}', 'HistoriBookingRestaurants@getDataId');


//mst_payments
Route::get('/payment', 'Payments@getAll');
Route::post('/payment/post', 'Payments@insertData');
Route::put('/payment/update/{id}', 'Payments@updateData');
Route::delete('/payment/delete/{id}', 'Payments@deleteData');
Route::get('/payment/{id}', 'Payments@getDataId');
