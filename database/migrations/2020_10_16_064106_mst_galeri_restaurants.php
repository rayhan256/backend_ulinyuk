<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstGaleriRestaurants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mst_galeri_restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_galeri_restaurant');
            $table->unsignedBigInteger('id_restaurant'); //fk ke mst_restaurants
            $table->text('foto_restaurant');
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
        Schema::table('mst_galeri_restaurants', function (Blueprint $table) {
            //
        });
    }
}
