<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol_usuario extends Model
{
    protected $fillable=['usuario_id','nombreRol']; 
    use HasFactory;
    

    protected $table = 'rol_usuario';

    public function usuarios()
    {
        return $this->belongsTo(usuarios::class, 'usuario_id');
    }
}
