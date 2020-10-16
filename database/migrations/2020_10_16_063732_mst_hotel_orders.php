<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstHotelOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mst_hotel_orders', function (Blueprint $table) {
            $table->bigIncrements('id'); //primary key            
            $table->integer('id_booking_kamar');
            $table->unsignedBigInteger('id_customer'); //foreign key ke mst_customers
            $table->unsignedBigInteger('id_kategori_kamar_hotel'); //foreign key ke mst_hotel_details
            $table->unsignedBigInteger('id_hotel');
            $table->integer('harga_kamar_hotel');
            $table->integer('jumlah_booking_kamar');
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->integer('total_bayar');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_customer')->references('id')->on('mst_customers');
            $table->foreign('id_kategori_kamar_hotel')->references('id')->on('mst_hotel_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mst_hotel_orders', function (Blueprint $table) {
            //
        });
    }
}