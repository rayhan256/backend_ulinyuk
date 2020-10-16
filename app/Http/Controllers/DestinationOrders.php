<?php

namespace App\Http\Controllers;

use App\ModelDestinationOrders;
use App\ModelDestinations;
use Illuminate\Http\Request;

class DestinationOrders extends Controller
{
    //Ambil data
    public function getAll()
    {
        $order = ModelDestinationOrders::with('customer', 'destination_detail')->get();
        return $order;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $order = new ModelDestinationOrders();

        $order->id_booking_tiket = $request->id_booking_tiket;
        $order->id_customer = $request->id_customer;
        $order->id_kategori_objek_wisata = $request->id_kategori_objek_wisata;
        $order->id_objek_wisata = $request->id_objek_wisata;
        $order->tanggal_booking_tiket = $request->tanggal_booking_tiket;
        $order->harga_tiket = $request->harga_tiket;
        $order->jumlah_booking_tiket = $request->jumlah_booking_tiket;
        $order->total_bayar = $request->total_bayar;

        $order->save();
        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        $find_order_by_id = ModelDestinationOrders::find($id);

        $find_order_by_id->id_booking_tiket = $request->id_booking_tiket;
        $find_order_by_id->id_customer = $request->id_customer;
        $find_order_by_id->id_kategori_objek_wisata = $request->id_kategori_objek_wisata;
        $find_order_by_id->id_objek_wisata = $request->id_objek_wisata;
        $find_order_by_id->tanggal_booking_tiket = $request->tanggal_booking_tiket;
        $find_order_by_id->harga_tiket = $request->harga_tiket;
        $find_order_by_id->jumlah_booking_tiket = $request->jumlah_booking_tiket;
        $find_order_by_id->total_bayar = $request->total_bayar;

        $find_order_by_id->save();
        return "Data Berhasil Diedit!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_order_by_id = ModelDestinationOrders::find($id);
        $find_order_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //get data by id
    public function getDataId($id)
    {
        $order = ModelDestinationOrders::find($id);
        return $order;
    }

    public function order_objek_wisata()
    {
        $order = ModelDestinationOrders::all();
        return view('/destinations/order');
    }
}
