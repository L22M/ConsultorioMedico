<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    protected $fillable=['nombre','sexo','fechaNacimiento','edad','idNum','aseguradora','email','domicilio','telefono','otros','usuario_id']; 
    use HasFactory;
    

    protected $table = 'paciente';
}
