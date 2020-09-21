<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRestaurantOrders extends Model
{
    protected $fillable = [
        'kode_booking_restaurant', 'id_customer', 'id_restaurant', 'id_kategori_restaurant', 'tanggal_booking'
    ];

    public function customer()
    {
        return $this->hasMany(ModelCustomers::class,  'id_customer', 'id');
    }

    public function restaurant()
    {
        return $this->hasMany(ModelRestaurants::class, 'id_restaurant', 'id');
    }

    public function restaurantdetail()
    {
        return $this->hasMany(ModelRestaurantDetails::class, 'id_kategori_restaurant', 'id');
    }
}
