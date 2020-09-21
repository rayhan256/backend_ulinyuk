<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRestaurantDetails extends Model
{
    protected $fillable = [
        'id_kategori_restaurant', 'kategori_restaurant'
    ];

    public function restaurantorders()
    {
        return $this->hasMany(ModelRestaurantOrders::class, 'id_kategori_restaurant', 'id');
    }
}
