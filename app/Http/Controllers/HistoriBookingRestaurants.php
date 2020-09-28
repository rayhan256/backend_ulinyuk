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

    //Insert data
    public function insertData(Request $request)
    {
        $histori = new ModelHistoriBookingRestaurants();

        $histori->id_booking_restaurant = $request->id_booking_restaurant;
        $histori->id_restaurant = $request->id_restaurant;
        $histori->id_customer = $request->id_customer;
        $histori->tanggal_booking_restaurant = $request->tanggal_booking_restaurant;

        $histori->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_histori_by_id = ModelHistoriBookingRestaurants::find($id);

        $find_histori_by_id->id_booking_restaurant = $request->id_booking_restaurant;
        $find_histori_by_id->id_restaurant = $request->id_restaurant;
        $find_histori_by_id->id_customer = $request->id_customer;
        $find_histori_by_id->tanggal_booking_restaurant = $request->tanggal_booking_restaurant;

        $find_histori_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_histori_by_id = ModelHistoriBookingRestaurants::find($id);
        $find_histori_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $histori = ModelHistoriBookingRestaurants::find($id);
        return $histori;
    }
}
