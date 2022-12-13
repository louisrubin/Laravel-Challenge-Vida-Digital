<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Producto;
use App\Models\Empresa;
use App\Models\Sucursal;

class HomeController extends Controller
{
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
    public function index()
    {
        return view('home');
    }

    
    public function getEntidades() {
        // GET ALL RECORDS
        $productos = Producto::all();
        $empresas = Empresa::all();
        $sucursals = Sucursal::all();

        return view('home', ['allProductos' => $productos], ['allEmpresas' => $empresas], ['allSucursals' => $sucursals] );
    }

}
