<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table ='Proveedor';
    protected $primaryKey='proveedor_id';
	protected $fillable = [
	  'proveedor_id','nombre_proveedor'
	];
}
