<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/', function () {
//     return view('main');
// });
Route::get('/', [ProductoController::class, 'getAll'])->name('main');

Route::get('/productos', [ProductoController::class, 'getAll'])->name('viewAllProducts');
Route::post('/productos', [ProductoController::class, 'store'])->name('agregarProducto');


Route::get('/producto/{codigo}', [ProductoController::class, 'showOne'])->name('mostrarProducto');
Route::patch('/producto/{codigo}', [ProductoController::class, 'updateProducto'])->name('updateProducto');
Route::delete('/producto/delete/{codigo}', [ProductoController::class, 'deleteOne'])->name('eliminarProducto');


Auth::routes();


Route::get('/register', [RegisterController::class, 'getAllSucursales'])->name('register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'getAllProductos'])->name('home');
