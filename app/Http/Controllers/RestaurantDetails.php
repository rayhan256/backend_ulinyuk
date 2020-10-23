<?php

namespace App\Http\Controllers;

use App\ModelRestaurantDetails;
use Illuminate\Http\Request;

class RestaurantDetails extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $data_detail = ModelRestaurantDetails::with('restaurant')->get();
        return $data_detail;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $data_detail = new ModelRestaurantDetails();

        $data_detail->id_kategori_restaurant = $request->id_kategori_restaurant;
        $data_detail->id_restaurant = $request->id_restaurant;
        $data_detail->kategori_restaurant = $request->kategori_restaurant;
        $data_detail->jadwal_restaurant = $request->jadwal_restaurant;
        $data_detail->fasilitas_restaurant = $request->fasilitas_restaurant;
        $data_detail->deskripsi_restaurant = $request->deskripsi_restaurant;

        $data_detail->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_detail_by_id = ModelRestaurantDetails::find($id);

        $find_detail_by_id->id_kategori_restaurant = $request->id_kategori_restaurant;
        $find_detail_by_id->id_restaurant = $request->id_restaurant;
        $find_detail_by_id->kategori_restaurant = $request->kategori_restaurant;
        $find_detail_by_id->jadwal_restaurant = $request->jadwal_restaurant;
        $find_detail_by_id->fasilitas_restaurant = $request->fasilitas_restaurant;
        $find_detail_by_id->deskripsi_restaurant = $request->deskripsi_restaurant;

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
        $data_detail = ModelRestaurantDetails::find($id);
        return $data_detail;
    }

    public function detail_restaurant()
    {
        $data_detail = ModelRestaurantDetails::all();
        return view('/restaurants/detail', ['data_detail' => $data_detail]);
    }

    public function list_restaurant()
    {
        $data_detail = ModelRestaurantDetails::all();
        return view('/restaurants/list', ['data_detail' => $data_detail]);
    }
}
