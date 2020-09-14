<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHotelOrders extends Model
{
    //
    protected $table = 'mst_hotel_orders';
    protected $fillable = [
        'kode_booking_kamar', 'id_customer', 'id_hotel', 'kategori_kamar_hotel', 'harga_kamar_hotel', 'jumlah_booking_kamar', 'tanggal_checkin', 'tanggal_checkout', 'total_bayar',
    ];
    protected $primaryKey = 'id';

    public function Customer()
    {
        return $this->hasMany(ModelCustomers::class,  'id_customer');
    }

    public function Hotel()
    {
        return $this->hasMany(ModelHotels::class, 'id_hotel');
    }
}
