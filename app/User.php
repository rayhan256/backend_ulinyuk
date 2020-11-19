<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'nama_user', 'tanggal_lahir_user', 'jenis_kelamin_user', 'alamat_user', 'kota_user', 'negara_user', 'telepon_user', 'email', 'password', 'foto_user', 'role'
    ];

    //relasi agar bisa di ambil oleh mst_destination_orders
    public function destination_order()
    {
        return $this->belongsTo(ModelHotelOrders::class);
    }

    //relasi agar bisa di ambil oleh mst_hotel_orders
    public function hotel_order()
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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
