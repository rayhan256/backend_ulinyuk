<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstRestaurants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_restaurants', function (Blueprint $table) {
            $table->bigIncrements('id'); //primary key
            $table->integer('id_restaurant');
            $table->unsignedBigInteger('id_kategori_restaurant'); //fk ke mst_restaurant_details
            $table->string('nama_restaurant');
            $table->string('area_restaurant');
            $table->string('telepon_restaurant');
            $table->string('alamat_restaurant');
            $table->string('jadwal_restaurant');
            $table->text('deskripsi_restaurant');
            $table->text('review_restaurant');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_kategori_restaurant')->references('id')->on('mst_restaurant_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mst_restaurants', function (Blueprint $table) {
            //
        });
    }
}
