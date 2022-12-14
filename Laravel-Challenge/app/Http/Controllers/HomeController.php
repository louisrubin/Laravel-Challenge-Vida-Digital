<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Producto;
use App\Models\Empresa;
use App\Models\Sucursal;

class HomeController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allDataOfEmpresa($id) {
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

    
    public function getEntidades() {
        // GET ALL RECORDS
        $allProductos = Producto::all();
        $allEmpresas = Empresa::all();
        $allSucursals = Sucursal::all();



        return view('home', [
            'allProductos' => $allProductos,
            'allEmpresas' => $allEmpresas,
            'allSucursals' => $allSucursals,
        ] );
    }

}
