<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHotels extends Model
{

    protected $fillable = [
        'id_hotel', 'nama_hotel', 'kategori_hotel', 'area_hotel', 'telepon_hotel', 'alamat_hotel', 'kategori_kamar_hotel', 'harga_kamar_hotel', 'review_hotel',
    ];

    //relasi agar data bisa diambil oleh mst_hotel_orders
    public function hotel_order()
    {
        return $this->hasMany(ModelHotelOrders::class, 'id_hotel', 'id');
    }

    //relasi agar data bisa diambil oleh mst_galeri_hotels
    public function galeri_hotel()
    {
        return $this->hasMany(ModelGaleriHotels::class, 'id_hotel', 'id');
    }

    /*relasi agar data dapa diambil oleh mst_histori_booking_hotels
    public function histori_booking_hotels()
    {
        return $this->hasMany(ModelHotelOrders::class, 'id_hotel', 'id');
    }*/
}
