<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRestaurantDetails extends Model
{
    protected $table = 'mst_restaurant_details';

    protected $fillable = [
        'id_restaurant', 'kategori_restaurant', 'jadwal_restaurant', 'fasilitas_restaurant', 'deskripsi_restaurant'
    ];

    //relasi agar data bisa diambil oleh mst_restaurant_orders
    public function restaurant_order()
    {
        return $this->hasMany(ModelRestaurantOrders::class, 'id_kategori_restaurant', 'id');
    }

    //ambil data id mst_restaurants
    public function restaurant()
    {
        return $this->belongsTo(ModelRestaurants::class, 'id_restaurant', 'id');
    }

    //ambil data id mst_restaurants
    public function galeri_restaurant()
    {
        return $this->belongsTo(ModelGaleriRestaurants::class, 'id_restaurant', 'id');
    }
}
