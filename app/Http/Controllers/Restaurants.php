<?php

namespace App\Http\Controllers;

use App\ModelCustomers;
use App\ModelRestaurants;
use Illuminate\Http\Request;

class Restaurants extends Controller
{
    //Ambil data
    public function getAll()
    {
        $data_restaurant = ModelRestaurants::all();
        return $data_restaurant;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $data_restaurant = new ModelRestaurants();

        $data_restaurant->nama_restaurant = $request->nama_restaurant;
        $data_restaurant->area_restaurant = $request->area_restaurant;
        $data_restaurant->telepon_restaurant = $request->telepon_restaurant;
        $data_restaurant->alamat_restaurant = $request->alamat_restaurant;
        $data_restaurant->review_restaurant = $request->review_restaurant;

        $data_restaurant->save();
        return "Data Berhasil Diinput!";
    }

    public function updateData(Request $request, $id)
    {
        $find_restaurant_by_id = ModelRestaurants::find($id);

        $find_restaurant_by_id->nama_restaurant = $request->nama_restaurant;
        $find_restaurant_by_id->area_restaurant = $request->area_restaurant;
        $find_restaurant_by_id->telepon_restaurant = $request->telepon_restaurant;
        $find_restaurant_by_id->alamat_restaurant = $request->alamat_restaurant;
        $find_restaurant_by_id->review_restaurant = $request->review_restaurant;

        $find_restaurant_by_id->save();
        return "Data Berhasil Diedit!";
    }

    public function deleteData($id)
    {
        $find_restaurant_by_id = ModelRestaurants::find($id);
        $find_restaurant_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    public function getDataId($id)
    {
        $data_restaurant = ModelCustomers::find($id);
        return $data_restaurant;
    }


    //CRUD

    public function index()
    {
        $data_restaurant = ModelRestaurants::with('galeri_restaurant')->get();
        return view('/restaurants/dashboard', ['data_restaurant' => $data_restaurant]);
    }

    public function add_restaurant()
    {
        $data_restaurant = ModelRestaurants::all();
        return view('/restaurants/add');
    }

    public function add_proses_restaurant(Request $request)
    {
        $restaurant = new ModelRestaurants([
            'nama_restaurant' => $request->input('nama_restaurant'),
            'area_restaurant' => $request->input('area_restaurant'),
            'telepon_restaurant' => $request->input('telepon_restaurant'),
            'alamat_restaurant' => $request->input('alamat_restaurant'),
        ]);
        $restaurant->save();

        return redirect('/list-detail-restaurant')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function list_restaurant()
    {
        $data_detail = ModelRestaurants::all();
        return view('restaurants/list', ['data_detail' => $data_detail]);
    }
}
