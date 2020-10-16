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
        Schema::table('mst_restaurant_orders', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->integer('id_booking_restaurant');
            $table->unsignedBigInteger('id_customer'); //fk mst_customers
            $table->unsignedBigInteger('id_kategori_restaurant'); //fk mst_restaurant_details
            $table->unsignedBigInteger('id_restaurant');
            $table->integer('jumlah_orang');
            $table->date('tanggal_booking');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_customer')->references('id')->on('mst_customers');
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