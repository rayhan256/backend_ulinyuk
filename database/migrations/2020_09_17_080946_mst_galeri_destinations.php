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
            $table->id(); //pk
            $table->integer("id_galeri_objek_wisata");
            $table->string("galeri_objek_wisata");
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
        Schema::table('mst_galeri_destinations', function (Blueprint $table) {
            //
        });
    }
}
