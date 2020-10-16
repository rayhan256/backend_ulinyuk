<?php

namespace App\Http\Controllers;

use App\ModelGaleriRestaurants;
use Illuminate\Http\Request;

class GaleriRestaurants extends Controller
{
    public function getAll()
    {
        $data = ModelGaleriRestaurants::with('restaurant')->get();
        return $data;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $galeri = new ModelGaleriRestaurants();

        $galeri->id_galeri_restaurant = $request->id_galeri_restaurant;
        $galeri->id_restaurant = $request->id_restaurant;
        $galeri->foto_restaurant = $request->foto_restaurant;

        $galeri->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_galeri_by_id = ModelGaleriRestaurants::find($id);

        $find_galeri_by_id->id_galeri_restaurant = $request->id_galeri_restaurant;
        $find_galeri_by_id->id_restaurant = $request->id_restaurant;
        $find_galeri_by_id->foto_restaurant = $request->foto_restaurant;

        $find_galeri_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_galeri_by_id = ModelGaleriRestaurants::find($id);
        $find_galeri_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $galeri = ModelGaleriRestaurants::find($id);
        return $galeri;
    }

    public function galeri_restaurant()
    {
        $galeri = ModelGaleriRestaurants::all();
        return view('/restaurants/gallery');
    }
}
