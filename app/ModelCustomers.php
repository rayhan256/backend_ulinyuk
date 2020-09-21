<?php

namespace App;

use App\Http\Controllers\HotelOrders;
use Illuminate\Database\Eloquent\Model;

class ModelCustomers extends Model
{

    protected $fillable = [
        'id_customer', 'nama_customer', 'tanggal_lahir_customer', 'jenis_kelamin_customer', 'alamat_customer', 'kota_customer', 'negara_customer', 'telepon_customer', 'email_customer', 'foto_customer',
    ];

    public function hotelorder()
    {
        return $this->belongsTo(ModelHotelOrders::class);
    }
}
