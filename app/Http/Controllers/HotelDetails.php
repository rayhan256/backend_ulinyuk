<?php

namespace App\Http\Controllers;

use App\ModelGaleriHotels;
use App\ModelHistoriBookingHotels;
use App\ModelHotelDetails;
use App\ModelHotels;
use Illuminate\Http\Request;

class HotelDetails extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $data_detail = ModelHotelDetails::with('hotel')->get();
        return $data_detail;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $data_detail = new ModelHotelDetails();

        $data_detail->id_hotel = $request->id_hotel;
        $data_detail->kategori_kamar_hotel = $request->kategori_kamar_hotel;
        $data_detail->harga_kamar_hotel = $request->harga_kamar_hotel;
        $data_detail->jadwal_checkin_hotel = $request->jadwal_checkin_hotel;
        $data_detail->jadwal_checkout_hotel = $request->jadwal_checkout_hotel;
        $data_detail->fasilitas_hotel = $request->fasilitas_hotel;
        $data_detail->fasilitas_kamar_hotel = $request->fasilitas_kamar_hotel;
        $data_detail->fasilitas_publik_hotel = $request->fasilitas_publik_hotel;
        $data_detail->fasilitas_terdekat_hotel = $request->fasilitas_terdekat_hotel;
        $data_detail->fasilitas_transportasi_hotel = $request->fasilitas_transportasi_hotel;
        $data_detail->deskripsi_hotel = $request->deskripsi_hotel;

        $data_detail->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_detail_by_id = ModelHotelDetails::find($id);

        $find_detail_by_id->id_hotel = $request->id_hotel;
        $find_detail_by_id->kategori_kamar_hotel = $request->kategori_kamar_hotel;
        $find_detail_by_id->harga_kamar_hotel = $request->harga_kamar_hotel;
        $find_detail_by_id->jadwal_checkin_hotel = $request->jadwal_checkin_hotel;
        $find_detail_by_id->jadwal_checkout_hotel = $request->jadwal_checkout_hotel;
        $find_detail_by_id->fasilitas_hotel = $request->fasilitas_hotel;
        $find_detail_by_id->fasilitas_kamar_hotel = $request->fasilitas_kamar_hotel;
        $find_detail_by_id->fasilitas_publik_hotel = $request->fasilitas_publik_hotel;
        $find_detail_by_id->fasilitas_terdekat_hotel = $request->fasilitas_terdekat_hotel;
        $find_detail_by_id->fasilitas_transportasi_hotel = $request->fasilitas_transportasi_hotel;
        $find_detail_by_id->deskripsi_hotel = $request->deskripsi_hotel;

        $find_detail_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_detail_by_id = ModelHotelDetails::find($id);
        $find_detail_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $data_detail = ModelHotelDetails::find($id);
        $data_hotel = ModelHotels::find($id);
        $data_gambar = ModelGaleriHotels::where('id_hotel', $id)->get();

        foreach ($data_gambar as $g) {
            $galeri[] = [
                'id' => $g->id,
                'foto_hotel' => url('galeri') . '/' . $g->foto_hotel,
            ];
        }
        $ho[] = [
            'id' => $data_hotel->id,
            'id_hotel' => $data_detail->id_hotel,
            'nama_hotel' => $data_hotel->nama_hotel,
            'telepon' => $data_hotel->telepon_hotel,
            'alamat' => $data_hotel->alamat_hotel,
            'harga_kamar' => $data_hotel->harga_kamar_hotel,
            'jadwal_checkin' => $data_hotel->jadwal_checkin_hotel,
            'jadwal_checkout' => $data_hotel->jadwal_checkout_hotel,
            'fasilitas' => $data_hotel->fasilitas_hotel,
            'fasilitas_kamar' => $data_hotel->fasilitas_kamar_hotel,
            'fasilitas_publik' => $data_hotel->fasilitas_publik_hotel,
            'fasilitas_terdekat' => $data_hotel->fasilitas_terdekat_hotel,
            'fasilitas_transportasi' => $data_hotel->fasilitas_transportasi_hotel,
            'deskripsi' => $data_hotel->deskripsi_hotel,
            'galeri' => $galeri,
        ];

        $response = ['data' => $ho];
        return response()->json($response, 200);

        //return $data_detail;
    }


    //CRUD

    public function add_detail_hotel($id)
    {
        $data_detail = ModelHotels::where('id', $id)->first();
        return view('/hotels/add_detail', ['data_detail' => $data_detail]);
    }

    public function add_proses_detail_hotel(Request $request)
    {
        $detail = new ModelHotelDetails([
            'id_hotel' => $request->input('id_hotel'),
            'kategori_kamar_hotel' => $request->input('kategori_kamar_hotel'),
            'harga_kamar_hotel' => $request->input('harga_kamar_hotel'),
            'jadwal_checkin_hotel' => $request->input('jadwal_checkin_hotel'),
            'jadwal_checkout_hotel' => $request->input('jadwal_checkout_hotel'),
            'fasilitas_hotel' => $request->input('fasilitas_hotel'),
            'fasilitas_kamar_hotel' => $request->input('fasilitas_kamar_hotel'),
            'fasilitas_publik_hotel' => $request->input('fasilitas_publik_hotel'),
            'fasilitas_terdekat_hotel' => $request->input('fasilitas_terdekat_hotel'),
            'fasilitas_transportasi_hotel' => $request->input('fasilitas_transportasi_hotel'),
            'deskripsi_hotel' => $request->input('deskripsi_hotel'),
        ]);
        $detail->save();

        return redirect('/detail-hotel' . '/' . $request->input('id_hotel'))->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function detail_hotel($id)
    {
        $data_detail = ModelHotels::with(['hotel_detail', 'galeri_hotel'])->firstWhere('id', $id);
        return view('/hotels/detail', ['detail' => $data_detail]);
        // return response()->json($data_detail, 200);
    }

    public function update_hotel($id)
    {
        $data_detail = ModelHotels::with(['hotel_detail', 'galeri_hotel'])->firstWhere('id', $id);
        return view('/hotels/update', ['detail' => $data_detail]);
        //return response()->json($data_detail, 200);
    }

    public function update_proses_hotel(Request $request)
    {
        $id_master = $request->input('id_master');
        $data_master = ModelHotels::find($id_master);
        $data_master->update([
            'nama_hotel' => $request->input('nama_hotel'),
            'telepon_hotel' => $request->input('telepon_hotel'),
            'alamat_hotel' => $request->input('alamat_hotel'),
        ]);

        $id = $request->input('id_hotel');
        $data_detail = ModelHotelDetails::find($id);

        $data_detail->update($request->all());
        return redirect('/detail-hotel' . '/' . $id)->with('pesan', 'Data Berhasil Diupdate!');
    }

    public function delete_hotel($id)
    {
        $data_galeri = ModelGaleriHotels::find($id);
        $data_galeri->delete();

        $data_detail = ModelHotelDetails::find($id);
        $data_detail->delete();

        $data_master = ModelHotels::find($id);
        $data_master->delete();

        return redirect('/hotel')->with('pesan', 'Data Berhasil Dihapus!');
    }
}
