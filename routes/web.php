<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/Home', function () {
    return view('1_Inicio');
});
Route::get('/Sesion', function () {
    return view('0_Sesion');
});
Route::get('/Usuario', function () {
    return view('8_Usuario');
});
Route::get('/Formas', function () {
    return view('Formas');
});
Route::resource('/Cliente', 'ClienteController');
Route::resource('/Empleado', 'EmpleadoController');
Route::resource('/Estandar_de_produccion', 'Estandar_de_produccionController');
Route::resource('/Gerente', 'GerenteController');
Route::resource('/Maquinaria', 'MaquinariaController');
Route::resource('/Materia_prima', 'Materia_primaController');
Route::resource('/Oreden_detrabajo', 'Oreden_detrabajoController');
Route::resource('/Oreden_detrabajodescrip', 'Oreden_detrabajodescripController');
Route::resource('/Producto', 'ProductoController');
Route::resource('/Venta_descripcions', 'Venta_descripcionController');
Route::resource('/Venta', 'VentaController');



