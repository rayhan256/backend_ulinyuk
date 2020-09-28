<?php

namespace App\Http\Controllers;

use App\ModelCustomers;
use App\ModelRestaurants;
use Illuminate\Http\Request;

class Restaurants extends Controller
{
    //Ambil data
    public function getAll()
    {
        $restaurant = ModelRestaurants::all();
        return $restaurant;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $restaurant = new ModelRestaurants();

        $restaurant->id_restaurant = $request->id_restaurant;
        $restaurant->id_kategori_restaurant = $request->id_kategori_restaurant;
        $restaurant->nama_restaurant = $request->nama_restaurant;
        $restaurant->area_restaurant = $request->area_restaurant;
        $restaurant->telepon_restaurant = $request->telepon_restaurant;
        $restaurant->alamat_restaurant = $request->alamat_restaurant;
        $restaurant->jadwal_restaurant = $request->jadwal_restaurant;
        $restaurant->review_restaurant = $request->review_restaurant;

        $restaurant->save();
        return "Data Berhasil Diinput!";
    }

    public function updateData(Request $request, $id)
    {
        $find_restaurant_by_id = ModelRestaurants::find($id);

        $find_restaurant_by_id->id_restaurant = $request->id_restaurant;
        $find_restaurant_by_id->id_kategori_restaurant = $request->id_kategori_restaurant;
        $find_restaurant_by_id->nama_restaurant = $request->nama_restaurant;
        $find_restaurant_by_id->area_restaurant = $request->area_restaurant;
        $find_restaurant_by_id->telepon_restaurant = $request->telepon_restaurant;
        $find_restaurant_by_id->alamat_restaurant = $request->alamat_restaurant;
        $find_restaurant_by_id->jadwal_restaurant = $request->jadwal_restaurant;
        $find_restaurant_by_id->review_restaurant = $request->review_restaurant;

        $find_restaurant_by_id->save();
        return "Data Berhasil Diedit!";
    }

    public function deleteData($id)
    {
        $find_restaurant_by_id = ModelRestaurants::find($id);
        $find_restaurant_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    public function getDataId($id)
    {
        $restaurant = ModelCustomers::find($id);
        return $restaurant;
    }
}
