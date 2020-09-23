<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDestinations extends Model
{

    protected $fillable = [
        'id_objek_wisata', 'nama_objek_wisata', 'kategori_objek_wisata', 'area_objek_wisata', 'telepon_objek_wisata', 'alamat_objek_wisata', 'jadwal_objek_wisata', 'harga_tiket', 'review_objek_wisata',
    ];

    //relasi agar data dapa diambil oleh mst_destination_orders
    public function destination_order()
    {
        return $this->hasMany(ModelDestinationOrders::class, 'id_objek_wisata', 'id');
    }

    /*relasi agar data dapa diambil oleh mst_hitsori_booking_destinations
    public function histori_booking_destination()
    {
        return $this->hasMany(ModelDestinationOrders::class, 'id_kategori_objek_wisata', 'id');
    }*/
}
