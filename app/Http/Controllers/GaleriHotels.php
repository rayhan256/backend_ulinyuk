<?php

namespace App\Http\Controllers;

use App\ModelGaleriHotels;
use App\ModelHotels;
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

        $galeri->id_hotel = $request->id_hotel;
        $galeri->foto_hotel = $request->foto_hotel;

        $galeri->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_galeri_by_id = ModelGaleriHotels::find($id);

        $find_galeri_by_id->id_hotel = $request->id_hotel;
        $find_galeri_by_id->foto_hotel = $request->foto_hotel;

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



    //CRUD

    public function galeri_hotel($id)
    {
        $galeri = ModelHotels::where('id', $id)->first();
        return view('/hotels/gallery', ['galeri' => $galeri]);
        //return response()->json($galeri, 200);
    }

    public function add_galeri_hotel(Request $request)
    {
        $request->validate([
            'foto_hotel' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $namaImage = time() . '.' . $request->foto_hotel->extension();
        $request->foto_hotel->move(public_path('galeri'), $namaImage);

        $galeri = new ModelGaleriHotels([
            'id_hotel' => $request->input('id_hotel'),
            'foto_hotel' => $namaImage,
        ]);
        $galeri->save();

        return redirect('/detail-hotel/' . $request->input('id_hotel'))->with('sukses', 'Foto Berhasil Ditambahkan!');
    }
}
