<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //Añado permiso para manipular campos de la tabla
    protected $fillable =['nombre','description','duracion','imagen'];
    use HasFactory;
}

