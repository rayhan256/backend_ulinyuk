<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelAdmins extends Model
{
    protected $table = 'mst_admins';

    protected $fillable = [
        'nama_admin', 'tanggal_lahir_admin', 'jenis_kelamin_admin', 'alamat_admin', 'kota_admin', 'telepon_admin', 'email_admin', 'foto_admin'
    ];
}
