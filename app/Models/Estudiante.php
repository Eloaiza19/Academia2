<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_estudiante', 'numero_documento', 'documento_identidad', 'fecha_expedicion', 'id_expedicion_municipio', 'departamento_municipio', 'nombre', 'primer_apellido', 'segundo_apellido', 'genero', 'fecha_nacimiento', 'id_pais_nacimiento', 'id_departamento_nacimiento', 'id_municipio_nacimiento', 'estrato', 'id_curso', 'id_muni_nacimiento'];

    public function municipioNacimiento(){
        return $this->belongsTo(Municipio::class);
    }

    public function cursos(){
        return $this->belongsTo(Curso::class);
    }
}
