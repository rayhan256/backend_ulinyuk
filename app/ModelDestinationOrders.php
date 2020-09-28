<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDestinationOrders extends Model
{
    protected $table = 'mst_destination_orders';

    protected $fillable = [
        'id_booking_tiket', 'id_customer', 'id_objek_wisata', 'id_kategori_objek_wisata', 'tanggal_booking_tiket', 'harga_tiket', 'jumlah_booking_tiket', 'total_bayar'
    ];

    //relasi agar bisa di ambil oleh mst_histori_booking_destinations
    public function histori_booking_destination()
    {
        return $this->hasMany(ModelHotelOrders::class, 'id_booking_tiket', 'id');
    }

    //ambil data id mst_customers
    public function customer()
    {
        return $this->hasMany(ModelCustomers::class,  'id_customer', 'id');
    }

    //ambil data id mst_destinations
    public function destination()
    {
        return $this->hasMany(ModelDestinations::class, 'id_objek_wisata', 'id');
    }
}
