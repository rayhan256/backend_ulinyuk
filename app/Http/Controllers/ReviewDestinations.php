<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelReviewDestinations;

class ReviewDestinations extends Controller
{
    //Ambil data dari model
    public function getAll()
    {
        $review = ModelReviewDestinations::with('destination')->get();
        return $review;
    }

    //Insert data
    public function insertData(Request $request)
    {
        $review = new ModelReviewDestinations();

        $review->id_objek_wisata = $request->id_objek_wisata;
        $review->review_objek_wisata = $request->review_objek_wisata;
        $review->rating_objek_wisata = $request->rating_objek_wisata;

        $review->save();

        return "Data Berhasil Diinput!";
    }

    //Update data
    public function updateData(Request $request, $id)
    {
        $find_review_by_id = ModelReviewDestinations::find($id);

        $find_review_by_id->id_objek_wisata = $request->id_objek_wisata;
        $find_review_by_id->review_objek_wisata = $request->review_objek_wisata;
        $find_review_by_id->rating_objek_wisata = $request->rating_objek_wisata;

        $find_review_by_id->save();
        return "Data Berhasil Diedit!";
    }

    //Delete data
    public function deleteData($id)
    {
        $find_review_by_id = ModelReviewDestinations::find($id);
        $find_review_by_id->delete();

        return "Data Berhasil Dihapus!";
    }

    //get data by id
    public function getDataId($id)
    {
        $data_review = ModelReviewDestinations::find($id);
        return $data_review;
    }
}
