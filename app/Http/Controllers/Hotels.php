<?php

namespace App\Http\Controllers;

use App\ModelHotels;
use App\ModelGaleriHotels;
use App\ModelHotelDetails;
use Illuminate\Http\Request;

class Hotels extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $hotel = ModelHotels::with(['galeri_hotel'])->get();

        foreach ($hotel as $ho) {
            foreach ($ho->galeri_hotel as $galeri) {
                $data_galeri[] = [
                    'id_galeri' => $galeri->id,
                    'foto' => url('galeri') . '/' . $galeri->foto_hotel,
                ];
            }
            foreach ($ho->hotel_detail as $detail) {
                $data_detail = [
                    'kategori_kamar_hotel' => $detail->kategori_kamar_hotel,
                    'harga_kamar_hotel' => $detail->harga_kamar_hotel,
                ];
            }
            $data_hotel[] = [
                'hotel_id' => $ho->id,
                'nama_hotel' => $ho->nama_hotel,
                'alamat' => $ho->alamat_hotel,
                'kategori_hotel' => $ho->kategori_hotel,
                'kategori_kamar_hotel' => $detail->kategori_kamar_hotel,
                'harga_kamar' => $detail->harga_kamar_hotel,
                'telepon' => $ho->telepon_hotel,
                'area' => $ho->area_hotel,
                'galeri' => $data_galeri,
            ];
        }
        $response = ['data' => $data_hotel];
        return response()->json($response, 200);

        //return $data_hotel;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $data_hotel = new ModelHotels();

        $data_hotel->nama_hotel = $request->nama_hotel;
        $data_hotel->kategori_hotel = $request->kategori_hotel;
        $data_hotel->area_hotel = $request->area_hotel;
        $data_hotel->telepon_hotel = $request->telepon_hotel;
        $data_hotel->alamat_hotel = $request->alamat_hotel;
        $data_hotel->review_hotel = $request->review_hotel;

        $data_hotel->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_hotel_by_id = ModelHotels::find($id);

        $find_hotel_by_id->nama_hotel = $request->nama_hotel;
        $find_hotel_by_id->kategori_hotel = $request->kategori_hotel;
        $find_hotel_by_id->area_hotel = $request->area_hotel;
        $find_hotel_by_id->telepon_hotel = $request->telepon_hotel;
        $find_hotel_by_id->alamat_hotel = $request->alamat_hotel;
        $find_hotel_by_id->review_hotel = $request->review_hotel;

        $find_hotel_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_hotel_by_id = ModelHotels::find($id);
        $find_hotel_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $data_hotel = ModelHotelDetails::find($id);
        $data_ho = ModelHotels::find($id);
        $data_gambar = ModelGaleriHotels::where('id_hotel', $id)->get();

        foreach ($data_gambar as $g) {
            $galeri[] = [
                'id' => $g->id,
                'foto_hotel' => url('galeri') . '/' . $g->foto_hotel,
            ];
        }
        $detail[] = [
            'id' => $data_ho->id,
            'nama_hotel' => $data_ho->nama_hotel,
            'alamat' => $data_ho->alamat_hotel,
            'kategori' => $data_ho->kategori_hotel,
            'kategori_kamar' => $data_hotel->kategori_kamar_hotel,
            'harga_kamar' => $data_hotel->harga_kamar_hotel,
            'area' => $data_ho->area_hotel,
            'galeri' => $galeri,
        ];

        $response = ['data' => $detail];
        return response()->json($response, 200);

        //return $data_hotel;
    }


    //CRUD

    public function index()
    {
        $data_hotel = ModelHotels::with('galeri_hotel')->get();
        return view('/hotels/dashboard', ['data_hotel' => $data_hotel]);
        //return response()->json($data_hotel);
    }

    public function add_hotel()
    {
        $data_hotel = ModelHotels::all();
        return view('/hotels/add');
    }

    public function add_proses_hotel(Request $request)
    {
        $hotel = new ModelHotels([
            'nama_hotel' => $request->input('nama_hotel'),
            'kategori_hotel' => $request->input('kategori_hotel'),
            'area_hotel' => $request->input('area_hotel'),
            'telepon_hotel' => $request->input('telepon_hotel'),
            'alamat_hotel' => $request->input('alamat_hotel'),
        ]);
        $hotel->save();

        return redirect('/list-detail-hotel')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function list_hotel()
    {
        $data_detail = ModelHotels::all();
        return view('hotels/list', ['data_detail' => $data_detail]);
    }
}
