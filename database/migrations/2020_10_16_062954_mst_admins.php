<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_admins', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->string('nama_admin');
            $table->date('tanggal_lahir_admin');
            $table->string('jenis_kelamin_admin');
            $table->string('alamat_admin');
            $table->string('kota_admin');
            $table->string('telepon_admin');
            $table->string('email_admin');
            $table->string('foto_admin');
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
        Schema::table('mst_admins', function (Blueprint $table) {
            //
        });
    }
}
