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
            //
            $table->id(); //primary key
            $table->integer("id_restaurant");
            $table->string("nama_restaurant");
            $table->string("area_restaurant");
            $table->string("telepon_restaurant");
            $table->string("alamat_restaurant");
            $table->string("jadwal_restaurant");
            $table->string("review_restaurant");
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
        Schema::table('mst_restaurants', function (Blueprint $table) {
            //
        });
    }
}
