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
use App\Models\Empresa;

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
            'user_name' => ['required', 'string', 'max:255'],
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
        

        $id_emp = 1;
        $id_sucur = 1;
        $emp = Empresa::where('ID_empresa', $id_emp)->first();
        $sucur = Sucursal::where('ID_sucursal', $id_sucur)->first();

        
        if( !$sucur && !$emp) {
            // INITIAL EMPRESA
            $emp = Empresa::create( [
                'ID_empresa' => $id_emp,
                'nombre_emp' => 'Google Inc',
                'direc_comerc' => 'Av. Mexico 320',
                'telefono' => '03624569014',
                'email' => 'google@google.com',
            ]);


            // INITIAL SUCURSAL 1
            $sucur = Sucursal::create( [
                // 'ID_sucursal' => $id,
                'nombre_sucur' => 'El Pepe Salchichas',
                'direc_comerc' => 'Av. Washington 4560',
                'telefono' => '03624655443',
                'email' => 'elpepe.12@gmail.com',
                'ID_empresa1' => $id_emp,
            ] );


            // INITIAL SUCURSAL 2
            $sucur = Sucursal::create( [
                // 'ID_sucursal' => $id,
                'nombre_sucur' => 'Gato Pedro Sucursal',
                'direc_comerc' => 'Av. Italia 770',
                'telefono' => '03624855212',
                'email' => 'pedro.gato@gmail.com',
                'ID_empresa1' => $id_emp,
            ] );


        }


        // GET ALL SUCURSALS
        $sucursals = Sucursal::all();
        return view('auth.register', ['sucursals' => $sucursals] );
    }


    protected function create(array $data)
    {
        return User::create([
            'user_name' => $data['user_name'],
            'apellido' => $data['apellido'],
            'email' => $data['email'],
            'domicilio' => $data['domicilio'],
            'password' => Hash::make($data['password']),
            'ID_sucursal1' => $data['ID_sucursal1'],
        ]);
    }
}
