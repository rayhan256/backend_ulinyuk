<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHotelDetails extends Model
{
    protected $fillable = [
        'id_kategori_kamar_hotel', 'kategori_kamar_hotel', 'harga_kamar_hotel', 'fasilitas_kamar_hotel', 'aminities_kamar_hotel'
    ];

    //relasi agar bisa di ambil oleh mst_hotel_orders
    public function hotel_order()
    {
        return $this->hasMany(ModelHotelOrders::class, 'id_kategori_kamar_hotel', 'id');
    }

    /*relasi agar bisa di ambil oleh mst_histori_booking_hotels
    public function histori_booking_hotel()
    {
        return $this->hasMany(ModelHotelOrders::class, 'id_kategori_kamar_hotel', 'id');
    }*/
}
