<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstHistoriBookingHotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_histori_booking_hotels', function (Blueprint $table) {
            //
            $table->bigIncrements('id'); //pk
            $table->integer('id_booking_kamar');
            $table->unsignedBigInteger('id_hotel')->nullable();
            $table->unsignedBigInteger('id_kategori_kamar_hotel')->nullable();
            $table->integer('jumlah_booking_kamar');
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->integer('lama_inap');
            $table->integer('total_bayar');
            $table->softDeletes();
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
        Schema::table('mst_histori_booking_hotels', function (Blueprint $table) {
            //
        });
    }
}
