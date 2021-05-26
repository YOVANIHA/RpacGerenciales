<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoTransporte extends Model
{
    protected $table ='Documento_transporte';
    protected $primaryKey='documento_transporte_id';
	protected $fillable = [
        'documento_transporte_id','declaracion_id','fecha_emision_doc','tipo_documento'
	];
}
