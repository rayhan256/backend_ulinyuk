<?php

namespace App\Http\Controllers;

use App\ModelGaleriHotels;
use Illuminate\Http\Request;

class GaleriHotels extends Controller
{
    public function getAll()
    {
        $data = ModelGaleriHotels::with('hotel')->get();
        return $data;
    }
}
