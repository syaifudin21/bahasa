<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaldoTranslatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saldo_translators', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_translator');
            $table->integer('id_finance');
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
        Schema::dropIfExists('saldo_translators');
    }
}
