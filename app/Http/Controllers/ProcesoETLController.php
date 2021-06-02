<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Marquine\Etl\Etl;

class ProcesoETLController extends Controller
{
    public function ejecutarProcesoETL()
    {

        /*ETL para tabla Aduana*/
        $etlAduana = new Etl;
        $etlAduana->extract('table', 'aduana',[
                'connection'=>'transaccional',
                'columns'=>['aduana_id','codigo_aduana','nombre_aduana']
                ]
            )
        ->transform('trim', ['columns' => ['aduana_id', 'codigo_aduana','nombre_aduana']])
        ->load('insert_update', 'aduana',[
                'connection'=>'mysql',
                'key'=>['aduana_id'],
                'columns'=>['aduana_id','codigo_aduana','nombre_aduana'],
                'timestamps' => true
                ]
            )
        ->run();
        /*fin ETL de tabla aduana*/

        /*ETL para tabla Proveedor*/
        $etlProveedor = new Etl;
        $etlProveedor->extract('table', 'proveedor',[
                'connection'=>'transaccional',
                'columns'=>['proveedor_id','nombre_proveedor']
                ]
            )
        ->transform('trim', ['columns' => ['proveedor_id','nombre_proveedor']])
        ->load('insert_update', 'proveedor',[
                'connection'=>'mysql',
                'key'=>['proveedor_id'],
                'columns'=>['proveedor_id','nombre_proveedor'],
                'timestamps' => true
                ]
            )
        ->run();
        /*fin ETL de tabla proveedor*/

        /*ETL para tabla Tipo_materia_prima*/
        $etlTipoMateriaPrima = new Etl;
        $etlTipoMateriaPrima->extract('table', 'tipo_materia_prima',[
                'connection'=>'transaccional',
                'columns'=>['tipo_materia_prima_id','nombre_tipo_materia_prima']
                ]
            )
        ->transform('trim', ['columns' => ['tipo_materia_prima_id','nombre_tipo_materia_prima']])
        ->load('insert_update', 'tipo_materia_prima',[
                'connection'=>'mysql',
                'key'=>['tipo_materia_prima_id'],
                'columns'=>['tipo_materia_prima_id','nombre_tipo_materia_prima'],
                'timestamps' => true
                ]
            )
        ->run();
        /*fin ETL de tabla Tipo_materia_prima*/ 
        
        /*ETL para tabla Materia_prima*/
        $etlMateriaPrima = new Etl;
        $etlMateriaPrima->extract('table', 'materia_prima',[
                'connection'=>'transaccional',
                'columns'=>['materia_prima_id','tipo_materia_prima_id','nombre_materia_prima','existencias']
                ]
            )
        ->transform('trim', ['columns' => ['materia_prima_id','tipo_materia_prima_id','nombre_materia_prima','existencias']])
        ->load('insert_update', 'materia_prima',[
                'connection'=>'mysql',
                'key'=>['materia_prima_id'],
                'columns'=>['materia_prima_id','tipo_materia_prima_id','nombre_materia_prima','existencias'],
                'timestamps' => true
                ]
            )
        ->run();
        /*fin ETL de tabla Materia_prima*/  
        
        /*ETL para tabla Orden_de_compra*/
        $etlOrdenDeCompra = new Etl;
        $etlOrdenDeCompra->extract('table', 'orden_de_compra',[
                'connection'=>'transaccional',
                'columns'=>['orden_de_compra_id','proveedor_id','total_orden','fecha_emision_orden']
                ]
            )
        ->transform('trim', ['columns' => ['orden_de_compra_id','proveedor_id','total_orden','fecha_emision_orden']])
        ->load('insert_update', 'orden_de_compra',[
                'connection'=>'mysql',
                'key'=>['orden_de_compra_id'],
                'columns'=>['orden_de_compra_id','proveedor_id','total_orden','fecha_emision_orden'],
                'timestamps' => true
                ]
            )
        ->run();
        /*fin ETL de tabla Orden_de_compra*/ 

        /*ETL para tabla Proceso_importacion*/
        $etlProcesoImportacion = new Etl;
        $etlProcesoImportacion->extract('table', 'proceso_importacion',[
                'connection'=>'transaccional',
                'columns'=>['proceso_importacion_id','fecha_ingreso_pedido','fecha_estimada_llegada','nombre_importacion']
                ]
            )
        ->transform('trim', ['columns' => ['proceso_importacion_id','fecha_ingreso_pedido','fecha_estimada_llegada','nombre_importacion']])
        ->load('insert_update', 'proceso_importacion',[
                'connection'=>'mysql',
                'key'=>['proceso_importacion_id'],
                'columns'=>['proceso_importacion_id','fecha_ingreso_pedido','fecha_estimada_llegada','nombre_importacion'],
                'timestamps' => true
                ]
            )
        ->run();
        /*fin ETL de tabla Proceso_importacion*/ 

        /*ETL para tabla Declaracion*/
        $etlDeclaracion= new Etl;
        $etlDeclaracion->extract('table', 'declaracion',[
            'connection'=>'transaccional',
            'columns'=>['declaracion_id','aduana_id','proceso_importacion_id','pago_impuestos']
            ]
        )
        ->transform('trim', ['columns' => ['declaracion_id','aduana_id','proceso_importacion_id','pago_impuestos']])
        ->load('insert_update', 'declaracion',[
            'connection'=>'mysql',
            'key'=>['declaracion_id'],
            'columns'=>['declaracion_id','aduana_id','proceso_importacion_id','pago_impuestos'],
            'timestamps' => true
            ]
        )
        ->run();
        /*fin ETL de tabla Declaracion*/       

        /*ETL para tabla Documento_transporte*/
        $etlDocumentoTransporte= new Etl;
        $etlDocumentoTransporte->extract('table', 'documento_transporte',[
            'connection'=>'transaccional',
            'columns'=>['documento_transporte_id','declaracion_id','fecha_emision_doc','tipo_documento']
            ]
        )
        ->transform('trim', ['columns' => ['documento_transporte_id','declaracion_id','fecha_emision_doc','tipo_documento']])
        ->load('insert_update', 'documento_transporte',[
            'connection'=>'mysql',
            'key'=>['documento_transporte_id'],
            'columns'=>['documento_transporte_id','declaracion_id','fecha_emision_doc','tipo_documento'],
            'timestamps' => true
            ]
        )
        ->run();
        /*fin ETL de tabla Documento_transporte*/       

        /*ETL para tabla Factura*/
        $etlFactura= new Etl;
        $etlFactura->extract('table', 'factura',[
            'connection'=>'transaccional',
            'columns'=>['factura_id','declaracion_id','proveedor_id','total_factura','condiciones_pago','fecha_emision_factura']
            ]
        )
        ->transform('trim', ['columns' => ['factura_id','declaracion_id','proveedor_id','total_factura','condiciones_pago','fecha_emision_factura']])
        ->load('insert_update', 'factura',[
            'connection'=>'mysql',
            'key'=>['factura_id'],
            'columns'=>['factura_id','declaracion_id','proveedor_id','total_factura','condiciones_pago','fecha_emision_factura'],
            'timestamps' => true
            ]
        )
        ->run();
        /*fin ETL de tabla Factura*/ 

        /*ETL para tabla Factura_materia_prima*/
        $etlFacturaMateriaPrima= new Etl;
        $etlFacturaMateriaPrima->extract('table', 'factura_materia_prima',[
            'connection'=>'transaccional',
            'columns'=>['factura_materia_prima_id','factura_id','materia_prima_id','total_materia_prima']
            ]
        )
        ->transform('trim', ['columns' => ['factura_materia_prima_id','factura_id','materia_prima_id','total_materia_prima']])
        ->load('insert_update', 'factura_materia_prima',[
            'connection'=>'mysql',
            'key'=>['factura_materia_prima_id'],
            'columns'=>['factura_materia_prima_id','factura_id','materia_prima_id','total_materia_prima'],
            'timestamps' => true
            ]
        )
        ->run();
        /*fin ETL de tabla Factura_materia_prima*/ 
        
        return back()->with('success','La base de datos gerencial ha sido actualizada correctamente');
    }
}
