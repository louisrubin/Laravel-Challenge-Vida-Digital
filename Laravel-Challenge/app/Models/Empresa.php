<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_empresa';      // SET PRIMARY KEY

    protected $fillable = [
        // PERMITE CARGAR DATOS DENTRO DE UNA FUNCION COMO 
        // 'Sucursal::create('sucursales', ['id' => $id,...] ); '
        'ID_empresa',
        'nombre_emp',
        'direc_comerc',
        'telefono',
        'email',
    ];
}
