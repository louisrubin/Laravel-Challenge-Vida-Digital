<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use Illuminate\Support\Facades\DB;

use App\Models\Empresa;

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

     public function createEmpresaPage() {
        return view('empresa.newEmpresa' );
    }

    
    public function getAllEmpresas() {
        $empresas = Empresa::all();

        return view('empresa.viewAllEmpresas', ['allEmpresas' => $empresas]);
    }



    public function showOne($id) {
        $empresa = Empresa::find($id);

        // FUNCTION TO GET ALL SUCURSALS HAVE ONE EMPRESA
        $sucursOfEmpresa = DB::table('sucursals')
        ->whereExists( function($query) {
            $query->from('empresas')
            ->whereColumn('ID_empresa1', 'ID_empresa');
        } )
        ->where('ID_empresa1', $id)
        ->get();

        // dd($sucursOfEmpresa);

        if (!$empresa) {
            // IF 'ID' NOT EXIST REDIRECT USER TO HOME
            return redirect()->route('home');

        } else {
            return view('empresa.dataOfEmpresa', [
                'oneEmpresa' => $empresa,
                'sucursOfEmpresa' => $sucursOfEmpresa,
                ] );
        }
    }

    public function createEmpresa(Request $request) {

        // validamos que los campos no lleguen vacios
        $request->validate( [
            // 'ID_empresa' => 'required|min:5',
            'nombre_emp' => 'required|min:3',
            'direc_comerc' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ] );


        $empresa = new Empresa;
        // asignando los valores recibidos de la request
        // $empresa->ID_empresa = $request->ID_empresa;
        $empresa->nombre_emp  =  $request->nombre_emp;
        $empresa->direc_comerc  =  $request->direc_comerc;
        $empresa->telefono  =  $request->telefono;
        $empresa->email  =  $request->email;

        $empresa->save();

        // redirect                         // mensaje en caso de 'success'
        return redirect()->route('home')->with('success', 'Empresa Agregado Correctamente.');
    }

    public function deleteEmpresa($id) {
        $item = Empresa::find($id)->delete('ID_empresa');

        return redirect()->route('home');

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
