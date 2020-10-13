<?php

namespace App\Http\Controllers;

use App\ModelGaleriDestinations;
use Illuminate\Http\Request;

class GaleriDestinations extends Controller
{
    public function getAll()
    {
        $galeri = ModelGaleriDestinations::with('destination')->get();
        return $galeri;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $galeri = new ModelGaleriDestinations();

        $galeri->id_galeri_objek_wisata = $request->id_galeri_objek_wisata;
        $galeri->id_objek_wisata = $request->id_objek_wisata;
        $galeri->gambar_objek_wisata = $request->gambar_objek_wisata;

        $galeri->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_galeri_by_id = ModelGaleriDestinations::find($id);

        $find_galeri_by_id->id_galeri_objek_wisata = $request->id_galeri_objek_wisata;
        $find_galeri_by_id->id_objek_wisata = $request->id_objek_wisata;
        $find_galeri_by_id->gambar_objek_wisata = $request->gambar_objek_wisata;

        $find_galeri_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_galeri_by_id = ModelGaleriDestinations::find($id);
        $find_galeri_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $galeri = ModelGaleriDestinations::find($id);
        return $galeri;
    }

    public function galeri_objek_wisata()
    {
        $galeri = ModelGaleriDestinations::all();
        return view('/destinations/gallery');
    }
}
