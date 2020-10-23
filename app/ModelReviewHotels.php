<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelReviewHotels extends Model
{
    protected $table = 'mst_review_hotels';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_hotel', 'review_hotel', 'rating_hotel'
    ];

    //ambil data id mst_hotels
    public function hotel()
    {
        return $this->hasMany(ModelHotels::class, 'id_hotel', 'id');
    }
}
