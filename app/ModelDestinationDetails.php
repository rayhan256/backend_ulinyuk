<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDestinationDetails extends Model
{
    protected $fillable = [
        'id_kategori_objek_wisata', 'kategori_objek_wisata', 'harga_tiket'
    ];

    //relasi agar bisa di ambil oleh mst_destination_orders
    public function destination_order()
    {
        return $this->hasMany(ModelDestinationOrders::class, 'id_kategori_objek_wisata', 'id');
    }

    /*relasi agar bisa di ambil oleh mst_histori_booking_destinations
    public function histori_booking_destination()
    {
        return $this->hasMany(ModelDestinationOrders::class, 'id_kategori_objek_wisata', 'id');
    }*/
}
