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
            //
            $table->id(); //pk            
            $table->integer("id_kategori_objek_wisata");
            $table->string("kategori_objek_wisata");
            $table->integer("harga_tiket");
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
        Schema::table('mst_destination_details', function (Blueprint $table) {
            //
        });
    }
}
