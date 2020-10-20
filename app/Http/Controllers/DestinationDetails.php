<?php

namespace App\Http\Controllers;

use App\ModelDestinationDetails;
use Illuminate\Http\Request;

class DestinationDetails extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $data_detail = ModelDestinationDetails::with('destination')->get();
        return $data_detail;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $data_detail = new ModelDestinationDetails();

        $data_detail->id_kategori_objek_wisata = $request->id_kategori_objek_wisata;
        $data_detail->id_objek_wisata = $request->id_objek_wisata;
        $data_detail->kategori_objek_wisata = $request->kategori_objek_wisata;
        $data_detail->jadwal_objek_wisata = $request->jadwal_objek_wisata;
        $data_detail->wahana_objek_wisata = $request->wahana_objek_wisata;
        $data_detail->fasilitas_objek_wisata = $request->fasilitas_objek_wisata;
        $data_detail->deskripsi_objek_wisata = $request->deskripsi_objek_wisata;
        $data_detail->harga_tiket = $request->harga_tiket;

        $data_detail->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_detail_by_id = ModelDestinationDetails::find($id);

        $find_detail_by_id->id_kategori_objek_wisata = $request->id_kategori_objek_wisata;
        $find_detail_by_id->id_objek_wisata = $request->id_objek_wisata;
        $find_detail_by_id->kategori_objek_wisata = $request->kategori_objek_wisata;
        $find_detail_by_id->jadwal_objek_wisata = $request->jadwal_objek_wisata;
        $find_detail_by_id->wahana_objek_wisata = $request->wahana_objek_wisata;
        $find_detail_by_id->fasilitas_objek_wisata = $request->fasilitas_objek_wisata;
        $find_detail_by_id->deskripsi_objek_wisata = $request->deskripsi_objek_wisata;
        $find_detail_by_id->harga_tiket = $request->harga_tiket;

        $find_detail_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_detail_by_id = ModelDestinationDetails::find($id);
        $find_detail_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $data_detail = ModelDestinationDetails::find($id);
        return $data_detail;
    }

    public function detail_objek_wisata()
    {
        $data_detail = ModelDestinationDetails::all();
        return view('/destinations/detail', ['data_detail' => $data_detail]);
    }
}
