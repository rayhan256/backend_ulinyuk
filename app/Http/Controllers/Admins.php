<?php

namespace App\Http\Controllers;

use App\ModelAdmins;
use Illuminate\Http\Request;

class Admins extends Controller
{
    //Ambil data
    public function getAll()
    {
        $data_admin = ModelAdmins::all();
        return $data_admin;
    }

    //insert data
    public function insertData(Request $request)
    {
        $data_admin = new ModelAdmins();

        $data_admin->nama_admin = $request->nama_admin;
        $data_admin->tanggal_lahir_admin = $request->tanggal_lahir_admin;
        $data_admin->jenis_kelamin_admin = $request->jenis_kelamin_admin;
        $data_admin->alamat_admin = $request->alamat_admin;
        $data_admin->kota_admin = $request->kota_admin;
        $data_admin->telepon_admin = $request->telepon_admin;
        $data_admin->email_admin = $request->email_admin;
        $data_admin->foto_admin = $request->foto_admin;
        $data_admin->save();

        return "Data Berhasil Diinput!";
    }

    //update data
    public function updateData(Request $request, $id)
    {
        $find_admin_by_id = ModelAdmins::find($id);

        $find_admin_by_id->nama_admin = $request->nama_admin;
        $find_admin_by_id->tanggal_lahir_admin = $request->tanggal_lahir_admin;
        $find_admin_by_id->jenis_kelamin_admin = $request->jenis_kelamin_admin;
        $find_admin_by_id->alamat_admin = $request->alamat_admin;
        $find_admin_by_id->kota_admin = $request->kota_admin;
        $find_admin_by_id->telepon_admin = $request->telepon_admin;
        $find_admin_by_id->email_admin = $request->email_admin;
        $find_admin_by_id->foto_admin = $request->foto_admin;
        $find_admin_by_id->save();

        return "Data Berhasil Diedit!";
    }

    //delete data
    public function deleteData($id)
    {
        $find_admin_by_id = ModelAdmins::find($id);
        $find_admin_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //mengambil data berdasarkan id
    public function getDataId($id)
    {
        $data_admin = ModelAdmins::find($id);
        return $data_admin;
    }

    public function index()
    {
        $data_admin = ModelAdmins::all();
        return view('/admins/profile', ['data_admin' => $data_admin]);
    }

    public function update_profile()
    {
        $data_admin = ModelAdmins::all();
        return view('/admins/update');
    }
}
