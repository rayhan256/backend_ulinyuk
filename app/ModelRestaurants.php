<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRestaurants extends Model
{
    protected $table = 'mst_restaurants';

    protected $fillable = [
        'id_restaurant', 'nama_restaurant', 'area_restaurant', 'telepon_restaurant', 'alamat_restaurant', 'review_restaurant'
    ];

    //relasi agar data bisa diambil oleh mst_restaurant_details
    public function restaurant_detail()
    {
        return $this->hasMany(ModelRestaurantDetails::class, 'id_restaurant', 'id');
    }

    //relasi agar data bisa diambil oleh mst_galeri_restaurants
    public function galeri_restaurant()
    {
        return $this->hasMany(ModelGaleriRestaurants::class, 'id_restaurant', 'id');
    }
}
