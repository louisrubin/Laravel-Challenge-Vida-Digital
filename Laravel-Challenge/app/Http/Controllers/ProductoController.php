<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;

class ProductoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request) {

        // validamos que los campos no lleguen vacios
        $request->validate( [
            'cod_barra' => 'required|min:5',
            'nombre_prod' => 'required|min:3',
            'unid_x_bulto' => 'required',
            'precio_vent_bulto' => 'required',
            
        ] );


        $producto = new Producto;
        // asignando los valores recibidos de la request
        $producto->cod_barra = $request->cod_barra;
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

    public function showOne($cod) {
        $producto = DB::table('productos')->where('cod_barra', $cod)->first();
        
        return view('productos.producto', ['producto' => $producto]);
    }


    public function updateProducto(Request $request, $codigo) {
        $producto = DB::table('productos')->where('cod_barra', $codigo)->first();

        // el valor llegado de la base de datos se lo paso al request
        $producto->cod_barra = $request->cod_barra;
        $producto->nombre_prod  =  $request->nombre_prod;
        $producto->unid_x_bulto  =  $request->unid_x_bulto;
        $producto->precio_vent_bulto  =  $request->precio_vent_bulto;

        $producto->save();

        // return view('productos.producto', ['success' => 'Producto Actualizado Correctamente.']);
        return redirect()->route('main')->with('success', 'Producto Actualizado Correctamente.');
    }

    public function deleteOne($codigo) {
        DB::table('productos')
                ->where('cod_barra', '=', $codigo)
                ->delete();

        // DB::delete('productos')->where('cod_barra', $codigo);
        // $item = Producto::find($id)->delete('cod_barra');

        return redirect()->route('agregarProducto')->with('success', 'Producto Eliminado Correctamente.');
    }

}
