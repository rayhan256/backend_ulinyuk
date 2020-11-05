<?php

namespace App\Http\Controllers;

use App\ModelGaleriDestinations;
use App\ModelDestinations;
use App\ModelDestinationDetails;
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

        $galeri->id_objek_wisata = $request->id_objek_wisata;
        $galeri->foto_objek_wisata = $request->foto_objek_wisata;

        $galeri->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_galeri_by_id = ModelGaleriDestinations::find($id);

        $find_galeri_by_id->id_objek_wisata = $request->id_objek_wisata;
        $find_galeri_by_id->foto_objek_wisata = $request->foto_objek_wisata;

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

    public function galeri_objek_wisata($id)
    {
        $galeri = ModelDestinations::where('id', $id)->first();
        return view('/destinations/gallery', ['galeri' => $galeri]);
        //return response()->json($galeri, 200);
    }

    public function add_galeri_objek_wisata(Request $request)
    {
        $request->validate([
            'foto_objek_wisata' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $namaImage = time() . '.' . $request->foto_objek_wisata->extension();
        $request->foto_objek_wisata->move(public_path('galeri'), $namaImage);



        $galeri = new ModelGaleriDestinations([
            'id_objek_wisata' => $request->input('id_objek_wisata'),
            'foto_objek_wisata' => url('galeri') . '/' . $namaImage,
        ]);
        $galeri->save();

        return redirect('/detail-objek-wisata/' . $request->input('id_objek_wisata'))->with('sukses', 'Foto Berhasil Ditambahkan!');
    }
}
