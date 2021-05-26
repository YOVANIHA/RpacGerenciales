<?php

use Illuminate\Database\Seeder;
use App\Declaracion;
use App\Aduana;
use App\ProcesoImportacion;

class DeclaracionSeeder extends Seeder
{
    /**
     * Run the database seeds.

     */
    public function run()
    {
        $declaracion = new Declaracion();
        $declaracion->aduana_id = 1;
        $declaracion->proceso_importacion_id = 1;       
        $declaracion->pago_impuestos = true;
        $declaracion->save();

        $declaracion = new Declaracion();
        $declaracion->aduana_id = 2;
        $declaracion->proceso_importacion_id = 2;       
        $declaracion->pago_impuestos = true;
        $declaracion->save();

        $declaracion = new Declaracion();
        $declaracion->aduana_id = 1;
        $declaracion->proceso_importacion_id = 3;       
        $declaracion->pago_impuestos = true;
        $declaracion->save();

        $declaracion = new Declaracion();
        $declaracion->aduana_id = 2;
        $declaracion->proceso_importacion_id = 4;       
        $declaracion->pago_impuestos = true;
        $declaracion->save();

        $declaracion = new Declaracion();
        $declaracion->aduana_id = 1;
        $declaracion->proceso_importacion_id = 5;       
        $declaracion->pago_impuestos = true;
        $declaracion->save();

        $declaracion = new Declaracion();
        $declaracion->aduana_id = 2;
        $declaracion->proceso_importacion_id = 6;       
        $declaracion->pago_impuestos = true;
        $declaracion->save();

        $declaracion = new Declaracion();
        $declaracion->aduana_id = 1;
        $declaracion->proceso_importacion_id = 7;       
        $declaracion->pago_impuestos = true;
        $declaracion->save();

        $declaracion = new Declaracion();
        $declaracion->aduana_id = 2;
        $declaracion->proceso_importacion_id = 8;       
        $declaracion->pago_impuestos = true;
        $declaracion->save();

        $declaracion = new Declaracion();
        $declaracion->aduana_id = 1;
        $declaracion->proceso_importacion_id = 9;       
        $declaracion->pago_impuestos = true;
        $declaracion->save();

        $declaracion = new Declaracion();
        $declaracion->aduana_id = 2;
        $declaracion->proceso_importacion_id = 10;       
        $declaracion->pago_impuestos = false;
        $declaracion->save();

        $declaracion = new Declaracion();
        $declaracion->aduana_id = 1;
        $declaracion->proceso_importacion_id = 11;       
        $declaracion->pago_impuestos = false;
        $declaracion->save();

        $declaracion = new Declaracion();
        $declaracion->aduana_id = 2;
        $declaracion->proceso_importacion_id = 10;       
        $declaracion->pago_impuestos = false;
        $declaracion->save();
        
        $declaracion = new Declaracion();
        $declaracion->aduana_id = 1;
        $declaracion->proceso_importacion_id = 11;       
        $declaracion->pago_impuestos = false;
        $declaracion->save();    

        $declaracion = new Declaracion();
        $declaracion->aduana_id = 1;
        $declaracion->proceso_importacion_id = 11;       
        $declaracion->pago_impuestos = false;
        $declaracion->save();    
     
    }
}
