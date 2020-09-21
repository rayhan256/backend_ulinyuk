<?php

namespace App\Http\Controllers;

use App\ModelRestaurantDetails;
use Illuminate\Http\Request;

class RestaurantDetails extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $detail = ModelRestaurantDetails::all();
        return $detail;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $detail = new ModelRestaurantDetails();

        $detail->id_kategori_restaurant = $request->id_kategori_restaurant;
        $detail->kategori_restaurant = $request->kategori_restaurant;

        $detail->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_detail_by_id = ModelRestaurantDetails::find($id);

        $find_detail_by_id->id_kategori_restaurant = $request->id_kategori_restaurant;
        $find_detail_by_id->kategori_restaurant = $request->kategori_restaurant;

        $find_detail_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_detail_by_id = ModelRestaurantDetails::find($id);
        $find_detail_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $detail = ModelRestaurantDetails::find($id);
        return $detail;
    }
}
