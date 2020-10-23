<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstReviewHotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_review_hotels', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->unsignedBigInteger('id_hotel'); //fk
            $table->text('review_hotel');
            $table->integer('rating_hotel');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_hotel')->references('id')->on('mst_hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mst_review_hotels', function (Blueprint $table) {
            //
        });
    }
}
