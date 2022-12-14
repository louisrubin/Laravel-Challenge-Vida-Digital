<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;

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
Route::patch('/producto/update/{codigo}', [ProductoController::class, 'updateProducto'])->name('updateProducto');
Route::delete('/producto/delete/{codigo}', [ProductoController::class, 'deleteProducto'])->name('eliminarProducto');



// EMPRESAS

Route::get('/empresas', [EmpresaController::class, 'getAllEmpresas'])->name('viewAllEmpresas');
Route::get('/empresa/create', [EmpresaController::class, 'createEmpresaPage'])->name('createEmpresaPage');
Route::get('/empresa/update/{id}', [EmpresaController::class, 'updateEmpresaPage'])->name('mostrarEmpresa');
Route::get('/empresa/sucursales/{id}', [EmpresaController::class, 'allDataOfEmpresa'])->name('allDataOfEmpresa');
Route::post('/empresa/create', [EmpresaController::class, 'createEmpresa'])->name('createEmpresa');
Route::patch('/empresa/update/{id}', [EmpresaController::class, 'updateEmpresa'])->name('updateEmpresa');
Route::delete('/empresa/delete/{id}', [EmpresaController::class, 'deleteEmpresa'])->name('eliminarEmpresa');






















// SUCURSALS

Route::get('/sucursals/all', [SucursalController::class, 'getAllSucursals'])->name('viewAllSucursals');
Route::get('/sucursals/create', [SucursalController::class, 'createSucursalPage'])->name('createSucursalPage');
Route::get('/sucursal/{id}', [SucursalController::class, 'allDataOfSucursal'])->name('allDataOfSucursal');
Route::post('/sucursal', [SucursalController::class, 'createSucursal'])->name('createSucursal');
Route::patch('/sucursal/update/{id}', [SucursalController::class, 'updateSucursal'])->name('updateSucursal');
Route::delete('/sucursal/delete/{id}', [SucursalController::class, 'deleteSucursal'])->name('eliminarSucursal');



















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
Route::get('/', [Controller::class, 'backToHome'])->name('backToHome');
Route::get('/register', [RegisterController::class, 'getAllSucursales'])->name('register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'getEntidades' ])->name('home');
