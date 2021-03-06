<?php

namespace App\Http\Controllers;

use App\ModelDestinationDetails;
use App\ModelDestinations;
use App\ModelGaleriDestinations;
use Illuminate\Http\Request;

class DestinationDetails extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $data_detail = ModelDestinationDetails::with(['destination', 'galeri_destination'])->get();
        return $data_detail;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $data_detail = new ModelDestinationDetails();

        $data_detail->id_objek_wisata = $request->id_objek_wisata;
        $data_detail->kategori_objek_wisata = $request->kategori_objek_wisata;
        $data_detail->jadwal_objek_wisata = $request->jadwal_objek_wisata;
        $data_detail->wahana_objek_wisata = $request->wahana_objek_wisata;
        $data_detail->fasilitas_objek_wisata = $request->fasilitas_objek_wisata;
        $data_detail->deskripsi_objek_wisata = $request->deskripsi_objek_wisata;
        $data_detail->harga_tiket = $request->harga_tiket;

        $data_detail->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_detail_by_id = ModelDestinationDetails::find($id);

        $find_detail_by_id->id_objek_wisata = $request->id_objek_wisata;
        $find_detail_by_id->kategori_objek_wisata = $request->kategori_objek_wisata;
        $find_detail_by_id->jadwal_objek_wisata = $request->jadwal_objek_wisata;
        $find_detail_by_id->wahana_objek_wisata = $request->wahana_objek_wisata;
        $find_detail_by_id->fasilitas_objek_wisata = $request->fasilitas_objek_wisata;
        $find_detail_by_id->deskripsi_objek_wisata = $request->deskripsi_objek_wisata;
        $find_detail_by_id->harga_tiket = $request->harga_tiket;

        $find_detail_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_detail_by_id = ModelDestinationDetails::find($id);
        $find_detail_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $data_detail = ModelDestinationDetails::find($id);
        $data_destinasi = ModelDestinations::find($id);
        $data_gambar = ModelGaleriDestinations::where('id_objek_wisata', $id)->get();

        foreach ($data_gambar as $g) {
            $galeri[] = [
                'id' => $g->id,
                'foto_tempat' => url('galeri') . '/' . $g->foto_objek_wisata,
            ];
        }
        $dest[] = [
            'id' => $data_detail->id,
            'id_objek_wisata' => $data_destinasi->id,
            'nama_wisata' => $data_destinasi->nama_objek_wisata,
            'telepon' => $data_destinasi->telepon_objek_wisata,
            'alamat' => $data_destinasi->alamat_objek_wisata,
            'area' => $data_destinasi->area_objek_wisata,
            'kategori' => $data_detail->kategori_objek_wisata,
            'jadwal' => $data_detail->jadwal_objek_wisata,
            'wahana' => $data_detail->wahana_objek_wisata,
            'fasilitas' => $data_detail->fasilitas_objek_wisata,
            'deskripsi' => $data_detail->deskripsi_objek_wisata,
            'harga_tiket' => $data_detail->harga_tiket,
            'galeri' => $galeri,
        ];

        $response = ['data' => $dest];
        return response()->json($response, 200);


        //return $data_detail;
    }





    //CRUD

    //insert ke table mst_destination_details
    public function add_detail_objek_wisata($id)
    {
        $data_detail = ModelDestinations::where('id', $id)->first();
        return view('/destinations/add_detail', ['data_detail' => $data_detail]);
        //echo var_dump($data_detail);
    }

    public function add_proses_detail_objek_wisata(Request $request)
    {
        $detail = new ModelDestinationDetails([
            'id_objek_wisata' => $request->input('id_objek_wisata'),
            'kategori_objek_wisata' => $request->input('kategori_objek_wisata'),
            'jadwal_objek_wisata' => $request->input('jadwal_objek_wisata'),
            'wahana_objek_wisata' => $request->input('wahana_objek_wisata'),
            'fasilitas_objek_wisata' => $request->input('fasilitas_objek_wisata'),
            'deskripsi_objek_wisata' => $request->input('deskripsi_objek_wisata'),
            'harga_tiket' => $request->input('harga_tiket')
        ]);
        $detail->save();

        return redirect('/detail-objek-wisata' . '/' . $request->input('id_objek_wisata'))->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function detail_objek_wisata($id)
    {
        //$data_detail = ModelDestinations::find($id);
        $data_detail = ModelDestinations::with(['destination_detail', 'galeri_destination'])->firstWhere('id', $id);
        return view('/destinations/detail', ['detail' => $data_detail]);
        // return response()->json($data_detail, 200);
    }

    // public function list_objek_wisata()
    // {
    //     $data_detail = ModelDestinationDetails::all();
    //     return view('/destinations/list', ['data_detail' => $data_detail]);
    // }

    public function update_objek_wisata($id)
    {
        $data_detail = ModelDestinations::with(['destination_detail', 'galeri_destination'])->firstWhere('id', $id);
        return view('/destinations/update', ['detail' => $data_detail]);
        // dd($data_detail);
        //return response()->json($data_detail, 200);
    }

    public function update_proses_objek_wisata(Request $request)
    {
        $id_master = $request->input('id_master');
        $data_master = ModelDestinations::find($id_master);
        $data_master->update([
            'nama_objek_wisata' => $request->input('nama_objek_wisata'),
            'telepon_objek_wisata' => $request->input('telepon_objek_wisata'),
            'alamat_objek_wisata' => $request->input('alamat_objek_wisata'),
        ]);


        $id = $request->input('id_objek_wisata');
        $data_detail = ModelDestinationDetails::find($id);

        $data_detail->update($request->all());
        return redirect('/detail-objek-wisata' . '/' . $id)->with('pesan', 'Data Berhasil Diupdate!');
        //return response()->json($data_detail, 200);
        // dd($data_detail);
    }

    public function delete_objek_wisata($id)
    {
        $data_galeri = ModelGaleriDestinations::find($id);
        $data_galeri->delete();

        $data_detail = ModelDestinationDetails::find($id);
        $data_detail->delete();

        $data_master = ModelDestinations::find($id);
        $data_master->delete();


        return redirect('/objek-wisata')->with('pesan', 'Data Berhasil Dihapus!');
    }
}
