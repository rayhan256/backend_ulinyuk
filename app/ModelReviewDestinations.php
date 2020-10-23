<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelReviewDestinations extends Model
{
    protected $table = 'mst_review_destinations';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_objek_wisata', 'review_objek_wisata', 'rating_objek_wisata'
    ];

    //ambil data id mst_destination
    public function destination()
    {
        return $this->hasMany(ModelDestinations::class, 'id_objek_wisata', 'id');
    }
}
