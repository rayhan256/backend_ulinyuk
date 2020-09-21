<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstHotelDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_hotel_details', function (Blueprint $table) {
            //
            $table->bigIncrements('id'); //pk            
            $table->integer('id_kategori_kamar_hotel');
            $table->string('kategori_kamar_hotel');
            $table->integer('harga_kamar_hotel');
            $table->string('fasilitas_kamar_hotel');
            $table->string('aminities_kamar_hotel');
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
        Schema::table('mst_hotel_details', function (Blueprint $table) {
            //
        });
    }
}
