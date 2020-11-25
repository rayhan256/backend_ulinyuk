<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('nama_user')->nullable()->change();
            $table->date('tanggal_lahir_user')->nullable()->change();
            $table->string('jenis_kelamin_user')->nullable()->change();
            $table->string('alamat_user')->nullable()->change();
            $table->string('kota_user')->nullable()->change();
            $table->string('negara_user')->nullable()->change();
            $table->string('telepon_user')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
