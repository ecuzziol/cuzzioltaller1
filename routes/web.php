<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});
Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});
Route::get('/contacto', function () { 
    return view('contacto'); 
});
Route::get('/comercializacion', function () { 
    return view('comercializacion'); 
});
Route::get('/terminos', function () { 
    return view('terminos'); 
});
Route::get('/catalogo', [ProductoController::class, 'ObtenerTodos']);
Route::get('/consultas', function () { 
    return view('consultas'); 
});
Route::post('/contacto', [ContactoController::class, 'procesarConsulta']);