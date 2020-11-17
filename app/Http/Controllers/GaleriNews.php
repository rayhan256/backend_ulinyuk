<?php

namespace App\Http\Controllers;

use App\ModelGaleriNews;
use App\ModelNews;
use Illuminate\Http\Request;

class GaleriNews extends Controller
{
    public function getAll()
    {
        $data = ModelGaleriNews::with('news')->get();
        return $data;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $galeri = new ModelGaleriNews();

        $galeri->id_berita = $request->id_berita;
        $galeri->foto_berita = $request->foto_berita;

        $galeri->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_galeri_by_id = ModelGaleriNews::find($id);

        $find_galeri_by_id->id_berita = $request->id_berita;
        $find_galeri_by_id->foto_berita = $request->foto_berita;

        $find_galeri_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_galeri_by_id = ModelGaleriNews::find($id);
        $find_galeri_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $galeri = ModelGaleriNews::find($id);
        return $galeri;
    }


    //CRUD

    public function galeri_berita($id)
    {
        $galeri = ModelNews::where('id', $id)->first();
        return view('/news/gallery', ['galeri' => $galeri]);
        //return response()->json($galeri, 200);
    }

    public function add_galeri_berita(Request $request)
    {
        $request->validate([
            'foto_berita' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $namaImage = time() . '.' . $request->foto_berita->extension();
        $request->foto_berita->move(public_path('galeri'), $namaImage);

        $galeri = new ModelGaleriNews([
            'id_berita' => $request->input('id_berita'),
            'foto_berita' => $namaImage,
        ]);
        $galeri->save();

        return redirect('/detail-berita/' . $request->input('id_berita'))->with('pesan', 'Foto Berhasil Ditambahkan!');
    }
}
