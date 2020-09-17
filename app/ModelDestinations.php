<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDestinations extends Model
{
    //
    protected $table = 'mst_destinations';
    protected $fillable = [
        'id_objek_wisata', 'nama_objek_wisata', 'kategori_objek_wisata', 'area_objek_wisata', 'telepon_objek_wisata', 'alamat_objek_wisata', 'jadwal_objek_wisata', 'harga_tiket', 'review_objek_wisata',
    ];
    protected $primaryKey = 'id';
}
