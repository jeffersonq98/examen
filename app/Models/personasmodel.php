<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personasmodel extends Model
{
    use HasFactory;

    protected $table= 'personas' ;
    protected $fillabel=[
        'nombre',
        'apellido',
        'direccion',
        'telefono'
       
    ];
}
