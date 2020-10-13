<?php

namespace App\Http\Controllers;

use App\ModelGaleriHotels;
use Illuminate\Http\Request;

class GaleriHotels extends Controller
{
    public function getAll()
    {
        $galeri = ModelGaleriHotels::with('hotel')->get();
        return $galeri;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $galeri = new ModelGaleriHotels();

        $galeri->id_galeri_hotel = $request->id_galeri_hotel;
        $galeri->id_hotel = $request->id_hotel;
        $galeri->gambar_hotel = $request->gambar_hotel;

        $galeri->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_galeri_by_id = ModelGaleriHotels::find($id);

        $find_galeri_by_id->id_galeri_hotel = $request->id_galeri_hotel;
        $find_galeri_by_id->id_hotel = $request->id_hotel;
        $find_galeri_by_id->gambar_hotel = $request->gambar_hotel;

        $find_galeri_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_galeri_by_id = ModelGaleriHotels::find($id);
        $find_galeri_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $galeri = ModelGaleriHotels::find($id);
        return $galeri;
    }

    public function galeri_hotel()
    {
        $galeri = ModelGaleriHotels::all();
        return view('/hotels/gallery');
    }
}
