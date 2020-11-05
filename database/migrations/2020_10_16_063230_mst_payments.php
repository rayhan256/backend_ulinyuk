<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user'); //fk users
            $table->string('foto_bukti_pembayaran');
            $table->string('pembayaran_via');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mst_payments', function (Blueprint $table) {
            //
        });
    }
}
