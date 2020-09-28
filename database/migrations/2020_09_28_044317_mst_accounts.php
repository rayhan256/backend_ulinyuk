<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_accounts', function (Blueprint $table) {
            $table->bigIncrements('id'); //pk
            $table->string('username');
            $table->string('password');
            $table->enum('role', ['super_admin', 'admin', 'user']);
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
        Schema::table('mst_accounts', function (Blueprint $table) {
            //
        });
    }
}
