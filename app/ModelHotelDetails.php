<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHotelDetails extends Model
{
    protected $table = 'mst_hotel_details';

    protected $fillable = [
        'id_kategori_kamar_hotel', 'kategori_kamar_hotel', 'fasilitas_hotel', 'fasilitas_kamar_hotel', 'fasilitas_publik_hotel', 'fasilitas_terdekat_hotel', 'fasilitas_transportasi_hotel', 'harga_kamar_hotel',
    ];

    //relasi agar bisa di ambil oleh mst_hotels
    public function hotel()
    {
        return $this->hasMany(ModelHotels::class, 'id_kategori_kamar_hotel', 'id');
    }
}
