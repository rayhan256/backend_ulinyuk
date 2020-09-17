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
            //
            $table->id(); //pk
            $table->integer("id_booking_tiket");
            $table->integer("id_objek_wisata")->nullable(); //fk mst_destinations
            $table->integer("id_customer")->nullable(); //fk mst_destinations
            $table->date("tanggal_booking_tiket");
            $table->integer("jumlah_booking_tiket");
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
        Schema::table('mst_histori_booking_destinations', function (Blueprint $table) {
            //
        });
    }
}
