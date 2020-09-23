<?php

namespace App\Http\Controllers;

use App\ModelHistoriBookingRestaurants;
use Illuminate\Http\Request;

class HistoriBookingRestaurants extends Controller
{
    public function getAll()
    {
        $data = ModelHistoriBookingRestaurants::with('restaurant_order')->get();
        return $data;
    }
}
