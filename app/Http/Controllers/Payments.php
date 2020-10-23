<?php

namespace App\Http\Controllers;

use App\ModelPayments;
use Illuminate\Http\Request;

class Payments extends Controller
{
    public function getAll()
    {
        $payment = ModelPayments::with('user')->get();
        return $payment;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $payment = new ModelPayments();

        $payment->id_pembayaran = $request->id_pembayaran;
        $payment->id_user = $request->id_user;
        $payment->foto_bukti_pembayaran = $request->foto_bukti_pembayaran;
        $payment->pembayaran_via = $request->pembayaran_via;

        $payment->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        //dd($request);
        $find_payment_by_id = ModelPayments::find($id);

        $find_payment_by_id->id_pembayaran = $request->id_pembayaran;
        $find_payment_by_id->id_user = $request->id_user;
        $find_payment_by_id->foto_bukti_pembayaran = $request->foto_bukti_pembayaran;
        $find_payment_by_id->pambayaran_via = $request->pambayaran_via;

        $find_payment_by_id->save();

        return "Data Berhasil Diupdate!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_payment_by_id = ModelPayments::find($id);
        $find_payment_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //Mengambil data berdasarkan id
    public function getDataId($id)
    {
        $payment = ModelPayments::find($id);
        return $payment;
    }
}
