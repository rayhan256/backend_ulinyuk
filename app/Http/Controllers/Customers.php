<?php

namespace App\Http\Controllers;

use App\ModelCustomers;
use Illuminate\Http\Request;

class Customers extends Controller
{
    //Ambil data dari Model
    public function getAll()
    {
        $customer = ModelCustomers::all();
        return $customer;
    }

    //Insert data customer ke postgre
    public function insertData(Request $request)
    {
        //dd($request);
        $request->validate([
            'id_customer' => 'required',
            'nama_customer' => 'required',
            'tanggal_lahir_customer' => 'required',
            'jenis_kelamin_customer' => 'required',
            'alamat_customer' => 'required',
            'kota_customer' => 'required',
            'negara_customer' => 'required',
            'telepon_customer' => 'required',
            'email_customer' => 'required',
            'foto_customer' => 'required'
        ]);

        $data = new ModelCustomers([
            'id_customer' => $request->id_customer,
            'nama_customer' => $request->nama_customer,
            'tanggal_lahir_customer' => $request->tanggal_lahir_customer,
            'jenis_kelamin_customer' => $request->jenis_kelamin_customer,
            'alamat_customer' => $request->alamat_customer,
            'kota_customer' => $request->kota_customer,
            'negara_customer' => $request->negara_customer,
            'telepon_customer' => $request->telepon_customer,
            'email_customer' => $request->email_customer,
            'foto_customer' => $request->foto_customer
        ]);

        $data->save();

        return response()->json([
            'data' => $data,
            'message' => 'Data Berhasil Ditambahkan!'
        ]);
    }

    //Update Data 
    public function updateData(Request $request, $id)
    {
        $find_customer_by_id = ModelCustomers::find($id);

        $find_customer_by_id->id_customer = $request->id_customer;
        $find_customer_by_id->nama_customer = $request->nama_customer;
        $find_customer_by_id->tanggal_lahir_customer = $request->tanggal_lahir_customer;
        $find_customer_by_id->jenis_kelamin_customer = $request->jenis_kelamin_customer;
        $find_customer_by_id->alamat_customer = $request->alamat_customer;
        $find_customer_by_id->kota_customer = $request->kota_customer;
        $find_customer_by_id->negara_customer = $request->negara_customer;
        $find_customer_by_id->telepon_customer = $request->telepon_customer;
        $find_customer_by_id->email_customer = $request->email_customer;
        $find_customer_by_id->foto_customer = $request->foto_customer;

        $find_customer_by_id->save();

        return "Data Berhasil Diedit!";
    }

    //Delete Data
    public function deleteData($id)
    {
        $find_customer_by_id = ModelCustomers::find($id);
        $find_customer_by_id->delete();

        return "Data berhasil dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $customer = ModelCustomers::find($id);
        return $customer;
    }
}
