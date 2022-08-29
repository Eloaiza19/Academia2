<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nombre', 'id_departamento'];

    //Relación uno a muchos
    public function estudiantes(){
        return $this->hasMany(Estudiante::class);
    }
}
