<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVenta extends Model
{
    use HasFactory;
    
    protected $table = 'tbl_tipo_venta';
    protected $primaryKey = 'id_tipoVenta';

    protected $fillable = [
        'nombre_tipoVenta'
    ];
}