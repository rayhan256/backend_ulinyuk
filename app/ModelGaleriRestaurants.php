<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelGaleriRestaurants extends Model
{
    protected $table = 'mst_galeri_restaurants';

    protected $fillable = [
        'id_galeri_restaurant', 'id_restaurant', 'foto_restaurant'
    ];

    //ambil data id mst_restaurants
    public function restaurant()
    {
        return $this->belongsTo(ModelRestaurants::class, 'id_restaurant', 'id');
    }
}
