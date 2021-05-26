<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('rol_id')->on('Rol')->onDelete('cascade');
            $table->string('codigo_usuario')->unique();
            
            $table->string('password');
            $table->string('apellidos',50)->nullable();
            $table->string('nombres',50)->nullable();
            $table->string('dui',25)->nullable();
            $table->string('email',50);
            $table->string('telefono',25)->nullable();
            $table->boolean('estado')->default(1);

            $table->timestamp('email_verified_at')->nullable();            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
