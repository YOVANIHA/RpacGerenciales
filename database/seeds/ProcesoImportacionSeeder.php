<?php

use Illuminate\Database\Seeder;
use App\ProcesoImportacion;
class ProcesoImportacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $procesoImportacion = new ProcesoImportacion();
        $procesoImportacion->fecha_ingreso_pedido = '2020-07-17';
        $procesoImportacion->fecha_estimada_llegada = '2020-07-27';
        $procesoImportacion->nombre_importacion='Importación Julio 17/20';
        $procesoImportacion->save();

        $procesoImportacion = new ProcesoImportacion();
        $procesoImportacion->fecha_ingreso_pedido = '2020-08-16';
        $procesoImportacion->fecha_estimada_llegada = '2020-08-26';
        $procesoImportacion->nombre_importacion='Importación Agosto 16/20';
        $procesoImportacion->save();

        $procesoImportacion = new ProcesoImportacion();
        $procesoImportacion->fecha_ingreso_pedido = '2020-09-17';
        $procesoImportacion->fecha_estimada_llegada = '2020-09-25';
        $procesoImportacion->nombre_importacion='Importación Septiembre 17/20';
        $procesoImportacion->save();

        $procesoImportacion = new ProcesoImportacion();
        $procesoImportacion->fecha_ingreso_pedido = '2020-10-18';
        $procesoImportacion->fecha_estimada_llegada = '2020-10-27';
        $procesoImportacion->nombre_importacion='Importación Octubre 18/20';
        $procesoImportacion->save();

        $procesoImportacion = new ProcesoImportacion();
        $procesoImportacion->fecha_ingreso_pedido = '2020-11-16';
        $procesoImportacion->fecha_estimada_llegada = '2020-11-27';
        $procesoImportacion->nombre_importacion='Importación Noviembre 16/20';
        $procesoImportacion->save();

        $procesoImportacion = new ProcesoImportacion();
        $procesoImportacion->fecha_ingreso_pedido = '2020-12-17';
        $procesoImportacion->fecha_estimada_llegada = '2020-12-26';
        $procesoImportacion->nombre_importacion='Importación Diciembre 17/20';
        $procesoImportacion->save();

        $procesoImportacion = new ProcesoImportacion();
        $procesoImportacion->fecha_ingreso_pedido = '2021-01-17';
        $procesoImportacion->fecha_estimada_llegada = '2021-01-27';
        $procesoImportacion->nombre_importacion='Importación Enero 17/21';
        $procesoImportacion->save();

        $procesoImportacion = new ProcesoImportacion();
        $procesoImportacion->fecha_ingreso_pedido = '2021-02-18';
        $procesoImportacion->fecha_estimada_llegada = '2021-02-27';
        $procesoImportacion->nombre_importacion='Importación Febrero 18/21';
        $procesoImportacion->save();

        $procesoImportacion = new ProcesoImportacion();
        $procesoImportacion->fecha_ingreso_pedido = '2021-03-16';
        $procesoImportacion->fecha_estimada_llegada = '2021-03-26';
        $procesoImportacion->nombre_importacion='Importación Marzo 16/21';
        $procesoImportacion->save();

        $procesoImportacion = new ProcesoImportacion();
        $procesoImportacion->fecha_ingreso_pedido = '2021-04-16';
        $procesoImportacion->fecha_estimada_llegada = '2021-04-27';
        $procesoImportacion->nombre_importacion='Importación Abril 16/21';
        $procesoImportacion->save();

        $procesoImportacion = new ProcesoImportacion();
        $procesoImportacion->fecha_ingreso_pedido = '2021-05-17';
        $procesoImportacion->fecha_estimada_llegada = '2021-05-26';
        $procesoImportacion->nombre_importacion='Importación Mayo 17/21';
        $procesoImportacion->save();
    }
}
