<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRestaurants extends Model
{

    protected $fillable = [
        'id_restaurant', 'nama_restaurant', 'kategori_restaurant', 'area_restaurant', 'telepon_restaurant', 'alamat_restaurant', 'jadwal_restaurant', 'review_restaurant',
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
}
