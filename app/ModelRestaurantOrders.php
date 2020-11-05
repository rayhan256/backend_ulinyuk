<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRestaurantOrders extends Model
{
    protected $table = 'mst_restaurant_orders';

    protected $fillable = [
        'id_user', 'id_kategori_restaurant', 'id_restaurant', 'jumlah_orang', 'tanggal_booking'
    ];

    //relasi agar bisa di ambil oleh mst_histori_booking_restaurants
    public function histori_booking_restaurant()
    {
        return $this->hasMany(ModelRestaurantOrders::class, 'id_booking_restaurant', 'id');
    }

    //ambil data id mst_users
    public function user()
    {
        return $this->belongsTo(User::class,  'id_user', 'id');
    }

    //ambil data id mst_restaurant_details
    public function restaurant_detail()
    {
        return $this->belongsTo(ModelRestaurantDetails::class, 'id_kategori_restaurant', 'id');
    }
}
