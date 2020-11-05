<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstRestaurantOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_restaurant_orders', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->unsignedBigInteger('id_user'); //fk users
            $table->unsignedBigInteger('id_kategori_restaurant'); //fk mst_restaurant_details
            $table->unsignedBigInteger('id_restaurant');
            $table->integer('jumlah_orang');
            $table->date('tanggal_booking');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::table('mst_restaurant_orders', function (Blueprint $table) {
            //
        });
    }
}
