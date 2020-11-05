<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstDestinationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_destination_details', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->unsignedBigInteger('id_objek_wisata'); // fk ke table mst_destinations
            $table->string('kategori_objek_wisata');
            $table->string('jadwal_objek_wisata');
            $table->text('wahana_objek_wisata');
            $table->text('fasilitas_objek_wisata');
            $table->text('deskripsi_objek_wisata');
            $table->integer('harga_tiket');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_objek_wisata')->references('id')->on('mst_destinations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mst_destination_details', function (Blueprint $table) {
            //
        });
    }
}
