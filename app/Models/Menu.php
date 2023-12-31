<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    // afegir per protegir el model d'assignacions massives quan es crea un nou objecte. 
    protected $fillable = [
        'nom_plat', 'preu'
    ];
}