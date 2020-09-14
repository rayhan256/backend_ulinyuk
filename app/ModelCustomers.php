<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCustomers extends Model
{
    //
    protected $table = 'mst_customers';
    protected $fillable = [
        'id_customer', 'nama_customer', 'tanggal_lahir_customer', 'jenis_kelamin_customer', 'alamat_customer', 'kota_customer', 'negara_customer', 'telepon_customer', 'email_customer', 'foto_customer',
    ];
    protected $primaryKey = 'id';

    public function Hotelorder()
    {
        return $this->belongsTo(Hotelorder::class);
    }
}
