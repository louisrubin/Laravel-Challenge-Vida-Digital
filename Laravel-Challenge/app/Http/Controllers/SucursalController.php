<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSucursalRequest;
use App\Http\Requests\UpdateSucursalRequest;
use Illuminate\Support\Facades\DB;

class SucursalController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function getAllSucursals() {
        $sucursals = Sucursal::all();
        return view('sucursal.viewAllSucursals', ['allSucursals' => $sucursals]);
    }


    public function createSucursalPage() {
        $allEmpresas = Empresa::all();
        return view('sucursal.newSucursal', ['empresas' => $allEmpresas]);
    }



    public function allDataOfSucursal($id) {
        $sucursal = Sucursal::find($id);

        // FUNCTION TO GET ALL EMPLEADOS GET ONE SUCURSAL
        $usersOfSucursal = DB::table('users')
        ->whereExists( function($query) {
            $query->from('sucursals')
            ->whereColumn('ID_sucursal1', 'ID_sucursal');
        } )
        ->where('ID_sucursal1', $id)
        ->get();

        
        // dd($sucursOfEmpresa);


        if (!$sucursal) {
            // IF 'ID' NOT EXIST REDIRECT USER TO HOME
            return redirect()->route('home');

        } else {
            return view('sucursal.dataOfSucursal', [
                'oneSucursal' => $sucursal,
                'usersOfSucursal' => $usersOfSucursal,
                ] );
        }
    }



    public function createSucursal(Request $request) {
        // validamos que los campos no lleguen vacios
        $request->validate( [
            'nombre_sucur' => 'required|min:3',
            'direc_comerc' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'ID_empresa1' => 'required',
        ] );


        $sucursal = new Sucursal;
        // asignando los valores recibidos de la request
        $sucursal->nombre_sucur  =  $request->nombre_sucur;
        $sucursal->direc_comerc  =  $request->direc_comerc;
        $sucursal->telefono  =  $request->telefono;
        $sucursal->email  =  $request->email;
        $sucursal->ID_empresa1 = $request->ID_empresa1;

        $sucursal->save();

        // redirect                         // mensaje en caso de 'success'
        return redirect()->route('home')->with('success', 'Sucursal Agregada Correctamente.');
    }




    public function updateSucursal(Request $request, $id) {
        $sucursal = Sucursal::find($id);

        // el valor llegado de la base de datos se lo paso al request
        $sucursal->nombre_sucur = $request->nombre_sucur;
        $sucursal->direc_comerc =  $request->direc_comerc;
        $sucursal->telefono =  $request->telefono;
        $sucursal->email  =  $request->email;
        $sucursal->ID_empresa1 = $request->ID_empresa1;

        $sucursal->save();

        return redirect()->route('home')->with('success', 'Sucursal Actualizada Correctamente.');
    }




    public function deleteSucursal($id) {
        $item = Sucursal::find($id)->delete('ID_sucursal');

        return redirect()->route('home')->with('success', 'Sucursal Eliminada Correctamente.');

    }
}



