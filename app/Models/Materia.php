<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nombre_materia', 'intencidad_horaria'];

    public function cursos(){
        return $this->belongsTo(Course::class);
    }

    public function docentes(){
        return $this->hasMany(Teacher::class);
    }
}
