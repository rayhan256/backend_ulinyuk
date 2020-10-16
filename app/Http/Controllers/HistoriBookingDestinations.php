<?php

namespace App\Http\Controllers;

use App\ModelHistoriBookingDestinations;
use Illuminate\Http\Request;

class HistoriBookingDestinations extends Controller
{
    public function getAll()
    {
        $histori = ModelHistoriBookingDestinations::with('destination_order')->get();
        return $histori;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $histori = new ModelHistoriBookingDestinations();

        $histori->id_booking_tiket = $request->id_booking_tiket;
        $histori->id_customer = $request->id_customer;
        $histori->id_kategori_objek_wisata = $request->id_kategori_objek_wisata;
        $histori->id_objek_wisata = $request->id_objek_wisata;
        $histori->tanggal_booking_tiket = $request->tanggal_booking_tiket;
        $histori->jumlah_booking_tiket = $request->jumlah_booking_tiket;

        $histori->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_histori_by_id = ModelHistoriBookingDestinations::find($id);

        $find_histori_by_id->id_booking_tiket = $request->id_booking_tiket;
        $find_histori_by_id->id_customer = $request->id_customer;
        $find_histori_by_id->id_kategori_objek_wisata = $request->id_kategori_objek_wisata;
        $find_histori_by_id->id_objek_wisata = $request->id_objek_wisata;
        $find_histori_by_id->tanggal_booking_tiket = $request->tanggal_booking_tiket;
        $find_histori_by_id->jumlah_booking_tiket = $request->jumlah_booking_tiket;

        $find_histori_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_histori_by_id = ModelHistoriBookingDestinations::find($id);
        $find_histori_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $histori = ModelHistoriBookingDestinations::find($id);
        return $histori;
    }
}
