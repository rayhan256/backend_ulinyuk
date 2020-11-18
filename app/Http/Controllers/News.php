<?php

namespace App\Http\Controllers;

use App\ModelNews;
use App\ModelGaleriNews;
use App\ModelKomentarNews;
use Illuminate\Http\Request;

class News extends Controller
{
    public function getAll()
    {
        $berita = ModelNews::with(['galeri_berita'])->get();

        foreach ($berita as $b) {
            foreach ($b->galeri_berita as $galeri) {
                $data_galeri[] = [
                    'id_galeri' => $galeri->id,
                    'foto' => url('galeri') . '/' . $galeri->foto_berita,
                ];
            }
            foreach ($b->komentar_berita as $komen) {
                $data_komentar = [
                    'komentar_berita' => $komen->komentar_berita,
                ];
            }
            $data_berita[] = [
                'berita_id' => $b->id,
                'judul_berita' => $b->judul_berita,
                'tanggal_berita' => $b->tanggal_berita,
                'penerbit_berita' => $b->penerbit_berita,
                'deskripsi_berita' => $b->deskripsi_berita,
                'galeri' => $data_galeri,
            ];
        }
        $response = ['data' => $data_berita];
        return response()->json($response, 200);

        //return $data_hotel;
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $data_komentar = ModelKomentarNews::find($id);
        $data_berita = ModelNews::find($id);
        $data_gambar = ModelGaleriNews::where('id_berita', $id)->get();

        foreach ($data_gambar as $g) {
            $galeri[] = [
                'id' => $g->id,
                'foto' => url('galeri') . '/' . $g->foto_berita,
            ];
        }
        $detail_berita[] = [
            'id' => $data_berita->id,
            'judul_berita' => $data_berita->judul_berita,
            'tanggal_berita' => $data_berita->tanggal_berita,
            'penerbit_berita' => $data_berita->penerbit_berita,
            'deskripsi_berita' => $data_berita->deskripsi_berita,
            'komentar' => $data_komentar,
            'galeri' => $galeri,
        ];

        $response = ['data' => $detail_berita];
        return response()->json($response, 200);
    }


    //CRUD

    public function index()
    {
        $data_berita = ModelNews::with('galeri_berita')->get();
        return view('/news/dashboard', ['data_berita' => $data_berita]);
        //return response()->json($data_berita);
    }

    public function add_berita()
    {
        $data_berita = ModelNews::all();
        return view('/news/add');
    }

    public function add_proses_berita(Request $request)
    {
        $berita = new ModelNews([
            'judul_berita' => $request->input('judul_berita'),
            'tanggal_berita' => $request->input('tanggal_berita'),
            'penerbit_berita' => $request->input('penerbit_berita'),
            'deskripsi_berita' => $request->input('deskripsi_berita'),
        ]);
        $berita->save();

        return redirect('/list-berita')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function list_berita()
    {
        $detail_berita = ModelNews::all();
        return view('news/list', ['detail_berita' => $detail_berita]);
    }

    public function detail_berita($id)
    {
        $data_detail = ModelNews::with(['galeri_berita'])->firstWhere('id', $id);
        return view('/news/detail', ['detail' => $data_detail]);
        //return response()->json($data_detail, 200);
    }

    public function update_berita($id)
    {
        $berita = ModelNews::find($id);
        return view('/news/update', ['berita' => $berita]);
    }

    public function update_proses_berita(Request $request)
    {
        $id = $request->input('id');
        $berita = ModelNews::find($id);
        $berita = new ModelNews([
            'judul_berita' => $request->input('judul_berita'),
            'tanggal_berita' => $request->input('tanggal_berita'),
            'penerbit_berita' => $request->input('penerbit_berita'),
            'deskripsi_berita' => $request->input('deskripsi_berita'),
        ]);
        $berita->update();
        //return redirect('/detail-berita' . '/' . $id)->with('pesan', 'Data Berhasil Diupdate!');
        return response()->json($berita, 200);
        // dd($data_detail);
    }

    public function delete_berita($id)
    {
        $data_galeri = ModelGaleriNews::find($id);
        $data_galeri->delete();

        $data_master = ModelNews::find($id);
        $data_master->delete();

        return redirect('/berita')->with('pesan', 'Data Berhasil Dihapus!');
    }
}
