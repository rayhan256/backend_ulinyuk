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
        $data_destination = new ModelDestinations();

        $data_destination->id_objek_wisata = $request->id_objek_wisata;
        $data_destination->nama_objek_wisata = $request->nama_objek_wisata;
        $data_destination->area_objek_wisata = $request->area_objek_wisata;
        $data_destination->telepon_objek_wisata = $request->telepon_objek_wisata;
        $data_destination->alamat_objek_wisata = $request->alamat_objek_wisata;
        $data_destination->review_objek_wisata = $request->review_objek_wisata;

        $data_destination->save();
        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        $find_destination_by_id = ModelDestinations::find($id);

        $find_destination_by_id->id_objek_wisata = $request->id_objek_wisata;
        $find_destination_by_id->nama_objek_wisata = $request->nama_objek_wisata;
        $find_destination_by_id->area_objek_wisata = $request->area_objek_wisata;
        $find_destination_by_id->telepon_objek_wisata = $request->telepon_objek_wisata;
        $find_destination_by_id->alamat_objek_wisata = $request->alamat_objek_wisata;
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
        $data_destination = ModelDestinations::find($id);
        return $data_destination;
    }

    public function index()
    {
        $data_destination = ModelDestinations::all();
        return view('/destinations/dashboard', ['data_destination' => $data_destination]);
    }

    public function add_objek_wisata()
    {
        $destination = ModelDestinations::all();
        return view('/destinations/add');
    }
    public function add_proses_objek_wisata(Request $request)
    {
        $destination = new ModelDestinations([
            'id_objek_wisata' => $request->input('id_objek_wisata'),
            'nama_objek_wisata' => $request->input('nama_objek_wisata'),
            'area_objek_wisata' => $request->input('area_objek_wisata'),
            'telepon_objek_wisata' => $request->input('telepon_objek_wisata'),
            'alamat_objek_wisata' => $request->input('alamat_objek_wisata'),
            'review_objek_wisata' => $request->input('review_objek_wisata')
        ]);
        $destination->save();

        return redirect('/tambah-detail-objek-wisata/' . $request->input('id_objek_wisata'));
    }

    public function update_objek_wisata()
    {
        $destination = ModelDestinations::all();
        return view('/destinations/update');
    }

    public function list_objek_wisata()
    {
        $data_detail = ModelDestinations::all();
        return view('/destinations/list', ['data_detail' => $data_detail]);
    }
}
