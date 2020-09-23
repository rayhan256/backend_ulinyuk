<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHotelOrders extends Model
{

    protected $fillable = [
        'id_booking_kamar', 'id_customer', 'id_hotel', 'id_kategori_kamar_hotel', 'harga_kamar_hotel', 'jumlah_booking_kamar', 'tanggal_checkin', 'tanggal_checkout', 'total_bayar'
    ];

    //relasi agar bisa di ambil oleh mst_histori_booking_hotels
    public function histori_booking_hotel()
    {
        return $this->hasMany(ModelHotelOrders::class, 'id_booking_kamar', 'id');
    }

    //ambil data id mst_customers
    public function customer()
    {
        return $this->hasMany(ModelCustomers::class,  'id_customer', 'id');
    }

    //ambil data id mst_hotels
    public function hotel()
    {
        return $this->hasMany(ModelHotels::class, 'id_hotel', 'id');
    }

    //ambil data id mst_hotel_details
    public function hotel_detail()
    {
        return $this->hasMany(ModelHotelDetails::class, 'id_kategori_kamar_hotel', 'id');
    }
}
