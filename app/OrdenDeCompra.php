<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenDeCompra extends Model
{

    protected $table ='Orden_de_compra';
    protected $primaryKey='orden_de_compra_id';
	protected $fillable = [
        'orden_de_compra_id','proveedor_id','total_orden','fecha_emision_orden'
	];
    
}
