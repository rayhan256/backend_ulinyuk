<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRestaurants extends Model
{

    protected $fillable = [
        'id_restaurant', 'nama_restaurant', 'kategori_restaurant', 'area_restaurant', 'telepon_restaurant', 'alamat_restaurant', 'jadwal_restaurant', 'review_restaurant',
    ];

    public function restaurantorders()
    {
        return $this->hasMany(ModelRestaurantOrders::class, 'id_restaurant', 'id');
    }
}
