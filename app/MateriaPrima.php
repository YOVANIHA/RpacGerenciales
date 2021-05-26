<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
    protected $table ='Materia_prima';
    protected $primaryKey='tipo_materia_prima_id';
	protected $fillable = [
        'materia_prima_id','tipo_materia_prima_id','nombre_materia_prima','existencias'
	];
}
