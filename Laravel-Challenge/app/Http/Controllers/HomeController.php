<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Producto;
use App\Models\Empresa;
use App\Models\Sucursal;

class HomeController extends Controller {


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    public function getEntidades() {
        // GET ALL RECORDS
        $allProductos = Producto::all();
        $allEmpresas = Empresa::all();
        $allSucursals = Sucursal::all();

        $sucurEmpres = DB::table('sucursals')
            ->whereExists( function($query) {
                $query->from('empresas')
                ->whereColumn('ID_empresa1', 'ID_empresa');
            } )
            ->get();
        
            dd($sucurEmpres);    // DEBUG


        return view('home', [
            'allProductos' => $allProductos,
            'allEmpresas' => $allEmpresas,
            'allSucursals' => $allSucursals,
            'sucurEmpres' => $sucurEmpres,
        ] );
    }

}
