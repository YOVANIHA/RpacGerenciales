<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacturaMateriaPrima extends Model
{
    protected $table ='Factura_materia_prima';
    protected $primaryKey='factura_materia_prima_id';
	protected $fillable = [
        'factura_materia_prima_id','factura_id','materia_prima_id','total_materia_prima'
	];
}
