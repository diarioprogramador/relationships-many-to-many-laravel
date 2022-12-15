<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //Relationships Many to Many
    public function estudiantes(){
        return $this->belongsToMany(Estudiante::class, 'curso_estudiante');
    }
}
