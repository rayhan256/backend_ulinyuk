<?php

namespace App\Http\Controllers;

use App\ModelHotels;
use Illuminate\Http\Request;

class Hotels extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $data_hotel = ModelHotels::all();
        return $data_hotel;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $data_hotel = new ModelHotels();

        $data_hotel->id_hotel = $request->id_hotel;
        $data_hotel->nama_hotel = $request->nama_hotel;
        $data_hotel->kategori_hotel = $request->kategori_hotel;
        $data_hotel->area_hotel = $request->area_hotel;
        $data_hotel->telepon_hotel = $request->telepon_hotel;
        $data_hotel->alamat_hotel = $request->alamat_hotel;
        $data_hotel->review_hotel = $request->review_hotel;

        $data_hotel->save();

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
        $data_hotel = ModelHotels::find($id);
        return $data_hotel;
    }

    public function index()
    {
        $data_hotel = ModelHotels::all();
        return view('/hotels/dashboard', ['data_hotel' => $data_hotel]);
    }



    public function add_hotel()
    {
        $data_hotel = ModelHotels::all();
        return view('/hotels/add');
    }

    public function add_detail_hotel()
    {
        $data_hotel = ModelHotels::all();
        return view('/hotels/add_detail');
    }

    public function update_hotel()
    {
        $hotel = ModelHotels::all();
        return view('/hotels/update');
    }
}
