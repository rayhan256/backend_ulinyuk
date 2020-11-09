<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelGaleriHotels extends Model
{
    protected $table = 'mst_galeri_hotels';

    protected $fillable = [
        'id_hotel', 'foto_hotel'
    ];

    public function getImage()
    {
        if (!$this->foto_hotel) {
            return asset('galeri/default.jpg');
        }

        return asset('galeri/' . $this->foto_hotel);
    }

    //ambil data id mst_hotels
    public function hotel()
    {
        return $this->belongsTo(ModelHotels::class, 'id_hotel', 'id');
    }
}
