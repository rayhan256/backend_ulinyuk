<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKomentarNews extends Model
{
    protected $table = 'mst_komentar_news';

    protected $fillable = [
        'id_berita', 'komentar_berita',
    ];

    //ambil data id mst_news
    public function news()
    {
        return $this->belongsTo(ModelNews::class, 'id_berita', 'id');
    }
}
