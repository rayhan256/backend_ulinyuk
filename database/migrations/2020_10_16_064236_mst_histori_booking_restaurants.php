<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstHistoriBookingRestaurants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mst_histori_booking_restaurants', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->unsignedBigInteger('id_booking_restaurant'); //fk mst_restaurant_orders
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_kategori_restaurant');
            $table->unsignedBigInteger('id_restaurant');
            $table->date('tanggal_booking_restaurant');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_booking_restaurant')->references('id')->on('mst_restaurant_orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mst_histori_booking_restaurants', function (Blueprint $table) {
            //
        });
    }
}
