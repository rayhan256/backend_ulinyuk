<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDestinationDetails extends Model
{
    protected $table = 'mst_destination_details';

    protected $fillable = [
        'id_kategori_objek_wisata', 'kategori_objek_wisata', 'harga_tiket'
    ];

    //relasi agar bisa di ambil oleh mst_destinations
    public function destination()
    {
        return $this->hasMany(ModelDestinations::class, 'id_kategori_objek_wisata', 'id');
    }
}
