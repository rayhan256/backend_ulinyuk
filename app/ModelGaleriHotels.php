<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelGaleriHotels extends Model
{
    protected $fillable = [
        'id_galeri_hotel', 'id_hotel', 'gambar_hotel'
    ];

    //ambil data id mst_hotels
    public function hotel()
    {
        return $this->belongsTo(ModelHotels::class, 'id_hotel', 'id');
    }
}
