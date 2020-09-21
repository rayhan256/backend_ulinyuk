<?php

namespace App\Http\Controllers;

use App\ModelDestinations;
use App\ModelRestaurants;
use Illuminate\Http\Request;

class Destinations extends Controller
{
    //Ambil data
    public function getAll()
    {
        $destination = ModelDestinations::all();
        return $destination;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $destination = new ModelDestinations();

        $destination->id_objek_wisata = $request->id_objek_wisata;
        $destination->nama_objek_wisata = $request->nama_objek_wisata;
        $destination->area_objek_wisata = $request->area_objek_wisata;
        $destination->telepon_objek_wisata = $request->telepon_objek_wisata;
        $destination->alamat_objek_wisata = $request->alamat_objek_wisata;
        $destination->jadwal_objek_wisata = $request->jadwal_objek_wisata;
        $destination->review_objek_wisata = $request->review_objek_wisata;

        $destination->save();
        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        $find_destination_by_id = ModelRestaurants::find($id);

        $find_destination_by_id->id_objek_wisata = $request->id_objek_wisata;
        $find_destination_by_id->nama_objek_wisata = $request->nama_objek_wisata;
        $find_destination_by_id->area_objek_wisata = $request->area_objek_wisata;
        $find_destination_by_id->telepon_objek_wisata = $request->telepon_objek_wisata;
        $find_destination_by_id->alamat_objek_wisata = $request->alamat_objek_wisata;
        $find_destination_by_id->jadwal_objek_wisata = $request->jadwal_objek_wisata;
        $find_destination_by_id->review_objek_wisata = $request->review_objek_wisata;

        $find_destination_by_id->save();
        return "Data Berhasil Diedit!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_destination_by_id = ModelDestinations::find($id);
        $find_destination_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //get data by id
    public function getDataId($id)
    {
        $destination = ModelDestinations::find($id);
        return $destination;
    }
}
