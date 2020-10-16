<?php

namespace App\Http\Controllers;

use App\ModelDestinationDetails;
use Illuminate\Http\Request;

class DestinationDetails extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $detail = ModelDestinationDetails::with('destination')->get();
        return $detail;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $detail = new ModelDestinationDetails();

        $detail->id_kategori_objek_wisata = $request->id_kategori_objek_wisata;
        $detail->id_objek_wisata = $request->id_objek_wisata;
        $detail->kategori_objek_wisata = $request->kategori_objek_wisata;
        $detail->jadwal_objek_wisata = $request->jadwal_objek_wisata;
        $detail->wahana_objek_wisata = $request->wahana_objek_wisata;
        $detail->fasilitas_objek_wisata = $request->fasilitas_objek_wisata;
        $detail->deskripsi_objek_wisata = $request->deskripsi_objek_wisata;
        $detail->harga_tiket = $request->harga_tiket;

        $detail->save();

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
        $detail = ModelDestinationDetails::find($id);
        return $detail;
    }

    public function detail_objek_wisata()
    {
        $detail = ModelDestinationDetails::all();
        return view('/destinations/detail');
    }
}
