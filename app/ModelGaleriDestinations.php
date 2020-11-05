<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelGaleriDestinations extends Model
{
    protected $table = 'mst_galeri_destinations';

    protected $fillable = [
        'id_objek_wisata', 'foto_objek_wisata'
    ];

    public function getImage()
    {
        if (!$this->foto_objek_wisata) {
            return asset('galeri/default.jpg');
        }

        return asset('galeri/' . $this->foto_objek_wisata);
    }


    //ambil data id mst_destinations
    public function destination()
    {
        return $this->belongsTo(ModelDestinations::class, 'id_objek_wisata', 'id');
    }

    //ambil data id mst_destination_details
    public function destination_detail()
    {
        return $this->belongsTo(ModelDestinationDetails::class, 'id_objek_wisata', 'id');
    }
}
