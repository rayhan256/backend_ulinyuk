<?php

namespace App\Http\Controllers;

use App\ModelRestaurantDetails;
use App\ModelRestaurantOrders;
use App\ModelRestaurants;
use Illuminate\Http\Request;

class RestaurantOrders extends Controller
{
    //
    public function getAll()
    {
        $data = ModelRestaurantOrders::with('user', 'restaurant_detail')->get();
        return $data;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $order = new ModelRestaurantOrders();

        $order->id_user = $request->id_user;
        $order->id_kategori_restaurant = $request->id_kategori_restaurant;
        $order->id_restaurant = $request->id_restaurant;
        $order->jumlah_orang = $request->jumlah_orang;
        $order->tanggal_booking = $request->tanggal_booking;

        $order->save();
        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        $find_order_by_id = ModelRestaurantOrders::find($id);

        $find_order_by_id->id_user = $request->id_user;
        $find_order_by_id->id_kategori_restaurant = $request->id_kategori_restaurant;
        $find_order_by_id->id_restaurant = $request->id_restaurant;
        $find_order_by_id->jumlah_orang = $request->jumlah_orang;
        $find_order_by_id->tanggal_booking = $request->tanggal_booking;

        $find_order_by_id->save();
        return "Data Berhasil Diedit!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_order_by_id = ModelRestaurantOrders::find($id);
        $find_order_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //get data by id
    public function getDataId($id)
    {
        $order = ModelRestaurantOrders::find($id);
        return $order;
    }

    public function order_restaurant()
    {
        $order = ModelRestaurantOrders::all();
        return view('/restaurants/order');
    }
}
