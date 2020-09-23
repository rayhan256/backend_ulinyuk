<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstGaleriDestinations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_galeri_destinations', function (Blueprint $table) {
            //
            $table->bigIncrements('id'); //pk
            $table->integer('id_galeri_objek_wisata');
            $table->string('galeri_objek_wisata');
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
        Schema::create('mst_galeri_destinations', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->integer('id_galeri_objek_wisata');
            $table->integer('id_objek_wisata'); // fk ke mst_destination
            $table->text('gambar_objek_wisata');
            $table->softDeletes();
            $table->timestamps();
        });
    }
}
