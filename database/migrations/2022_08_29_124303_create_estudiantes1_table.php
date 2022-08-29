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
    public function up()
    {
        Schema::create('estudiantes1', function (Blueprint $table) {
            $table->id();
            $table->enum('id_estudiante',['CC', 'TI','CE']);
            $table->integer('numero_documento');
            $table->string('documento_identidad');
            $table->date('fecha_expedicion');
            // $table->unsignedBigInteger('id_expedicion_municipio');
            $table->string('departamento_expedicio');
            $table->string('nombre');
            $table->string('primer_apellido');
            $table->strong('segundo_apellido');
            $table->enum('genero',['M','F','OTROS']);
            $table->date('fecha_nacimiento');
            // $table->unsignedBigInteger('id_pais_nacimiento');
            // $table->unsignedBigInteger('id_departamento_nacimiento');
            // $table->unsignedBigInteger('id_municipio_nacimiento');
            $table->integer('estrato');
            // $table->unsignedBigInteger('id_cursos');
            // $table->unsignedBigInteger('id_muni_nacimiento');
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
        Schema::dropIfExists('estudiantes1');
    }
};
