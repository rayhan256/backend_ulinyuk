<?php

namespace App;

use App\Http\Controllers\HotelOrders;
use Illuminate\Database\Eloquent\Model;

class ModelCustomers extends Model
{

    protected $fillable = [
        'id_customer', 'nama_customer', 'tanggal_lahir_customer', 'jenis_kelamin_customer', 'alamat_customer', 'kota_customer', 'negara_customer', 'telepon_customer', 'email_customer', 'foto_customer',
    ];

    //relasi agar bisa di ambil oleh mst_hotel_orders
    public function hotel_order()
    {
        return $this->belongsTo(ModelHotelOrders::class);
    }

    //relasi agar bisa di ambil oleh mst_destination_orders
    public function destination_order()
    {
        return $this->belongsTo(ModelHotelOrders::class);
    }

    //relasi agar bisa di ambil oleh mst_restaurant_orders
    public function restaurant_order()
    {
        return $this->belongsTo(ModelHotelOrders::class);
    }

    //relasi agar bisa di ambil oleh mst_payments
    public function payment()
    {
        return $this->belongsTo(ModelPayments::class);
    }
}
