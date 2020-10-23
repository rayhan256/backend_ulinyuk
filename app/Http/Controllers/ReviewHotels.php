<?php

namespace App\Http\Controllers;

use App\ModelReviewHotels;
use Illuminate\Http\Request;

class ReviewHotels extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $review = ModelReviewHotels::with('hotel')->get();
        return $review;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $review = new ModelReviewHotels();

        $review->id_hotel = $request->id_hotel;
        $review->review_hotel = $request->review_hotel;
        $review->rating_hotel = $request->rating_hotel;

        $review->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        $find_review_by_id = ModelReviewHotels::find($id);

        $find_review_by_id->id_hotel = $request->id_hotel;
        $find_review_by_id->review_hotel = $request->review_hotel;
        $find_review_by_id->rating_hotel = $request->rating_hotel;

        $find_review_by_id->save();
        return "Data Berhasil Diedit!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_review_by_id = ModelReviewHotels::find($id);
        $find_review_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //get data by id
    public function getDataId($id)
    {
        $data_review = ModelReviewHotels::find($id);
        return $data_review;
    }
}
