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
            //
            $table->id(); //pk
            $table->integer("kode_booking_restaurant");
            $table->unsignedBigInteger("id_customer")->nullable(); //fk mst_customer
            $table->unsignedBigInteger("id_restaurant")->nullable(); //fk mst_restaurant
            $table->unsignedBigInteger("id_kategori_restaurant")->nullable(); //fk mst_restaurant_orders
            $table->date("tanggal_booking");
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
        Schema::table('mst_restaurant_orders', function (Blueprint $table) {
            //
        });
    }
}
