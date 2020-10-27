<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    protected $fillable = [
        'nama_admin', 'tanggal_lahir_admin', 'jenis_kelamin_admin', 'alamat_admin', 'kota_admin', 'negara_admin', 'telepon_admin', 'email', 'password', 'foto_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
