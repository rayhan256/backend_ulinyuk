<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPayments extends Model
{
    protected $table = 'mst_payments';

    protected $fillable = [
        'id_user', 'foto_bukti_pembayaran', 'pembayaran_via'
    ];

    //ambil data id users
    public function user()
    {
        return $this->hasMany(User::class,  'id_user', 'id');
    }
}
