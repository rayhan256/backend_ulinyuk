<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRestaurantDetails extends Model
{
    protected $table = 'mst_restaurant_details';

    protected $fillable = [
        'id_kategori_restaurant', 'kategori_restaurant'
    ];

    //relasi agar data bisa diambil oleh mst_restaurants
    public function restaurant()
    {
        return $this->hasMany(ModelRestaurants::class, 'id_kategori_restaurant', 'id');
    }
}
