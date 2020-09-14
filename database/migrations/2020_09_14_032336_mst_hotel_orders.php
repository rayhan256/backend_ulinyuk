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
            $table->id(); //primary key            
            $table->string("kode_booking_kamar");
            $table->unsignedBigInteger('id_customer')->nullable; //join ke mst_customers
            $table->unsignedBigInteger('id_hotel')->nullable; //join ke mst_hotels
            $table->string("kategori_kamar_hotel")->nullable; //join ke mst_hotels
            $table->unsignedBigInteger('harga_kamar_hotel')->nullable; //join ke mst_hotels
            $table->integer("jumlah_booking_kamar");
            $table->date("tanggal_checkin");
            $table->date("tanggal_checkout");
            $table->integer("total_bayar");

            $table->timestamps();

            $table->foreign('id_customer')->references('id')->on('mst_customers');
            $table->foreign('id_hotel')->references('id')->on('mst_hotels');
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
