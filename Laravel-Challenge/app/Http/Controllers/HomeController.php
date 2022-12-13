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
        // GET THE FIRST 3 PRODUCTOS
        $productos = Producto::all()->take(3);
        $empresas = Empresa::all()->take(3);
        $sucursals = Sucursal::all()->take(3);

        return view('home', ['allProductos' => $productos], ['allEmpresas' => $empresas], ['allSucursals' => $sucursals] );
    }

}
