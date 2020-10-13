<?php

namespace App\Http\Controllers;

use App\ModelAdmins;
use Illuminate\Http\Request;

class Admins extends Controller
{
    //Ambil data
    public function getAll()
    {
        $admin = ModelAdmins::all();
        return $admin;
    }

    //insert data
    public function insertData(Request $request)
    {
        $admin = new ModelAdmins();

        $admin->nama_admin = $request->nama_admin;
        $admin->tanggal_lahir_admin = $request->tanggal_lahir_admin;
        $admin->jenis_kelamin_admin = $request->jenis_kelamin_admin;
        $admin->alamat_admin = $request->alamat_admin;
        $admin->kota_admin = $request->kota_admin;
        $admin->telepon_admin = $request->telepon_admin;
        $admin->email_admin = $request->email_admin;
        $admin->foto_admin = $request->foto_admin;
        $admin->save();

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
        $admin = ModelAdmins::find($id);
        return $admin;
    }

    public function index()
    {
        $admin = ModelAdmins::all();
        return view('/admins/profile');
    }

    public function update_profile()
    {
        $admin = ModelAdmins::all();
        return view('/admins/update');
    }
}
