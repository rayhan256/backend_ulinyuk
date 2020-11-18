<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHotels extends Model
{
    protected $table = 'mst_hotels';

    protected $fillable = [
        'nama_hotel', 'kategori_hotel', 'area_hotel', 'telepon_hotel', 'alamat_hotel'
    ];

    //relasi agar bisa di ambil oleh mst_hotel_details
    public function hotel_detail()
    {
        return $this->hasMany(ModelHotelDetails::class, 'id_hotel', 'id');
    }

    //relasi agar data bisa diambil oleh mst_galeri_hotels
    public function galeri_hotel()
    {
        return $this->hasMany(ModelGaleriHotels::class, 'id_hotel', 'id');
    }

    //relasi agar data bisa diambil oleh mst_review_hotels
    public function review_hotel()
    {
        return $this->hasMany(ModelReviewHotels::class, 'id_hotel', 'id');
    }
}
