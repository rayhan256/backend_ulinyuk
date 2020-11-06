<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDestinations extends Model
{
    protected $table = 'mst_destinations';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_objek_wisata', 'area_objek_wisata', 'telepon_objek_wisata', 'alamat_objek_wisata'
    ];


    //relasi agar bisa di ambil oleh mst_destination_details
    public function destination_detail()
    {
        return $this->hasOne(ModelDestinationDetails::class, 'id_objek_wisata', 'id');
    }

    //relasi agar data bisa diambil oleh mst_galeri_destinations
    public function galeri_destination()
    {
        return $this->hasMany(ModelGaleriDestinations::class, 'id_objek_wisata', 'id');
    }

    //relasi agar data bisa diambil oleh mst_review_destinations
    public function review_destination()
    {
        return $this->hasMany(ModelReviewDestinations::class, 'id_objek_wisata', 'id');
    }
}
