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
            //
            $table->id(); //pk
            $table->integer("kode_booking_tiket");
            $table->unsignedBigInteger("id_customer")->nullable(); //fk mst_customer
            $table->unsignedBigInteger("id_objek_wisata")->nullable(); //fk mst_destinations
            $table->unsignedBigInteger("kategori_objek_wisata")->nullable(); //fk mst_destination_details
            $table->date("tanggal_booking_tiket");
            $table->integer("harga_tiket");
            $table->integer("jumlah_booking_tiket");
            $table->integer("total_bayar");
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
        Schema::table('mst_destination_orders', function (Blueprint $table) {
            //
        });
    }
}
