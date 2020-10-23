<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstReviewDestinations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_review_destinations', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->unsignedBigInteger('id_objek_wisata'); //fk
            $table->text('review_objek_wisata');
            $table->integer('rating_objek_wisata');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_objek_wisata')->references('id')->on('mst_destinations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mst_review_destinations', function (Blueprint $table) {
            //
        });
    }
}
