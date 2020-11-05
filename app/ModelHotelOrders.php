<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHotelOrders extends Model
{
    protected $table = 'mst_hotel_orders';

    protected $fillable = [
        'id_user', 'id_hotel', 'id_kategori_kamar_hotel', 'harga_kamar_hotel', 'jumlah_booking_kamar', 'tanggal_checkin', 'tanggal_checkout', 'total_bayar'
    ];

    //relasi agar bisa di ambil oleh mst_histori_booking_hotels
    public function histori_booking_hotel()
    {
        return $this->hasMany(ModelHotelOrders::class, 'id_booking_kamar', 'id');
    }

    //ambil data id users
    public function user()
    {
        return $this->belongsTo(User::class,  'id_user', 'id');
    }

    //ambil data id mst_hotel_details
    public function hotel_detail()
    {
        return $this->belongsTo(ModelHotelDetails::class, 'id_kategori_kamar_hotel', 'id');
    }
}
