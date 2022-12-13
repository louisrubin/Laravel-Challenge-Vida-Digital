<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// PRODUCTOS

Route::get('/productos', [ProductoController::class, 'allRecords'])->name('viewAllProducts');
Route::get('/productos/create', [ProductoController::class, 'createProductoPage'])->name('createProductoPage');
Route::get('/producto/{codigo}', [ProductoController::class, 'showOne'])->name('mostrarProducto');
Route::post('/producto/create', [ProductoController::class, 'createProducto'])->name('agregarProducto');
Route::patch('/update/{codigo}', [ProductoController::class, 'updateProducto'])->name('updateProducto');
Route::delete('/delete/{codigo}', [ProductoController::class, 'deleteProducto'])->name('eliminarProducto');















// EMPRESAS

Route::get('/empresas', [EmpresaController::class, 'allRecords'])->name('viewAllEmpresas');
Route::get('/empresa/create', [EmpresaController::class, 'createEmpresaPage'])->name('createEmpresaPage');
Route::get('/empresa/{id}', [EmpresaController::class, 'showOne'])->name('mostrarEmpresa');
Route::post('/empresa/create', [EmpresaController::class, 'createEmpresa'])->name('createEmpresa');
Route::patch('/update/{id}', [EmpresaController::class, 'updateEmpresa'])->name('updateEmpresa');
Route::delete('/delete/{id}', [EmpresaController::class, 'deleteEmpresa'])->name('eliminarEmpresa');






















// SUCURSALS

Route::get('/sucursals', [SucursalController::class, 'allRecords'])->name('viewAllSucursals');
Route::get('/sucursals/create', [ProductoController::class, 'createSucursalPage'])->name('createSucursalPage');
Route::get('/sucursal/{id}', [SucursalController::class, 'showOne'])->name('mostrarSucursal');
Route::post('/sucursals', [SucursalController::class, 'createSucursal'])->name('agregarSucursal');
Route::patch('/update/{id}', [SucursalController::class, 'updateSucursal'])->name('updateSucursal');
Route::delete('/delete/{id}', [SucursalController::class, 'deleteSucursal'])->name('eliminarSucursal');



// USERS

Route::get('/users', [EmpleadoController::class, 'allRecords'])->name('viewAllUsers');
Route::get('/user/{id}', [EmpleadoController::class, 'showOne'])->name('mostrarUser');
Route::post('/users', [EmpleadoController::class, 'createUser'])->name('agregarUser');
Route::patch('/user/{id}', [EmpleadoController::class, 'updateUser'])->name('updateUser');
Route::delete('/user/delete/{id}', [EmpleadoController::class, 'deleteUser'])->name('eliminarUser');


// EN_VENTAS


// ENCARGOS


// ACTUALIZAR_STOCKS


// STOCKS



// SYSTEM
Auth::routes();
Route::get('/', [RegisterController::class, 'index']);
Route::get('/register', [RegisterController::class, 'getAllSucursales'])->name('register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'getEntidades' ])->name('home');
