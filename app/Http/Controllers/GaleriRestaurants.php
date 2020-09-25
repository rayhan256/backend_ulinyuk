<?php

namespace App\Http\Controllers;

use App\ModelGaleriRestaurants;
use Illuminate\Http\Request;

class GaleriRestaurants extends Controller
{
    public function getAll()
    {
        $data = ModelGaleriRestaurants::with('restaurant')->get();
        return $data;
    }
}
