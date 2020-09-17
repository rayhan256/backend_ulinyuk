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
        Schema::create('mst_histori_booking_restaurants', function (Blueprint $table) {
            //
            $table->id(); //pk
            $table->unsignedBigInteger("id_booking_restaurant")->nullable(); //fk mst_restaurant_orders
            $table->unsignedBigInteger("id_restaurant")->nullable(); //fk mst_restaurant
            $table->unsignedBigInteger("id_customer")->nullable(); //fk mst_customers
            $table->date("tanggal_booking_restaurant");
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
        Schema::table('mst_histori_booking_restaurants', function (Blueprint $table) {
            //
        });
    }
}
