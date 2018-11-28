<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
    	'id_pemesanan','id_translator','id_customer','nilai','review'
    ];
}
