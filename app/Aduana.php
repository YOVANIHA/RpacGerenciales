<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aduana extends Model
{
    protected $table ='Aduana';
    protected $primaryKey='aduana_id';
	protected $fillable = [
	  'aduana_id','nombre_aduana','codigo_aduana'
	];

}
