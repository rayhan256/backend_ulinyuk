<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDestinations extends Model
{
    protected $table = 'mst_destinations';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_objek_wisata', 'id_kategori_objek_wisata', 'nama_objek_wisata', 'area_objek_wisata', 'telepon_objek_wisata', 'alamat_objek_wisata', 'jadwal_objek_wisata', 'deskripsi_objek_wisata', 'review_objek_wisata'
    ];

    //relasi agar data bisa diambil oleh mst_destination_orders
    public function destination_order()
    {
        return $this->hasMany(ModelDestinationOrders::class, 'id_objek_wisata', 'id');
    }


    //relasi agar data bisa diambil oleh mst_destination_orders
    public function galeri_destination()
    {
        return $this->hasMany(ModelGaleriDestinations::class, 'id_objek_wisata', 'id');
    }

    //ambil data id mst_destination_details
    public function destination_detail()
    {
        return $this->hasMany(ModelDestinationDetails::class, 'id_kategori_objek_wisata', 'id');
    }
}
