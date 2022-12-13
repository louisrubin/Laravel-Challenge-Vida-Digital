<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function newRecord() {
        return view('empresa.newEmpresa' );
    }


    public function showOne(Empresa $empresa) {
        //
    }

    public function createEmpresa(Request $request) {

        // validamos que los campos no lleguen vacios
        $request->validate( [
            'ID_empresa' => 'required|min:5',
            'nombre' => 'required|min:3',
            'direc_comerc' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ] );


        $empresa = new Empresa;
        // asignando los valores recibidos de la request
        // $empresa->ID_empresa = $request->ID_empresa;
        $empresa->nombre  =  $request->nombre;
        $empresa->direc_comerc  =  $request->direc_comerc;
        $empresa->telefono  =  $request->telefono;
        $empresa->email  =  $request->email;

        $producto->save();

        // redirect                         // mensaje en caso de 'success'
        return redirect()->route('home')->with('success', 'Empresa Agregado Correctamente.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmpresaRequest  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpresaRequest  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
}
