<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoTransporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Documento_transporte', function (Blueprint $table) {
            $table->bigIncrements('documento_transporte_id'); 

            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('declaracion_id')->on('Declaracion')->onDelete('cascade');
            
            $table->date('fecha_emision_doc')->nullable();
            $table->string('tipo_documento',50)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento_transporte');
    }
}
