<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHotelOrders extends Model
{

    protected $fillable = [
        'kode_booking_kamar', 'id_customer', 'id_hotel', 'id_kategori_kamar_hotel', 'harga_kamar_hotel', 'jumlah_booking_kamar', 'tanggal_checkin', 'tanggal_checkout', 'total_bayar'
    ];

    public function customer()
    {
        return $this->hasMany(ModelCustomers::class,  'id_customer', 'id');
    }

    public function hotel()
    {
        return $this->hasMany(ModelHotels::class, 'id_hotel', 'id');
    }

    public function hoteldetail()
    {
        return $this->hasMany(ModelHotelDetails::class, 'id_kategori_kamar_hotel', 'id');
    }
}
