<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //

    public function store(Request $request) {

        // validamos que los campos no lleguen vacios
        $request->validate( [
            'nombre_prod' => 'required|min:3',
            'unid_x_bulto' => 'required',
            'precio_vent_bulto' => 'required',
            
        ] );


        $producto = new Producto;
        // asignando los valores recibidos de la request
        $producto->nombre_prod  =  $request->nombre_prod;
        $producto->unid_x_bulto  =  $request->unid_x_bulto;
        $producto->precio_vent_bulto  =  $request->precio_vent_bulto;

        $producto->save();

        // redirect                         // mensaje en caso de 'success'
        return redirect()->route('agregarProducto')->with('success', 'Producto Agregado.');

    }

    public function getAll() {
        $productos = Producto::all();

        return view('main', ['productos' => $productos] );
    }


}
