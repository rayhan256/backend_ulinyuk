<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstHistoriBookingDestinations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_histori_booking_destinations', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->unsignedBigInteger('id_booking_tiket'); //fk mst_destination_orders
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_kategori_objek_wisata');
            $table->unsignedBigInteger('id_objek_wisata');
            $table->date('tanggal_booking_tiket');
            $table->integer('jumlah_booking_tiket');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_booking_tiket')->references('id')->on('mst_destination_orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mst_histori_booking_destinations', function (Blueprint $table) {
            //
        });
    }
}
