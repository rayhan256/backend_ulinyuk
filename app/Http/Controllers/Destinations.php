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
        $destination = ModelDestinations::with(['galeri_destination', 'destination_detail'])->get();
        return $destination;
        //return response()->json($destination, 200);
    }

    //Insert data
    public function insertData(Request $request)
    {
        $data_destination = new ModelDestinations();

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




    //CRUD

    public function index()
    {
        $data_destination = ModelDestinations::with('galeri_destination')->get();
        return view('/destinations/dashboard', ['data_destination' => $data_destination]);
        //return response()->json($data_destination);
    }

    public function add_objek_wisata()
    {
        $destination = ModelDestinations::all();
        return view('/destinations/add');
    }
    public function add_proses_objek_wisata(Request $request)
    {
        $destination = new ModelDestinations([
            'nama_objek_wisata' => $request->input('nama_objek_wisata'),
            'area_objek_wisata' => $request->input('area_objek_wisata'),
            'telepon_objek_wisata' => $request->input('telepon_objek_wisata'),
            'alamat_objek_wisata' => $request->input('alamat_objek_wisata'),
        ]);
        $destination->save();

        return redirect('/list-detail-objek-wisata')->with('sukses', 'Data Berhasil Ditambahkan!');
    }

    public function list_objek_wisata()
    {
        $data_detail = ModelDestinations::all();
        return view('/destinations/list', ['data_detail' => $data_detail]);
    }

    // public function delete_objek_wisata($id)
    // {
    //     $data_detail = ModelDestinations::find($id);
    //     $data_detail->delete();

    //     return redirect('/objek_wisata' . '/' . $id)->with('sukses', 'Data Berhasil Dihapus!');
    // }
}
