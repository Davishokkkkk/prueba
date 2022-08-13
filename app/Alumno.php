<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasFactory;

class Alumno extends Model
{
    use HasFactory;
    public $table= 'dw3';
    public $fillable=['nombre', 'apellido', 'edad', 'ci', 'telefono','direccion'];

}
