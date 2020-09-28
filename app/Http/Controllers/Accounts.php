<?php

namespace App\Http\Controllers;

use App\ModelAccounts;
use Illuminate\Http\Request;

class Accounts extends Controller
{
    //Ambil data
    public function getAll()
    {
        $akun = ModelAccounts::all();
        return $akun;
    }

    //insert data
    public function insertData(Request $request)
    {
        $akun = new ModelAccounts();

        $akun->userame = $request->userame;
        $akun->password = $request->password;
        $akun->role = $request->role;
        $akun->save();

        return "Data Berhasil Diinput!";
    }

    //update data
    public function updateData(Request $request, $id)
    {
        $find_akun_by_id = ModelAccounts::find($id);

        $find_akun_by_id->username = $request->username;
        $find_akun_by_id->password = $request->password;
        $find_akun_by_id->role = $request->role;
        $find_akun_by_id->save();

        return "Data Berhasil Diedit!";
    }

    //delete data
    public function deleteData($id)
    {
        $find_akun_by_id = ModelAccounts::find($id);
        $find_akun_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //mengambil data berdasarkan id
    public function getDataId($id)
    {
        $akun = ModelAccounts::find($id);
        return $akun;
    }
}
