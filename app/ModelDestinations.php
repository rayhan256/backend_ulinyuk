<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDestinations extends Model
{

    protected $fillable = [
        'id_objek_wisata', 'nama_objek_wisata', 'kategori_objek_wisata', 'area_objek_wisata', 'telepon_objek_wisata', 'alamat_objek_wisata', 'jadwal_objek_wisata', 'harga_tiket', 'review_objek_wisata',
    ];

    public function destinationtorders()
    {
        return $this->hasMany(ModelDestinationOrders::class, 'id_kategori_objek_wisata', 'id');
    }
}
