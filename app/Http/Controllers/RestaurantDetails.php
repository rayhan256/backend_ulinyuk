<?php

namespace App\Http\Controllers;

use App\ModelRestaurantDetails;
use App\ModelRestaurants;
use App\ModelGaleriRestaurants;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class RestaurantDetails extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $data_detail = ModelRestaurantDetails::with('restaurant')->get();
        return $data_detail;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $data_detail = new ModelRestaurantDetails();

        $data_detail->id_restaurant = $request->id_restaurant;
        $data_detail->kategori_restaurant = $request->kategori_restaurant;
        $data_detail->jadwal_restaurant = $request->jadwal_restaurant;
        $data_detail->fasilitas_restaurant = $request->fasilitas_restaurant;
        $data_detail->deskripsi_restaurant = $request->deskripsi_restaurant;

        $data_detail->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_detail_by_id = ModelRestaurantDetails::find($id);

        $find_detail_by_id->id_restaurant = $request->id_restaurant;
        $find_detail_by_id->kategori_restaurant = $request->kategori_restaurant;
        $find_detail_by_id->jadwal_restaurant = $request->jadwal_restaurant;
        $find_detail_by_id->fasilitas_restaurant = $request->fasilitas_restaurant;
        $find_detail_by_id->deskripsi_restaurant = $request->deskripsi_restaurant;

        $find_detail_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_detail_by_id = ModelRestaurantDetails::find($id);
        $find_detail_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $data_detail = ModelRestaurantDetails::find($id);
        $data_restaurant = ModelRestaurants::find($id);
        $data_gambar = ModelGaleriRestaurants::where('id_restaurant', $id)->get();

        foreach ($data_gambar as $g) {
            $galeri[] = [
                'id' => $g->id,
                'foto_tempat' => url('galeri') . '/' . $g->foto_restaurant,
            ];
        }
        $dest[] = [
            'id' => $data_restaurant->id,
            'id_restaurant' => $data_detail->id_restaurant,
            'nama_restaurant' => $data_restaurant->nama_restaurant,
            'area' => $data_restaurant->area_restaurant,
            'telepon' => $data_restaurant->telepon_restaurant,
            'alamat' => $data_restaurant->alamat_restaurant,
            'jadwal' => $data_detail->jadwal_restaurant,
            'fasilitas' => $data_detail->fasilitas_restaurant,
            'deskripsi' => $data_detail->deskripsi_restaurant,
            'galeri' => $galeri,
        ];

        $response = ['data' => $dest];
        return response()->json($response, 200);

        //return $data_detail;
    }


    //CRUD

    public function add_detail_restaurant($id)
    {
        $data_detail = ModelRestaurants::where('id', $id)->first();
        return view('/restaurants/add_detail', ['data_detail' => $data_detail]);
    }

    public function add_proses_detail_restaurant(Request $request)
    {
        $detail = new ModelRestaurantDetails([
            'id_restaurant' => $request->input('id_restaurant'),
            'kategori_restaurant' => $request->input('kategori_restaurant'),
            'jadwal_restaurant' => $request->input('jadwal_restaurant'),
            'fasilitas_restaurant' => $request->input('fasilitas_restaurant'),
            'deskripsi_restaurant' => $request->input('deskripsi_restaurant'),
        ]);
        $detail->save();

        return redirect('/detail-restaurant' . '/' . $request->input('id_restaurant'))->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function detail_restaurant($id)
    {
        $data_detail = ModelRestaurants::with(['restaurant_detail', 'galeri_restaurant'])->firstWhere('id', $id);
        return view('/restaurants/detail', ['detail' => $data_detail]);
    }

    public function update_restaurant($id)
    {
        $data_detail = ModelRestaurants::with(['restaurant_detail', 'galeri_restaurant'])->firstWhere('id', $id);
        return view('/restaurants/update', ['detail' => $data_detail]);
    }

    public function update_proses_restaurant(Request $request)
    {
        $id_master = $request->input('id_master');
        $data_master = ModelRestaurants::find($id_master);
        $data_master->update([
            'nama_restaurant' => $request->input('nama_restaurant'),
            'telepon_restaurant' => $request->input('telepon_restaurant'),
            'alamat_restaurant' => $request->input('alamat_restaurant'),
        ]);

        $id = $request->input('id_restaurant');
        $data_detail = ModelRestaurantDetails::find($id);

        $data_detail->update($request->all());
        return redirect('/detail-restaurant' . '/' . $id)->with('pesan', 'Data Berhasil Diupdate!');
    }

    public function detele_restaurant($id)
    {
        $data_galeri = ModelGaleriRestaurants::find($id);
        $data_galeri->delete();

        $data_detail = ModelRestaurantDetails::find($id);
        $data_detail->delete();

        $data_master = ModelRestaurants::find($id);
        $data_master->delete();

        return redirect('/restaurant')->with('pesan', 'Data Berhasil Dihapus!');
    }
}
