<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHistoriBookingDestinations extends Model
{
    protected $table = 'mst_histori_booking_destinations';

    protected $fillable = [
        'id_booking_tiket', 'id_user', 'id_kategori_objek_wisata', 'id_objek_wisata', 'tanggal_booking_tiket', 'jumlah_booking_tiket'
    ];

    //ambil data id mst_destination_orders
    public function destination_order()
    {
        return $this->hasMany(ModelDestinationOrders::class, 'id_booking_tiket', 'id');
    }
}
