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
            $table->bigIncrements('id'); //pk
            $table->integer('id_galeri_objek_wisata');
            $table->unsignedBigInteger('id_objek_wisata'); //fk mst_destinations
            $table->text('foto_objek_wisata');
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
        Schema::table('mst_galeri_destinations', function (Blueprint $table) {
            //
        });
    }
}
