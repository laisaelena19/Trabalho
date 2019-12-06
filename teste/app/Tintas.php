<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tintas extends Model
{
    protected $fillable = [
    	'marca',
    	'cor',
    	'tipo',
    	'preço',
    	'validade'
    ];
}
