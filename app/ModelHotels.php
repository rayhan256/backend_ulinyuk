<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHotels extends Model
{

    protected $fillable = [
        'id_hotel', 'nama_hotel', 'kategori_hotel', 'area_hotel', 'telepon_hotel', 'alamat_hotel', 'kategori_kamar_hotel', 'harga_kamar_hotel', 'review_hotel',
    ];

    public function hotelorders()
    {
        return $this->hasMany(ModelHotelOrders::class, 'id_hotel', 'id');
    }
}
