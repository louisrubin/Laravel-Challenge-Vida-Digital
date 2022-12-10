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
        return redirect()->route('agregarProducto')->with('success', 'Producto Agregado Correctamente.');

    }

    public function getAll() {
        $productos = Producto::all();

        return view('main', ['productos' => $productos] );
    }

    public function showOne($id) {
        $producto = Producto::find($id);
        return view('productos.producto', ['producto' => $producto]);
    }


    public function updateProducto(Request $request, $id) {
        $producto = Producto::find($id);
        // el valor llegado de la base de datos se lo paso al request
        $producto->nombre_prod  =  $request->nombre_prod;
        $producto->unid_x_bulto  =  $request->unid_x_bulto;
        $producto->precio_vent_bulto  =  $request->precio_vent_bulto;

        $producto->save();

        // return view('productos.producto', ['success' => 'Producto Actualizado Correctamente.']);
        return redirect()->route('main')->with('success', 'Producto Actualizado Correctamente.');
    }

    // public function deleteOne($id) {
    //     $item = Producto::get
    // }

}
