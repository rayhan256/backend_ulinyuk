<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstRestaurantDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_restaurant_details', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->unsignedBigInteger('id_restaurant'); //fk ke table mst_restaurants
            $table->string('kategori_restaurant');
            $table->string('jadwal_restaurant');
            $table->text('fasilitas_restaurant');
            $table->text('deskripsi_restaurant');
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
        Schema::table('mst_restaurant_details', function (Blueprint $table) {
            //
        });
    }
}
