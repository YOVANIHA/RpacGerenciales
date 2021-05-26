<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaMateriaPrimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Factura_materia_prima', function (Blueprint $table) {
            $table->bigIncrements('factura_materia_prima_id'); 

            $table->unsignedBigInteger('factura_id');
            $table->foreign('factura_id')->references('factura_id')->on('Factura')->onDelete('cascade');

            $table->unsignedBigInteger('materia_prima_id');
            $table->foreign('materia_prima_id')->references('materia_prima_id')->on('Materia_prima')->onDelete('cascade');

            $table->decimal('total_materia_prima',10,2)->nullable();

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
        Schema::dropIfExists('factura_materia_prima');
    }
}
