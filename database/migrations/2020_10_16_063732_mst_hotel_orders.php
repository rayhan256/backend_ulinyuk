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
        Schema::create('mst_hotel_orders', function (Blueprint $table) {
            $table->bigIncrements('id'); //primary key
            $table->unsignedBigInteger('id_user'); //foreign key ke users
            $table->unsignedBigInteger('id_kategori_kamar_hotel'); //foreign key ke mst_hotel_details
            $table->unsignedBigInteger('id_hotel');
            $table->integer('harga_kamar_hotel');
            $table->integer('jumlah_booking_kamar');
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->integer('total_bayar');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
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
