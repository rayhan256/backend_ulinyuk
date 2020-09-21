<?php

namespace App\Http\Controllers;

use App\ModelDestinationDetails;
use Illuminate\Http\Request;

class DestinationDetails extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $detail = ModelDestinationDetails::all();
        return $detail;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $detail = new ModelDestinationDetails();

        $detail->id_kategori_objek_wisata = $request->id_kategori_objek_wisata;
        $detail->kategori_objek_wisata = $request->kategori_objek_wisata;
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
        $find_detail_by_id->kategori_objek_wisata = $request->kategori_objek_wisata;
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
}
