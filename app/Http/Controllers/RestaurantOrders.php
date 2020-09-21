<?php

namespace App\Http\Controllers;

use App\ModelRestaurantDetails;
use App\ModelRestaurantOrders;
use App\ModelRestaurants;
use Illuminate\Http\Request;

class RestaurantOrders extends Controller
{
    //
    public function getAll()
    {
        $data = ModelRestaurantOrders::with('customer', 'restaurant', 'restaurantdetail')->get();
        return $data;
    }
}
