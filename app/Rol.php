<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table ='Rol';
    protected $primaryKey='rol_id';
	protected $fillable = [
	  'rol_id','nombre_rol','descripcion'
	];

}
