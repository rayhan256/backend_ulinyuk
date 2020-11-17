<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_berita');
            $table->date('tanggal_berita');
            $table->string('penerbit_berita');
            $table->text('deskripsi_berita');
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
        Schema::table('mst_news', function (Blueprint $table) {
            //
        });
    }
}
