<?php

namespace App\Http\Controllers;

use App\ModelHotelOrders;
use Illuminate\Http\Request;

class HotelOrders extends Controller
{
    //
    public function getAll()
    {
        $data = ModelHotelOrders::with('hotel', 'customer')->get();
        return $data;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $order = new ModelHotelOrders();

        $order->id_booking_kamar = $request->id_booking_kamar;
        $order->id_customer = $request->id_customer;
        $order->id_hotel = $request->id_hotel;
        $order->id_kategori_kamar_hotel = $request->id_kategori_kamar_hotel;
        $order->harga_kamar_hotel = $request->harga_kamar_hotel;
        $order->jumlah_booking_kamar = $request->jumlah_booking_kamar;
        $order->tanggal_checkin = $request->tanggal_checkin;
        $order->tanggal_checkout = $request->tanggal_checkout;
        $order->total_bayar = $request->total_bayar;

        $order->save();
        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        $find_order_by_id = ModelHotelOrders::find($id);

        $find_order_by_id->id_booking_kamar = $request->id_booking_kamar;
        $find_order_by_id->id_customer = $request->id_customer;
        $find_order_by_id->id_hotel = $request->id_hotel;
        $find_order_by_id->id_kategori_kamar_hotel = $request->id_kategori_kamar_hotel;
        $find_order_by_id->harga_kamar_hotel = $request->harga_kamar_hotel;
        $find_order_by_id->jumlah_booking_kamar = $request->jumlah_booking_kamar;
        $find_order_by_id->tanggal_checkin = $request->tanggal_checkin;
        $find_order_by_id->tanggal_checkout = $request->tanggal_checkout;
        $find_order_by_id->total_bayar = $request->total_bayar;

        $find_order_by_id->save();
        return "Data Berhasil Diedit!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_order_by_id = ModelHotelOrders::find($id);
        $find_order_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //get data by id
    public function getDataId($id)
    {
        $order = ModelHotelOrders::find($id);
        return $order;
    }
}
