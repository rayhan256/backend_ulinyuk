<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPayments extends Model
{
    protected $fillable = [
        'id_pembayaran', 'id_customer', 'foto_bukti_pembayaran', 'via_bank'
    ];

    //ambil data id mst_customers
    public function customer()
    {
        return $this->hasMany(ModelCustomers::class,  'id_customer', 'id');
    }
}
