<?php

use Illuminate\Database\Seeder;
use App\Proveedor;
use App\OrdenDeCompra;

class OrdenDeCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 1;      
        $ordenDeCompra->total_orden = 200;
        $ordenDeCompra->fecha_emision_orden = '2020-07-01';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 2;      
        $ordenDeCompra->total_orden = 150;
        $ordenDeCompra->fecha_emision_orden = '2020-07-15';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 3;     
        $ordenDeCompra->total_orden = 175;
        $ordenDeCompra->fecha_emision_orden = '2020-08-01';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 4;     
        $ordenDeCompra->total_orden = 100;
        $ordenDeCompra->fecha_emision_orden = '2020-08-15';
        $ordenDeCompra->save();
    
        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 1;
        $ordenDeCompra->total_orden = 200;
        $ordenDeCompra->fecha_emision_orden = '2020-09-01';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 2;
        $ordenDeCompra->total_orden = 150;
        $ordenDeCompra->fecha_emision_orden = '2020-09-15';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 3;      
        $ordenDeCompra->total_orden = 175;
        $ordenDeCompra->fecha_emision_orden = '2020-10-01';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 4;     
        $ordenDeCompra->total_orden = 100;
        $ordenDeCompra->fecha_emision_orden = '2020-10-15';
        $ordenDeCompra->save();
    
        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 1;
        $ordenDeCompra->total_orden = 200;
        $ordenDeCompra->fecha_emision_orden = '2020-11-01';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 2;
        $ordenDeCompra->total_orden = 150;
        $ordenDeCompra->fecha_emision_orden = '2020-11-15';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 3;
        $ordenDeCompra->total_orden = 175;
        $ordenDeCompra->fecha_emision_orden = '2020-12-01';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 4;
        $ordenDeCompra->total_orden = 100;
        $ordenDeCompra->fecha_emision_orden = '2020-12-15';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 1;
        $ordenDeCompra->total_orden = 200;
        $ordenDeCompra->fecha_emision_orden = '2021-01-01';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 2;
        $ordenDeCompra->total_orden = 150;
        $ordenDeCompra->fecha_emision_orden = '2021-01-15';
        $ordenDeCompra->save();
        
        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 3;
        $ordenDeCompra->total_orden = 175;
        $ordenDeCompra->fecha_emision_orden = '2021-02-01';
        $ordenDeCompra->save();
       
        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 4;
        $ordenDeCompra->total_orden = 100;
        $ordenDeCompra->fecha_emision_orden = '2021-02-15';
        $ordenDeCompra->save();
       
        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 1;
        $ordenDeCompra->total_orden = 200;
        $ordenDeCompra->fecha_emision_orden = '2021-03-01';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 2;
        $ordenDeCompra->total_orden = 150;
        $ordenDeCompra->fecha_emision_orden = '2021-03-15';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 3;
        $ordenDeCompra->total_orden = 175;
        $ordenDeCompra->fecha_emision_orden = '2021-04-01';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 4;
        $ordenDeCompra->total_orden = 100;
        $ordenDeCompra->fecha_emision_orden = '2021-04-15';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 1;
        $ordenDeCompra->total_orden = 200;
        $ordenDeCompra->fecha_emision_orden = '2021-05-01';
        $ordenDeCompra->save();

        $ordenDeCompra = new OrdenDeCompra();
        $ordenDeCompra->proveedor_id = 2;
        $ordenDeCompra->total_orden = 150;
        $ordenDeCompra->fecha_emision_orden = '2021-05-15';
        $ordenDeCompra->save();
    }
}
