<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoReporte extends Model
{
    protected $table ='Tipo_reporte';
    protected $primaryKey='tipo_reporte_id';
	protected $fillable = [
	  'tipo_reporte_id','codigo_tipo_reporte','descripcion'
	];
}
