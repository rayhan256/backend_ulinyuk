<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHistoriBookingRestaurants extends Model
{
    protected $table = 'mst_histori_booking_restaurants';

    protected $fillable = [
        'id_booking_restaurant', 'id_restaurant', 'id_customer', 'tanggal_booking_restaurant'
    ];

    //ambil data id mst_restaurant_orders
    public function restaurant_order()
    {
        return $this->hasMany(ModelRestaurantOrders::class, 'id_booking_restaurant', 'id');
    }
}
