<?php

namespace App\Http\Controllers;

use App\ModelHotels;
use Illuminate\Http\Request;

class Hotels extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $hotel = ModelHotels::all();
        return $hotel;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $hotel = new ModelHotels();

        $hotel->id_hotel = $request->id_hotel;
        $hotel->nama_hotel = $request->nama_hotel;
        $hotel->kategori_hotel = $request->kategori_hotel;
        $hotel->id_kategori_kamar_hotel = $request->id_kategori_kamar_hotel;
        $hotel->area_hotel = $request->area_hotel;
        $hotel->telepon_hotel = $request->telepon_hotel;
        $hotel->alamat_hotel = $request->alamat_hotel;
        $hotel->review_hotel = $request->review_hotel;

        $hotel->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_hotel_by_id = ModelHotels::find($id);

        $find_hotel_by_id->id_hotel = $request->id_hotel;
        $find_hotel_by_id->nama_hotel = $request->nama_hotel;
        $find_hotel_by_id->kategori_hotel = $request->kategori_hotel;
        $find_hotel_by_id->id_kategori_kamar_hotel = $request->id_kategori_kamar_hotel;
        $find_hotel_by_id->area_hotel = $request->area_hotel;
        $find_hotel_by_id->telepon_hotel = $request->telepon_hotel;
        $find_hotel_by_id->alamat_hotel = $request->alamat_hotel;
        $find_hotel_by_id->review_hotel = $request->review_hotel;

        $find_hotel_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_hotel_by_id = ModelHotels::find($id);
        $find_hotel_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $hotel = ModelHotels::find($id);
        return $hotel;
    }
}
