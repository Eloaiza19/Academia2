<?php

use Illuminate\Support\Facades\Route;
//Primero se invoca la clase con su ruta
use App\Http\Controllers\MiControlador;

use App\Http\Controllers\HeladeriaControler;

use App\Http\Controllers\ControladorPrecios;

use App\Http\Controllers\CursoController;
use Illuminate\Pagination\Cursor;

use App\Http\Controllers\DocenteController;

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

Route::get('/docentes/create', function () {
    return view('docentes.create');
});

Route::get('/', function () {
    return view('cursos.bienvenido');
});

Route::get('/cursos/nosotros', function () {
    return view('cursos.nosotros');
});

Route::get('miruta', function() {
   return 'Estoy en Laravel';
});

//Los parametros van entre llaves
Route::get('/minombre/{nombre}', function($nombre) {
    return 'Hola, soy ' . $nombre;
});

 //Ruta llamada suma. el resultado sera: La suma de a + b es:
Route::get('/suma/{a}/{b}', function($a, $b) {
    return 'El resultado es ' . $a+$b;
});

//Menciono la clase y el metodo como un array
//debo usar la palabra reservada class
//El metodo va entre comilla simple
Route::get('/rutamulti/{a}/{b}',[MiControlador::class,'multipli']);

//Heladeria
Route::get('/tiendahelados/{a}',[HeladeriaControler::class,'totalHelado']);

//Precios
Route::get('/precio/{a}',[ControladorPrecios::class,'descuento']);

//Iva
Route::get('/iva/{a}/{b}',[ControladorPrecios::class,'getIVA']);

Route::resource('cursos', CursoController::class);

Route::resource('docentes', DocenteController::class);
