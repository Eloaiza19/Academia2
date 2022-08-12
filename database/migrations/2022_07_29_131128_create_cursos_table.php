<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //Con up se crea la tabla
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id(); //Llave primaria (automatico)
            $table->timestamps(); //Registra el tiempo de creacion de la tabla (automatico)
            $table->string('nombre');
            $table->string('description');
            $table->integer('duracion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     //Con down se destruye la tabla
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};

