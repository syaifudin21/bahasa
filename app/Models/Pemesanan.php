<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = [
    	'id_customer','id_translator','id_finance','id_kategori','file_permintaan','file_selesai','jumlah_kata','tagihan','waktu_pesan','waktu_konfirmasi_pembayaran','waktu_konfirmasi_translator','waktu_selesai','status'
    ];
}
