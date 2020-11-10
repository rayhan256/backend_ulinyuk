<?php

namespace App\Http\Controllers;

use App\ModelGaleriRestaurants;
use App\ModelRestaurants;
use App\ModelRestaurantDetails;
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


    //CRUD

    public function galeri_restaurant($id)
    {
        $galeri = ModelRestaurants::where('id', $id)->first();
        return view('/restaurants/gallery', ['galeri' => $galeri]);
        //return response()->json($galeri, 200);
    }

    public function add_galeri_restaurant(Request $request)
    {
        $request->validate([
            'foto_restaurant' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $namaImage = time() . '.' . $request->foto_restaurant->extension();
        $request->foto_restaurant->move(public_path('galeri'), $namaImage);

        $galeri = new ModelGaleriRestaurants([
            'id_restaurant' => $request->input('id_restaurant'),
            'foto_restaurant' => $namaImage,
        ]);
        $galeri->save();

        return redirect('/detail-restaurant/' . $request->input('id_restaurant'))->with('pesan', 'Foto Berhasil Ditambahkan!');
    }
}
