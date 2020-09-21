<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_customers', function (Blueprint $table) {
            //
            $table->bigIncrements('id'); // primary key
            $table->integer('id_customer');
            $table->string('nama_customer');
            $table->date('tanggal_lahir_customer');
            $table->string('jenis_kelamin_customer');
            $table->string('alamat_customer');
            $table->string('kota_customer');
            $table->string('negara_customer');
            $table->string('telepon_customer');
            $table->string('email_customer');
            $table->string('foto_customer');
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
        Schema::table('mst_customers', function (Blueprint $table) {
            //
        });
    }
}
