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

    // public function sucursOfEmpresa($id = null) {
    //         // FUNCTION TO GET ALL SUCURSALS HAVE ONE EMPRESA
    //     $sucurEmpres = DB::table('sucursals')
    //     ->whereExists( function($query) {
    //         $query->from('empresas')
    //         ->whereColumn('ID_empresa1', 'ID_empresa');
    //     } )
    //     ->where('ID_empresa1', $id)
    //     ->get();

    //     return ($sucurEmpres);
    // }

    
    public function getEntidades() {
        // GET ALL RECORDS
        $allProductos = Producto::all();
        $allEmpresas = Empresa::all();
        $allSucursals = Sucursal::all();

        // $allSucursOfEmpresa = $this->sucursOfEmpresa();
        // foreach ($allSucursals as $it) {
        //     $allSucursOfEmpresa = $this->sucursOfEmpresa($it->ID_empresa1);
        //     // if ($it->ID_empresa1 == 2) {
        //     //     break;
        //     // }
        // }
        
        // dd($allSucursOfEmpresa);    // DEBUG


        return view('home', [
            'allProductos' => $allProductos,
            'allEmpresas' => $allEmpresas,
            'allSucursals' => $allSucursals,
            // 'sucursOfEmpresa' => $this->sucursOfEmpresa(),
        ] );
    }

}
