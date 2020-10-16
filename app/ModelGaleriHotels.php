<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelGaleriHotels extends Model
{
    protected $table = 'mst_galeri_hotels';

    protected $fillable = [
        'id_galeri_hotel', 'id_hotel', 'foto_hotel'
    ];

    //ambil data id mst_hotels
    public function hotel()
    {
        return $this->belongsTo(ModelHotels::class, 'id_hotel', 'id');
    }
}
