<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nombre', 'id_pais'];

    public function paises(){
        return $this->belongTo(Pais::class);
    }

    public function municipios(){
        return $this->hasMany(Municipio::class);
    }
}
