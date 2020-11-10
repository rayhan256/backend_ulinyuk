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


    //CRUD

    public function index()
    {
        $data_hotel = ModelHotels::with('galeri_hotel')->get();
        return view('/hotels/dashboard', ['data_hotel' => $data_hotel]);
        //return response()->json($data_destination);
    }

    public function add_hotel()
    {
        $data_hotel = ModelHotels::all();
        return view('/hotels/add');
    }

    public function add_proses_hotel(Request $request)
    {
        $hotel = new ModelHotels([
            'nama_hotel' => $request->input('nama_hotel'),
            'kategori_hotel' => $request->input('kategori_hotel'),
            'area_hotel' => $request->input('area_hotel'),
            'telepon_hotel' => $request->input('telepon_hotel'),
            'alamat_hotel' => $request->input('alamat_hotel'),
        ]);
        $hotel->save();

        return redirect('/list-detail-hotel')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function list_hotel()
    {
        $data_detail = ModelHotels::all();
        return view('hotels/list', ['data_detail' => $data_detail]);
    }
}
