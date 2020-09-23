<?php

namespace App\Http\Controllers;

use App\ModelHistoriBookingHotels;
use Illuminate\Http\Request;

class HistoriBookingHotels extends Controller
{
    public function getAll()
    {
        $data = ModelHistoriBookingHotels::with('hotel_order')->get();
        return $data;
    }
}
