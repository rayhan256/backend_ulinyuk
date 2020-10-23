<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstHotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_hotels', function (Blueprint $table) {
            $table->bigIncrements('id'); // primary key
            $table->integer('id_hotel');
            $table->string('nama_hotel');
            $table->string('kategori_hotel');
            $table->string('area_hotel');
            $table->string('telepon_hotel');
            $table->string('alamat_hotel');
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
        Schema::table('mst_hotels', function (Blueprint $table) {
            //
        });
    }
}
