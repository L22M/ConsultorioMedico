<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citas extends Model
{
    protected $fillable=['nombre','ciudad','pais']; 
    use HasFactory;
    

    protected $table = 'citas';
}
