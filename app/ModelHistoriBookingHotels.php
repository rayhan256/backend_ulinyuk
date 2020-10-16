<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHistoriBookingHotels extends Model
{
    protected $table = 'mst_histori_booking_hotels';

    protected $fillable = [
        'id_booking_kamar', 'id_kategori_kamar_hotel', 'id_hotel', 'jumlah_booking_kamar', 'tanggal_checkin', 'tanggal_checkout', 'lama_inap', 'total_bayar'
    ];

    //ambil data id mst_hotel_orders
    public function hotel_order()
    {
        return $this->hasMany(ModelHotelOrders::class, 'id_booking_kamar', 'id');
    }
}
