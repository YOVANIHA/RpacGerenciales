<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaPrimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Materia_prima', function (Blueprint $table) {
            $table->bigIncrements('materia_prima_id'); 

            $table->unsignedBigInteger('tipo_materia_prima_id');
            $table->foreign('tipo_materia_prima_id')->references('tipo_materia_prima_id')->on('Tipo_materia_prima')->onDelete('cascade');

            $table->string('nombre_materia_prima',100)->nullable();
            $table->integer('existencias')->nullable();
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
        Schema::dropIfExists('materia_prima');
    }
}
