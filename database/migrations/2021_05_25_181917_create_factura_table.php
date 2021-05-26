<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Factura', function (Blueprint $table) {
            $table->bigIncrements('factura_id'); 

            $table->unsignedBigInteger('declaracion_id')->nullable();
            $table->foreign('declaracion_id')->references('declaracion_id')->on('Declaracion')->onDelete('cascade');

            $table->unsignedBigInteger('proveedor_id');
            $table->foreign('proveedor_id')->references('proveedor_id')->on('Proveedor')->onDelete('cascade');

            $table->decimal('total_factura',10,2)->nullable();
            $table->string('condiciones_pago',50)->nullable();
            $table->date('fecha_emision_factura')->nullable();
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
        Schema::dropIfExists('factura');
    }
}
