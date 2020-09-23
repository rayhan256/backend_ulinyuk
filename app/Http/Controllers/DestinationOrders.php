<?php

namespace App\Http\Controllers;

use App\ModelDestinationOrders;
use App\ModelDestinations;
use Illuminate\Http\Request;

class DestinationOrders extends Controller
{
    //
    public function getAll()
    {
        $data = ModelDestinationOrders::with('customer', 'destination', 'destination_detail')->get();
        return $data;
    }
}
