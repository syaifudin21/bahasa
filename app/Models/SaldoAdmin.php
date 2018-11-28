<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaldoAdmin extends Model
{
    protected $fillable = [
    	'saldo_awal','kredit','debit','saldo_akhir','keterangan'
    ];
}
