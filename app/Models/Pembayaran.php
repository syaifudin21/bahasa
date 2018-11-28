<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = [
    	'id_customer','id_pemesanan','bank', 'status'
    ];
}
