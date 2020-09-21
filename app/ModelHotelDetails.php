<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHotelDetails extends Model
{
    protected $fillable = [
        'id_kategori_kamar_hotel', 'kategori_kamar_hotel', 'harga_kamar_hotel', 'fasilitas_kamar_hotel', 'aminities_kamar_hotel'
    ];

    public function hotelorders()
    {
        return $this->hasMany(ModelHotelOrders::class, 'id_kategori_kamar_hotel', 'id');
    }
}
