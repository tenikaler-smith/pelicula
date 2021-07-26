<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    protected $table = 'peliculas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'titulo',
        'descripcion',
        'id_genero',
        'precio',
        'imagen',
        'video',
        'trailler'
    ];
}
