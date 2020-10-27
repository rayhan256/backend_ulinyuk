<?php

namespace App\Http\Controllers\otentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class OtentikasiController extends Controller
{
    public function index()
    {
        return view('logins/login');
    }

    public function login(Request $request)
    {
        //dd($request->all());
        $data = Admin::where('email', $request->email)->firstOrFail();
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                session(['berhasil-login' => true]);
                return redirect('/dashboard');
            }
        }
        return redirect('/')->with('message', 'Email atau Password Salah!');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
