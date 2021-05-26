<?php

use Illuminate\Database\Seeder;
use App\TipoReporte;
class TipoReporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoReporte = new TipoReporte();
        $tipoReporte->codigo_tipo_reporte='RT01';
        $tipoReporte->descripcion = 'Reporte de cantidad de declaraciones por proceso de importación y estado de pago de impuestos';
        $tipoReporte->save();

        $tipoReporte = new TipoReporte();
        $tipoReporte->codigo_tipo_reporte='RT02';
        $tipoReporte->descripcion = 'Reporte de compras totales y cantidad de facturas al crédito y al contado por proveedor';
        $tipoReporte->save();
        
        $tipoReporte = new TipoReporte();
        $tipoReporte->codigo_tipo_reporte='RT03';
        $tipoReporte->descripcion = 'Reporte de cantidad de documentos de transporte emitidos por cada tipo de documento';
        $tipoReporte->save();

        $tipoReporte = new TipoReporte();
        $tipoReporte->codigo_tipo_reporte='RT04';
        $tipoReporte->descripcion = 'Reporte de materia primas con bajos niveles de inventario';
        $tipoReporte->save();

        $tipoReporte = new TipoReporte();
        $tipoReporte->codigo_tipo_reporte='RT05';
        $tipoReporte->descripcion = 'Reporte de cantidad de órdenes de compra y monto correspondiente en un periodo';
        $tipoReporte->save();

        $tipoReporte = new TipoReporte();
        $tipoReporte->codigo_tipo_reporte='RE01';
        $tipoReporte->descripcion = 'Cuadro resumen de tiempos promedios de llegada de pedidos desde cada puerto';
        $tipoReporte->save();

        $tipoReporte = new TipoReporte();
        $tipoReporte->codigo_tipo_reporte='RE02';
        $tipoReporte->descripcion = 'Cuadro resumen de materia prima más comprada en el mes';
        $tipoReporte->save();

        $tipoReporte = new TipoReporte();
        $tipoReporte->codigo_tipo_reporte='RE03';
        $tipoReporte->descripcion = 'Cuadro comparativo de importaciones por aduana';
        $tipoReporte->save();

    }
}
