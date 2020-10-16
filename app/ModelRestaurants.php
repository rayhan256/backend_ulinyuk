<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRestaurants extends Model
{
    protected $table = 'mst_restaurants';

    protected $fillable = [
        'id_restaurant', 'id_kategori_restaurant', 'nama_restaurant', 'area_restaurant', 'telepon_restaurant', 'alamat_restaurant', 'jadwal_restaurant', 'deskripsi_restaurant', 'review_restaurant',
    ];

    //relasi agar data bisa diambil oleh mst_restaurant_orders
    public function restaurant_order()
    {
        return $this->hasMany(ModelRestaurantOrders::class, 'id_restaurant', 'id');
    }

    //relasi agar data bisa diambil oleh mst_galeri_restaurants
    public function galeri_restaurant()
    {
        return $this->hasMany(ModelGaleriRestaurants::class, 'id_restaurant', 'id');
    }

    //ambil data id mst_restaurant_details
    public function restaurant_detail()
    {
        return $this->hasMany(ModelRestaurantDetails::class, 'id_kategori_restaurant', 'id');
    }
}
