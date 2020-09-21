<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDestinationDetails extends Model
{
    protected $fillable = [
        'id_kategori_objek_wisata', 'kategori_objek_wisata', 'harga_tiket'
    ];

    public function destinationtorders()
    {
        return $this->hasMany(ModelDestinationOrders::class, 'id_kategori_objek_wisata', 'id');
    }
}
