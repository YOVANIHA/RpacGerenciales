<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table ='Factura';
    protected $primaryKey='factura_id';
	protected $fillable = [
        'factura_id','declaracion_id','proveedor_id','total_factura','condiciones_pago','fecha_emision_factura'
	];
    
}
