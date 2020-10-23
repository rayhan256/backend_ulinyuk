<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDestinationOrders extends Model
{
    protected $table = 'mst_destination_orders';

    protected $fillable = [
        'id_booking_tiket', 'id_user', 'id_kategori_objek_wisata', 'id_objek_wisata', 'tanggal_booking_tiket', 'harga_tiket', 'jumlah_booking_tiket', 'total_bayar'
    ];

    //relasi agar bisa di ambil oleh mst_histori_booking_destinations
    public function histori_booking_destination()
    {
        return $this->hasMany(ModelHotelOrders::class, 'id_booking_tiket', 'id');
    }

    //ambil data id users
    public function user()
    {
        return $this->hasMany(User::class,  'id_user', 'id');
    }

    //ambil data id mst_destination_details
    public function destination_detail()
    {
        return $this->hasMany(ModelDestinationDetails::class, 'id_kategori_objek_wisata', 'id');
    }
}
