<?php

namespace App\Http\Controllers;

use App\ModelGaleriDestinations;
use Illuminate\Http\Request;

class GaleriDestinations extends Controller
{
    public function getAll()
    {
        $data = ModelGaleriDestinations::with('destination')->get();
        return $data;
    }
}
