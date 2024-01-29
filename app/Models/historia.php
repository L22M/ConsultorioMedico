<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historia extends Model
{
    protected $fillable=['nombre','ciudad','pais']; 
    use HasFactory;
    

    protected $table = 'historia';
}
