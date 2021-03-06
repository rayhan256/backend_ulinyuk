<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstReviewRestaurants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_review_restaurants', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->unsignedBigInteger('id_restaurant'); //fk
            $table->text('review_restaurant');
            $table->integer('rating_restaurant');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_restaurant')->references('id')->on('mst_restaurants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mst_review_restaurants', function (Blueprint $table) {
            //
        });
    }
}
