<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Declaracion extends Model
{
    protected $table ='Declaracion';
    protected $primaryKey='declaracion_id';
	protected $fillable = [
	  'declaracion_id','aduana_id','proceso_importacion_id','pago_impuestos'
	];
}
