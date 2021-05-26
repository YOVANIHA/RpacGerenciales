<?php

use Illuminate\Database\Seeder;
use App\Factura;
use App\Declaracion;
use App\Proveedor;
use App\Aduana;
class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factura = new Factura(); 
        $factura->declaracion_id = null;
        $factura->proveedor_id = 1;       
        $factura->total_factura = 200;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2020-07-02';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = 1;
        $factura->proveedor_id = 2;       
        $factura->total_factura = 150;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2020-07-27';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = null;
        $factura->proveedor_id = 3;       
        $factura->total_factura = 175;
        $factura->condiciones_pago = 'Credito';
        $factura->fecha_emision_factura = '2020-08-02';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = 2;
        $factura->proveedor_id = 4;       
        $factura->total_factura = 100;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2020-08-27';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = null;
        $factura->proveedor_id = 1;       
        $factura->total_factura = 200;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2020-09-02';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = 3;
        $factura->proveedor_id = 2;       
        $factura->total_factura = 150;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2020-09-27';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = null;
        $factura->proveedor_id = 3;       
        $factura->total_factura = 175;
        $factura->condiciones_pago = 'Credito';
        $factura->fecha_emision_factura = '2020-10-02';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = 4;
        $factura->proveedor_id = 4;       
        $factura->total_factura = 100;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2020-10-27';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = null;
        $factura->proveedor_id = 1;       
        $factura->total_factura = 200;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2020-11-02';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = 5;
        $factura->proveedor_id = 2;       
        $factura->total_factura = 150;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2020-11-27';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = null;
        $factura->proveedor_id = 3;       
        $factura->total_factura = 175;
        $factura->condiciones_pago = 'Credito';
        $factura->fecha_emision_factura = '2020-12-02';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = 6;
        $factura->proveedor_id = 4;       
        $factura->total_factura = 100;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2020-12-27';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = null;
        $factura->proveedor_id = 1;       
        $factura->total_factura = 200;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2021-01-02';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = 7;
        $factura->proveedor_id = 2;       
        $factura->total_factura = 150;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2021-01-27';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = null;
        $factura->proveedor_id = 3;       
        $factura->total_factura = 175;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2021-02-02';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = 8;
        $factura->proveedor_id = 4;       
        $factura->total_factura = 100;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2021-02-27';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = null;
        $factura->proveedor_id = 1;       
        $factura->total_factura = 200;
        $factura->condiciones_pago = 'Credito';
        $factura->fecha_emision_factura = '2021-03-02';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = 9;
        $factura->proveedor_id = 2;       
        $factura->total_factura = 150;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2021-03-27';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = null;
        $factura->proveedor_id = 3;       
        $factura->total_factura = 175;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2021-04-02';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = 10;
        $factura->proveedor_id = 4;       
        $factura->total_factura = 100;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2021-04-27';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = null;
        $factura->proveedor_id = 1;       
        $factura->total_factura = 200;
        $factura->condiciones_pago = 'Credito';
        $factura->fecha_emision_factura = '2021-05-02';
        $factura->save();

        $factura = new Factura(); 
        $factura->declaracion_id = 11;
        $factura->proveedor_id = 2;       
        $factura->total_factura = 150;
        $factura->condiciones_pago = 'Contado';
        $factura->fecha_emision_factura = '2021-05-27';
        $factura->save();

    }
}
