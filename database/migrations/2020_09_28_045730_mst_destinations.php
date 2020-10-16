<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstDestinations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_destinations', function (Blueprint $table) {
            $table->bigIncrements('id'); //primary key
            $table->integer('id_objek_wisata');
            $table->unsignedBigInteger('id_kategori_objek_wisata'); //fk ke mst_destination_details
            $table->string('nama_objek_wisata');
            $table->string('area_objek_wisata');
            $table->string('telepon_objek_wisata');
            $table->string('alamat_objek_wisata');
            $table->string('jadwal_objek_wisata');
            $table->text('deskripsi_objek_wisata');
            $table->text('review_objek_wisata');
            $table->softDeletes();
            $table->timestamps();

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
        Schema::table('mst_destinations', function (Blueprint $table) {
            //
        });
    }
}
