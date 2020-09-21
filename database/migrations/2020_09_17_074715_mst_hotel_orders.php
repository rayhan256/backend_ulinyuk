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
            //
            $table->bigIncrements('id'); //primary key            
            $table->integer('kode_booking_kamar');
            $table->unsignedBigInteger('id_customer')->nullable; //foreign key ke mst_customers
            $table->unsignedBigInteger('id_hotel')->nullable; //foreign key ke mst_hotels
            $table->unsignedBigInteger('id_kategori_kamar_hotel')->nullable; //foreign key ke mst_hotel_details
            $table->integer('harga_kamar_hotel'); //join ke mst_hotel_details
            $table->integer('jumlah_booking_kamar');
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->integer('total_bayar');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_customer')->references('id')->on('mst_customers');
            $table->foreign('id_hotel')->references('id')->on('mst_hotels');
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
