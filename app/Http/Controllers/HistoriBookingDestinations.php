<?php

namespace App\Http\Controllers;

use App\ModelHistoriBookingDestinations;
use Illuminate\Http\Request;

class HistoriBookingDestinations extends Controller
{
    public function getAll()
    {
        $data = ModelHistoriBookingDestinations::with('destination_order')->get();
        return $data;
    }
}
