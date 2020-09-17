<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstGaleriHotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_galeri_hotels', function (Blueprint $table) {
            //
            $table->id(); //pk
            $table->integer("id_galeri_hotel");
            $table->string("galeri_hotel");
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
        Schema::table('mst_galeri_hotels', function (Blueprint $table) {
            //
        });
    }
}
