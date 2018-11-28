<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaldoAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saldo_admins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('saldo_awal');
            $table->integer('kredit')->default(0);
            $table->integer('debit')->default(0);
            $table->integer('saldo_akhir');
            $table->text('keterangan');
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
        Schema::dropIfExists('saldo_admins');
    }
}
