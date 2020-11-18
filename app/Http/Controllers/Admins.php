<?php

namespace App\Http\Controllers;

use App\ModelAdmins;
use App\Admin;
use Illuminate\Http\Request;

class Admins extends Controller
{
    //Ambil data
    public function getAll()
    {
        $data_admin = Admin::all();
        return $data_admin;
    }

    //insert data
    public function insertData(Request $request)
    {
        $data_admin = new Admin();

        $data_admin->nama_admin = $request->nama_admin;
        $data_admin->tanggal_lahir_admin = $request->tanggal_lahir_admin;
        $data_admin->jenis_kelamin_admin = $request->jenis_kelamin_admin;
        $data_admin->alamat_admin = $request->alamat_admin;
        $data_admin->kota_admin = $request->kota_admin;
        $data_admin->telepon_admin = $request->telepon_admin;
        $data_admin->email = $request->email;
        $data_admin->foto_admin = $request->foto_admin;
        $data_admin->save();

        return "Data Berhasil Diinput!";
    }

    //update data
    public function updateData(Request $request, $id)
    {
        $find_admin_by_id = Admin::find($id);

        $find_admin_by_id->nama_admin = $request->nama_admin;
        $find_admin_by_id->tanggal_lahir_admin = $request->tanggal_lahir_admin;
        $find_admin_by_id->jenis_kelamin_admin = $request->jenis_kelamin_admin;
        $find_admin_by_id->alamat_admin = $request->alamat_admin;
        $find_admin_by_id->kota_admin = $request->kota_admin;
        $find_admin_by_id->telepon_admin = $request->telepon_admin;
        $find_admin_by_id->email = $request->email;
        $find_admin_by_id->foto_admin = $request->foto_admin;
        $find_admin_by_id->save();

        return "Data Berhasil Diedit!";
    }

    //delete data
    public function deleteData($id)
    {
        $find_admin_by_id = Admin::find($id);
        $find_admin_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //mengambil data berdasarkan id
    public function getDataId($id)
    {
        $data_admin = Admin::find($id);
        return $data_admin;
    }


    //CRUD

    public function index()
    {
        $data_admin = Admin::all();
        return view('/admins/profile', ['data_admin' => $data_admin]);
    }

    public function update_profile($id)
    {
        $data_admin = Admin::find($id);
        return view('/admins/update', ['admin' => $data_admin]);
    }

    public function update_proses_profile(Request $request)
    {
        $id = $request->input('id');
        $data_admin = Admin::find($id);

        $data_admin = new Admin([
            'nama_admin' => $request->input('nama_admin'),
            'tanggal_lahir_admin' => $request->input('tanggal_lahir_admin'),
            'jenis_kelamin_admin' => $request->input('jenis_kelamin_admin'),
            'alamat_admin' => $request->input('alamat_admin'),
            'kota_admin' => $request->input('kota_admin'),
            'negara_admin' => $request->input('negara_admin'),
            'telepon_admin' => $request->input('telepon_admin'),
            'email' => $request->input('email'),
            'foto_admin' => $request->input('foto_admin')
        ]);
        $data_admin->update();
        return redirect('/profile')->with('sukses', 'Data Berhasil Diupdate!');
        //return response()->json($data_admin, 200);
        // dd($data_admin);
    }
}
