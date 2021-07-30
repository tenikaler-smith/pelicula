<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $table = 'factura';
    protected $primaryKey = 'id';
    protected $fillable = ['id_usuario','total', 'md5_validacion'];
}
