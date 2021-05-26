<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMateriaPrima extends Model
{
    protected $table ='Tipo_materia_prima';
    protected $primaryKey='tipo_materia_prima_id';
	protected $fillable = [
	  'tipo_materia_prima_id','nombre_tipo_materia_prima'
	];
}
