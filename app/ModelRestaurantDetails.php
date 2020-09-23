<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRestaurantDetails extends Model
{
    protected $fillable = [
        'id_kategori_restaurant', 'kategori_restaurant'
    ];

    //relasi agar data bisa diambil oleh mst_restaurant_orders
    public function restaurant_order()
    {
        return $this->hasMany(ModelRestaurantOrders::class, 'id_kategori_restaurant', 'id');
    }
}
