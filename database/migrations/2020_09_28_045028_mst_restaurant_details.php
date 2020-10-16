<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstRestaurantDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_restaurant_details', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk            
            $table->integer('id_kategori_restaurant');
            $table->string('kategori_restaurant');
            $table->string('fasilitas_restaurant');
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
        Schema::table('mst_restaurant_details', function (Blueprint $table) {
            //
        });
    }
}
