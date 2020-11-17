<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstGaleriNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_galeri_news', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->unsignedBigInteger('id_berita'); //fk mst_news
            $table->text('foto_berita');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_berita')->references('id')->on('mst_news');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mst_galeri_news', function (Blueprint $table) {
            //
        });
    }
}
