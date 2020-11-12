<?php

namespace App\Http\Controllers;

use App\User;
use App\AccountAdmins;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    /*LOGIN ADMIN
    public function login_admin()
    {
        return view('/logins/login');
    }

    public function postlogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $kredensial = request([$email, $password]);

        if (Auth::attempt($kredensial)) {
            $account_admins = $request->account_admins();
            return redirect('/dashboard');
        } else {
            return redirect('/logins/login');
        }
    }*/


    //USER API
    public function signup(Request $req)
    {
        // $req->validate([
        //     'email' => 'required|string|email|unique:users',
        //     'password' => 'required|string|confirm',
        // ]);

        $user = new User([
            'nama_user' => $req->nama_user,
            'tanggal_lahir_user' => $req->tanggal_lahir_user,
            'jenis_kelamin_user' => $req->jenis_kelamin_user,
            'alamat_user' => $req->alamat_user,
            'kota_user' => $req->kota_user,
            'negara_user' => $req->negara_user,
            'telepon_user' => $req->telepon_user,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'foto_user' => $req->foto_user,
        ]);

        $user->save();

        return response()->json(['message' => 'User Berhasil Sign Up'], 200);
    }

    public function login(Request $req)
    {

        //buat user

        // $req->validate([
        //     'email' => 'required|string',
        //     'password' => 'required|string',
        //     'remember_me' => 'boolean'
        // ]);

        //data yang akan diinput oleh user
        $kredensial = request(['email', 'password']);

        if (!Auth::attempt($kredensial)) {
            return response()->json(['message' => 'Data Tidak Ada'], 400);
        };
        $user = $req->user();

        //untuk tokennya
        $bikinToken = $user->createToken("Personal Access Token");
        $hasilToken = $bikinToken->token;

        if ($req->remember_me) {
            $hasilToken->expires_at = Carbon::now()->addWeeks(1);
        }

        $hasilToken->save();

        return response()->json([
            'token' => $bikinToken->accessToken,
            'token_type' => "Bearer",
            'sampai_kapan' => Carbon::parse($bikinToken->token->expires_at)->toDateTimeString()
        ], 200);
    }

    public function user(Request $req)
    {
        return response()->json($req->user());
    }

    public function logout(Request $req)
    {
        $req->user()->token()->revoke();
        return response()->json(['Message' => 'User Berhasil Logout'], 200);
    }
}
