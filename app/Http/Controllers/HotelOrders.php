<?php

namespace App\Http\Controllers;

use App\ModelHotelOrders;
use Illuminate\Http\Request;

class HotelOrders extends Controller
{
    //
    public function getAll()
    {
        $data = ModelHotelOrders::with('hotel', 'customer', 'hoteldetail')->get();
        return $data;
    }
}
