<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroBitacora extends Model
{
    protected $table ='Registro_bitacora';
    protected $primaryKey='registro_bitacora_id';
	protected $fillable = [
        'registro_bitacora_id','usuario_id','tipo_reporte_id','fecha','detalles'
	];
}
