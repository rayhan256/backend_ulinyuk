<?php

namespace App\Http\Controllers;

use App\ModelHistoriBookingDestinations;
use App\ModelHistoriBookingHotels;
use Illuminate\Http\Request;

class HistoriBookingHotels extends Controller
{
    public function getAll()
    {
        $data = ModelHistoriBookingHotels::with('hotel_order')->get();
        return $data;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $histori = new ModelHistoriBookingHotels();

        $histori->id_booking_kamar = $request->id_booking_kamar;
        $histori->id_user = $request->id_user;
        $histori->id_kategori_kamar_hotel = $request->id_kategori_kamar_hotel;
        $histori->id_hotel = $request->id_hotel;
        $histori->jumlah_booking_kamar = $request->jumlah_booking_kamar;
        $histori->tanggal_checkin = $request->tanggal_checkin;
        $histori->tanggal_checkout = $request->tanggal_checkout;
        $histori->lama_inap = $request->lama_inap;
        $histori->total_bayar = $request->total_bayar;

        $histori->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_histori_by_id = ModelHistoriBookingHotels::find($id);

        $find_histori_by_id->id_booking_kamar = $request->id_booking_kamar;
        $find_histori_by_id->id_user = $request->id_user;
        $find_histori_by_id->id_kategori_kamar_hotel = $request->id_kategori_kamar_hotel;
        $find_histori_by_id->id_hotel = $request->id_hotel;
        $find_histori_by_id->jumlah_booking_kamar = $request->jumlah_booking_kamar;
        $find_histori_by_id->tanggal_checkin = $request->tanggal_checkin;
        $find_histori_by_id->tanggal_checkout = $request->tanggal_checkout;
        $find_histori_by_id->lama_inap = $request->lama_inap;
        $find_histori_by_id->total_bayar = $request->total_bayar;

        $find_histori_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_histori_by_id = ModelHistoriBookingHotels::find($id);
        $find_histori_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $histori = ModelHistoriBookingHotels::find($id);
        return $histori;
    }
}
