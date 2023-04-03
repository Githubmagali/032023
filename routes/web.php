<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('productos', [ProductoController::class,'index']);
Route::get('productos/create', [ProductoController::class,'create']);//va antes del sho para que no me tome el parametro{producto}
Route::get('productos/{id}', [ProductoController::class,'show']); 
Route::post('productos', [ProductoController::class,'store']);
Route::get('productos/{id}/edit', [ProductoController::class,'edit']);
Route::put('productos/{id}', [ProductoController::class,'update']);
Route::delete('productos/{id}', [ProductoController::class,'destroy']);

//Route::get('usuarios', [UsuarioController::class,'index']);

//Route::resource('clientes', [ClienteController::class]);


 
//resouce te muestra todos los mensajes de todas las clases


//Route::get('clientes/{id?}', function($id='juan'){
//return "Cliente $id";
//});
//Route::get('clientes/{id}/venta/{idVenta?}', function($id, $idVenta = null){
    //if ($idVenta == null){
        //return "Error";
    //}
//return "El cliente $id realizo la venta $idVenta";
//});