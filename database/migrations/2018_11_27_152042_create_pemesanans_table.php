<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_customer');
            $table->integer('id_translator')->nullable();
            $table->integer('id_finance')->nullable();
            $table->integer('id_kategori');
            $table->text('file_permintaan');
            $table->text('file_selesai')->nullable();
            $table->integer('jumlah_kata');
            $table->integer('tagihan');
            $table->timestamp('waktu_pesan');
            $table->timestamp('waktu_konfirmasi_pembayaran')->nullable();
            $table->timestamp('waktu_konfirmasi_translator')->nullable();
            $table->timestamp('waktu_selesai')->nullable();
            $table->enum('status',['Pesan','Konfirmasi Pembayaran','Konfirmasi Translator', 'Selesai'])->default('Pesan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
}
