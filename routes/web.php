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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/Inicio', function () {
    return view('inicio', ['section' => 'Inicio']);
});


Route::get('/Servicios', function () {
    return view('servicios');
});

Route::get('/Servicios/CCTV', function () {
    return view('servicios_cctv');
});

Route::get('/Servicios/CONTROL-DE-ACCESOS', function () {
    return view('servicios_control_accesos');
});

Route::get('/Servicios/CLIMATIZACION', function () {
    return view('servicios_climatizacion');
});


Route::get('/Servicios/PROTECCIONES-ELECTRICAS', function () {
    return view('servicios_protecciones_electricas');
});



Route::get('/Servicios/INTERNET', function () {
    return view('servicios_internet');
});



Route::get('/Servicios/PANELES-SOLARES', function () {
    return view('servicios_paneles_solares');
});


Route::get('/Servicios/CABLEADO-ESTRUCTURADO', function () {
    return view('servicios_cableado_estructurado');
});



Route::get('/Servicios/SENALIZACION-LED', function () {
    return view('servicios_senalizacion_led');
});


Route::get('/Servicios/EQUIPOS-ELEVACION', function () {
    return view('servicios_equipos_elevacion');
});

Route::get('/Contacto', function () {
    return view('contacto');
});


Route::get('/TiendaOnline', function () {
    return view('soarmx.com');
});

Route::get('/Contratacion', function () {
    return view('contratacion_internet');
});
