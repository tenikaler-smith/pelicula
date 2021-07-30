<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaDetalle extends Model
{
    use HasFactory;
    protected $table = 'factura_detalle';
    protected $primaryKey = 'id';
    protected $fillable = ['id_factura', 'id_pelicula', 'id_precio'];
}
