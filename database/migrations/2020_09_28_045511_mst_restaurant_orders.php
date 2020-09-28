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
            $table->integer('id_booking_restaurant');
            $table->unsignedBigInteger('id_customer'); //fk mst_customers
            $table->unsignedBigInteger('id_restaurant'); //fk mst_restaurants
            $table->unsignedBigInteger('id_kategori_restaurant');
            $table->date('tanggal_booking');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_customer')->references('id')->on('mst_customers');
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
        Schema::table('mst_restaurant_orders', function (Blueprint $table) {
            //
        });
    }
}
