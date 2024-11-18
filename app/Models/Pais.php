<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    
    
    // Define el nombre de la tabla si es necesario 
    protected $table = 'pais';

    protected $fillable = [
        'nombre',
        'medallas_oro',
        'medallas_plata',
        'medallas_bronce',
        'total_medallas',
    ];
}
