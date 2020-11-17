<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelNews extends Model
{
    protected $table = 'mst_news';

    protected $fillable = [
        'judul_berita', 'tanggal_berita', 'penerbit_berita', 'deskripsi_berita'
    ];

    //relasi agar data bisa diambil oleh mst_galeri_news
    public function galeri_berita()
    {
        return $this->hasMany(ModelNews::class, 'id_berita', 'id');
    }

    //relasi agar data bisa diambil oleh mst_galeri_news
    public function komentar_berita()
    {
        return $this->hasMany(ModelKomentarNews::class, 'id_berita', 'id');
    }
}
