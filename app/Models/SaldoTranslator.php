<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaldoTranslator extends Model
{
    protected $fillable = [
    	'id_translator','id_finance','saldo_awal','kredit','debit','saldo_akhir','keterangan'
    ];
}
