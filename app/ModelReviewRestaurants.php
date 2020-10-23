<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelReviewRestaurants extends Model
{
    protected $table = 'mst_review_restaurants';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_restaurant', 'review_restaurant', 'rating_restaurant'
    ];

    //ambil data id mst_restaurants
    public function restaurant()
    {
        return $this->hasMany(ModelRestaurants::class, 'id_restaurant', 'id');
    }
}
