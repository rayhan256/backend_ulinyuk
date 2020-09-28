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
            $table->integer('id_pembayaran');
            $table->unsignedBigInteger('id_customer'); //fk mst_customers
            $table->string('foto_bukti_pembayaran');
            $table->string('via_bank');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_customer')->references('id')->on('mst_customers');
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
