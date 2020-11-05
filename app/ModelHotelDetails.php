<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHotelDetails extends Model
{
    protected $table = 'mst_hotel_details';

    protected $fillable = [
        'id_hotel', 'kategori_kamar_hotel', 'harga_kamar_hotel', 'jadwal_checkin_hotel', 'jadwal_checkout_hotel', 'fasilitas_hotel', 'fasilitas_kamar_hotel', 'fasilitas_publik_hotel', 'fasilitas_terdekat_hotel', 'fasilitas_transportasi_hotel', 'deskripsi_hotel'
    ];

    //relasi agar data bisa diambil oleh mst_hotel_orders
    public function hotel_order()
    {
        return $this->hasMany(ModelHotelOrders::class, 'id_kategori_kamar_hotel', 'id');
    }

    //ambil data id mst_hotels
    public function hotel()
    {
        return $this->belongsTo(ModelHotels::class, 'id_hotel', 'id');
    }
}
