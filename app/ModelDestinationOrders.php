<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDestinationOrders extends Model
{
    protected $fillable = [
        'kode_booking_tiket', 'id_customer', 'id_objek_wisata', 'id_kategori_objek_wisata', 'tanggal_booking_tiket', 'harga_tiket', 'jumlah_booking_tiket', 'total_bayar'
    ];

    public function customer()
    {
        return $this->hasMany(ModelCustomers::class,  'id_customer', 'id');
    }

    public function destination()
    {
        return $this->hasMany(ModelDestinations::class, 'id_objek_wisata', 'id');
    }

    public function destinationtdetail()
    {
        return $this->hasMany(ModelDestinationDetails::class, 'id_kategori_objek_wisata', 'id');
    }
}
