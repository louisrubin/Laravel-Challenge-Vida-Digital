<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_sucursal';      // SET PRIMARY KEY

    
    protected $fillable = [
        // PERMITE CARGAR DATOS DENTRO DE UNA FUNCION COMO 
        // 'Sucursal::create('sucursales', ['id' => $id,...] ); '
        'ID_sucursal',
        'nombre_sucursal',
        'direc_comerc',
        'telefono',
        'email',
        'ID_empresa1',
    ];
}
