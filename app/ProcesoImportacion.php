<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcesoImportacion extends Model
{
    protected $table ='Proceso_importacion';
    protected $primaryKey='proceso_importacion_id';
	protected $fillable = [
	  'proceso_importacion_id','fecha_ingreso_pedido','fecha_estimada_llegada','nombre_importacion'
	];
}
