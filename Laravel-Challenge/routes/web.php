<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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
//     return view('main');
// });


Route::get('/login', function () {
    return view('login');
});

Route::get('/producto/agregar', function () {
    return view('main');
});

Route::get('/', [ProductoController::class, 'getAll'])->name('selectAll');
Route::post('/', [ProductoController::class, 'store'])->name('agregarProducto');


Route::delete('/main', [ProductoController::class, 'store'])->name('productos-destroy');