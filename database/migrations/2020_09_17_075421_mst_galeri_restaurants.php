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
        Schema::create('mst_galeri_restaurants', function (Blueprint $table) {
            //
            $table->bigIncrements('id'); //pk
            $table->integer('id_galeri_restaurant');
            $table->text('galeri_restaurant');
            $table->softDeletes();
            $table->timestamps();
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
