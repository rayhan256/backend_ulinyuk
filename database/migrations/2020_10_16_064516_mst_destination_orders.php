<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstDestinationOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_destination_orders', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->integer('id_booking_tiket');
            $table->unsignedBigInteger('id_user'); //fk users
            $table->unsignedBigInteger('id_kategori_objek_wisata'); //fk mst_destination_details
            $table->unsignedBigInteger('id_objek_wisata');
            $table->date('tanggal_booking_tiket');
            $table->integer('harga_tiket');
            $table->integer('jumlah_booking_tiket');
            $table->integer('total_bayar');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_kategori_objek_wisata')->references('id')->on('mst_destination_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mst_destination_orders', function (Blueprint $table) {
            //
        });
    }
}
