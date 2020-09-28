<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHotels extends Model
{
    protected $table = 'mst_hotels';

    protected $fillable = [
        'id_hotel', 'nama_hotel', 'kategori_hotel', 'id_kategori_kamar_hotel', 'area_hotel', 'telepon_hotel', 'alamat_hotel', 'review_hotel'
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

    //ambil data id mst_hotel_details
    public function hotel_detail()
    {
        return $this->hasMany(ModelHotelDetails::class, 'id_kategori_kamar_hotel', 'id');
    }
}
