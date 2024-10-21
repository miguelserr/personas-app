<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Asegúrate de que esta línea esté presente
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory; // Usa el trait HasFactory aquí
    protected $table = 'tb_municipio';
    protected $primaryKey = 'muni_codi';
    public $timestamps = false;
}
