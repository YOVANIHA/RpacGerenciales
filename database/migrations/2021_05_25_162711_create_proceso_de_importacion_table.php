<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesoDeImportacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Proceso_importacion', function (Blueprint $table) {
            $table->bigIncrements('proceso_importacion_id'); 
            $table->date('fecha_ingreso_pedido')->nullable();
            $table->date('fecha_estimada_llegada')->nullable();
            $table->string('nombre_importacion',50)->nullable();
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
        Schema::dropIfExists('proceso_de_importacion');
    }
}
