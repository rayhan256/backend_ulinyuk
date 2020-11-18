<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelGaleriNews extends Model
{
    protected $table = 'mst_galeri_news';

    protected $fillable = [
        'id_berita', 'foto_berita'
    ];

    public function getImage()
    {
        if (!$this->foto_berita) {
            return asset('galeri/default.jpg');
        }

        return asset('galeri/' . $this->foto_berita);
    }

    //ambil data id mst_news
    public function news()
    {
        return $this->belongsTo(ModelNews::class, 'id', 'id_berita');
    }
}
