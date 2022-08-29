<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nombre'];

    //Relación uno a muchos
    public function departamento(){
        return $this->hasMany(Departamento::class);
    }
}
