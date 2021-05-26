<?php

use Illuminate\Database\Seeder;
use App\DocumentoTransporte;
use App\Declaracion;
use App\Aduana;

class DocumentoTransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documentoTransporte = new DocumentoTransporte();
        $documentoTransporte->declaracion_id = 1;    
        $documentoTransporte->fecha_emision_doc = '2020-07-18';
        $documentoTransporte->tipo_documento = 'Conocimiento de embarque (BL)';
        $documentoTransporte->save();

        $documentoTransporte = new DocumentoTransporte();
        $documentoTransporte->declaracion_id = 2;      
        $documentoTransporte->fecha_emision_doc = '2020-08-19';
        $documentoTransporte->tipo_documento = 'Conocimiento de embarque (BL)';
        $documentoTransporte->save();

        $documentoTransporte = new DocumentoTransporte();
        $documentoTransporte->declaracion_id = 3;      
        $documentoTransporte->fecha_emision_doc = '2020-09-19';
        $documentoTransporte->tipo_documento = 'Conocimiento de embarque (BL)';
        $documentoTransporte->save();

        $documentoTransporte = new DocumentoTransporte();
        $documentoTransporte->declaracion_id = 4;      
        $documentoTransporte->fecha_emision_doc = '2020-10-18';
        $documentoTransporte->tipo_documento = 'Conocimiento de embarque (BL)';
        $documentoTransporte->save();

        $documentoTransporte = new DocumentoTransporte();
        $documentoTransporte->declaracion_id = 5;      
        $documentoTransporte->fecha_emision_doc = '2020-11-19';
        $documentoTransporte->tipo_documento = 'Guía aérea';
        $documentoTransporte->save();

        $documentoTransporte = new DocumentoTransporte();
        $documentoTransporte->declaracion_id = 6;      
        $documentoTransporte->fecha_emision_doc = '2020-12-19';
        $documentoTransporte->tipo_documento = 'Conocimiento de embarque (BL)';
        $documentoTransporte->save();


        $documentoTransporte = new DocumentoTransporte();
        $documentoTransporte->declaracion_id = 7;      
        $documentoTransporte->fecha_emision_doc = '2021-01-18';
        $documentoTransporte->tipo_documento = 'Conocimiento de embarque (BL)';
        $documentoTransporte->save();

        $documentoTransporte = new DocumentoTransporte();
        $documentoTransporte->declaracion_id = 8;      
        $documentoTransporte->fecha_emision_doc = '2021-02-19';
        $documentoTransporte->tipo_documento = 'Conocimiento de embarque (BL)';
        $documentoTransporte->save();

        $documentoTransporte = new DocumentoTransporte();
        $documentoTransporte->declaracion_id = 9;      
        $documentoTransporte->fecha_emision_doc = '2021-03-19';
        $documentoTransporte->tipo_documento = 'Guía aérea';
        $documentoTransporte->save();

        $documentoTransporte = new DocumentoTransporte();
        $documentoTransporte->declaracion_id = 10;      
        $documentoTransporte->fecha_emision_doc = '2021-04-18';
        $documentoTransporte->tipo_documento = 'Guía aérea';
        $documentoTransporte->save();

        $documentoTransporte = new DocumentoTransporte();
        $documentoTransporte->declaracion_id = 11;      
        $documentoTransporte->fecha_emision_doc = '2021-05-18';
        $documentoTransporte->tipo_documento = 'Guía aérea';
        $documentoTransporte->save();

    }
}
