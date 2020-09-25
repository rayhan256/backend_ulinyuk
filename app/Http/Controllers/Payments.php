<?php

namespace App\Http\Controllers;

use App\ModelPayments;
use Illuminate\Http\Request;

class Payments extends Controller
{
    public function getAll()
    {
        $data = ModelPayments::with('customer')->get();
        return $data;
    }
}
