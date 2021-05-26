<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclaracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Declaracion', function (Blueprint $table) {
            $table->bigIncrements('declaracion_id'); 

            $table->unsignedBigInteger('aduana_id');
            $table->foreign('aduana_id')->references('aduana_id')->on('Aduana')->onDelete('cascade');

            $table->unsignedBigInteger('proceso_importacion_id');
            $table->foreign('proceso_importacion_id')->references('proceso_importacion_id')->on('Proceso_importacion')->onDelete('cascade');
            
            $table->boolean('pago_impuestos')->nullable();
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
        Schema::dropIfExists('declaracion');
    }
}
