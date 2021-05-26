<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroBitacoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Registro_bitacora', function (Blueprint $table) {
            $table->bigIncrements('registro_bitacora_id'); 

            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('tipo_reporte_id');
            $table->foreign('tipo_reporte_id')->references('tipo_reporte_id')->on('Tipo_reporte')->onDelete('cascade');

            $table->date('fecha')->nullable();
            $table->string('detalles',100)->nullable();
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
        Schema::dropIfExists('registro_bitacora');
    }
}
