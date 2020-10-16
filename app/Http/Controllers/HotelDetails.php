<?php

namespace App\Http\Controllers;

use App\ModelHotelDetails;
use Illuminate\Http\Request;

class HotelDetails extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $detail = ModelHotelDetails::with('hotel')->get();
        return $detail;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $detail = new ModelHotelDetails();

        $detail->id_kategori_kamar_hotel = $request->id_kategori_kamar_hotel;
        $detail->id_hotel = $request->id_hotel;
        $detail->kategori_kamar_hotel = $request->kategori_kamar_hotel;
        $detail->harga_kamar_hotel = $request->harga_kamar_hotel;
        $detail->jadwal_checkin_hotel = $request->jadwal_checkin_hotel;
        $detail->jadwal_checkout_hotel = $request->jadwal_checkout_hotel;
        $detail->fasilitas_hotel = $request->fasilitas_hotel;
        $detail->fasilitas_kamar_hotel = $request->fasilitas_kamar_hotel;
        $detail->fasilitas_publik_hotel = $request->fasilitas_publik_hotel;
        $detail->fasilitas_terdekat_hotel = $request->fasilitas_terdekat_hotel;
        $detail->fasilitas_transportasi_hotel = $request->fasilitas_transportasi_hotel;
        $detail->deskripsi_hotel = $request->deskripsi_hotel;

        $detail->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_detail_by_id = ModelHotelDetails::find($id);

        $find_detail_by_id->id_kategori_kamar_hotel = $request->id_kategori_kamar_hotel;
        $find_detail_by_id->id_hotel = $request->id_hotel;
        $find_detail_by_id->kategori_kamar_hotel = $request->kategori_kamar_hotel;
        $find_detail_by_id->harga_kamar_hotel = $request->harga_kamar_hotel;
        $find_detail_by_id->jadwal_checkin_hotel = $request->jadwal_checkin_hotel;
        $find_detail_by_id->jadwal_checkout_hotel = $request->jadwal_checkout_hotel;
        $find_detail_by_id->fasilitas_hotel = $request->fasilitas_hotel;
        $find_detail_by_id->fasilitas_kamar_hotel = $request->fasilitas_kamar_hotel;
        $find_detail_by_id->fasilitas_publik_hotel = $request->fasilitas_publik_hotel;
        $find_detail_by_id->fasilitas_terdekat_hotel = $request->fasilitas_terdekat_hotel;
        $find_detail_by_id->fasilitas_transportasi_hotel = $request->fasilitas_transportasi_hotel;
        $find_detail_by_id->deskripsi_hotel = $request->deskripsi_hotel;

        $find_detail_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_detail_by_id = ModelHotelDetails::find($id);
        $find_detail_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $detail = ModelHotelDetails::find($id);
        return $detail;
    }

    public function detail_hotel()
    {
        $detail = ModelHotelDetails::all();
        return view('/hotels/detail');
    }
}
