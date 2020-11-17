<?php

namespace App\Http\Controllers;

use App\ModelKomentarNews;
use Illuminate\Http\Request;

class KomentarNews extends Controller
{
    public function getAll()
    {
        $data = ModelKomentarNews::with('news')->get();
        return $data;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $komen = new ModelKomentarNews();

        $komen->id_berita = $request->id_berita;
        $komen->komentar_berita = $request->komentar_berita;

        $komen->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_komen_by_id = ModelKomentarNews::find($id);

        $find_komen_by_id->id_berita = $request->id_berita;
        $find_komen_by_id->komentar_berita = $request->komentar_berita;

        $find_komen_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_komen_by_id = ModelKomentarNews::find($id);
        $find_komen_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $komen = ModelKomentarNews::find($id);
        return $komen;
    }


    //CRUD

    public function index()
    {
        $data_berita = ModelKomentarNews::with('komentar_berita')->get();
        return view('/news/dashboard', ['data_berita' => $data_berita]);
    }

    public function add_berita()
    {
        $data_berita = ModelKomentarNews::all();
        return view('/news/add');
    }

    public function add_proses_berita(Request $request)
    {
        $berita = new ModelKomentarNews([
            'komentar_berita' => $request->input('komentar_berita'),
        ]);
        $berita->save();

        return redirect('/list-detail-news')->with('pesan', 'Data Berhasil Ditambahkan!');
    }
}
