<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;

use App\Models\Sucursal;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'ID_sucursal1' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    



    public function getAllSucursales() {
        // FUNCION QUE OBTIENE TODAS LAS SUCURSALES PARA VINCULARLOS AL MOMENTO DEL REGISTRO
        

        $id = 1;
        $sucur = Sucursal::where('ID_sucursal', $id)->first();

        // CREATE THE INITIAL SUCURSALS TO REGISTER USER INTO IT
        if( !$sucur) {
            $sucur = Sucursal::create( [
                // 'ID_sucursal' => $id,
                'nombre_sucursal' => 'El Pepe Salchichas',
                'direc_comerc' => 'Av. Washington 4560',
                'telefono' => '3624655443',
                'email' => 'elpepe.12@gmail.com'
            ] );
        }


        // GET ALL SUCURSALS
        $sucursals = Sucursal::all();
        return view('auth.register', ['sucursals' => $sucursals] );
    }


    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'domicilio' => $data['domicilio'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'ID_sucursal1' => $data['ID_sucursal1'],
        ]);
    }
}
