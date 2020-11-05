<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDestinationDetails extends Model
{
    protected $table = 'mst_destination_details';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_objek_wisata', 'kategori_objek_wisata', 'jadwal_objek_wisata', 'wahana_objek_wisata', 'fasilitas_objek_wisata', 'deskripsi_objek_wisata', 'harga_tiket'
    ];

    //relasi agar data bisa diambil oleh mst_destination_orders
    public function destination_order()
    {
        return $this->hasMany(ModelDestinationOrders::class, 'id_kategori_objek_wisata', 'id');
    }

    //ambil data id mst_destination
    public function destination()
    {
        return $this->belongsTo(ModelDestinations::class, 'id_objek_wisata', 'id');
    }
}
