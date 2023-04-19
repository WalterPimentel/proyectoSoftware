<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticaController;
use App\Http\Controllers\GestionPIController;

Route::get('/', HomeController::class);

//Rutas para las Gestión de Practicas Preprofesionales
Route::controller(PracticaController::class)->group(function(){
    Route::get('practicas', 'index');
    Route::get('practicas/create', 'create');
    Route::get('practicas/{procedimientos}', 'show');
});

//Rutas para la Gestión de Planificación Institucional
Route::controller(GestionPIController::class)->group(function(){
    Route::get('gestionPI', 'indexPI');
    Route::get('gestionPI/adminCPI/registroCN', 'registroCN');
    Route::get('gestionPI/adminCPI/registroIG', 'registroIG');
    Route::get('gestionPI/adminCPI/registroPFD', 'registroPFD');
    Route::get('gestionPI/secreD/registroCNPFD', 'registroCNPFD');
    Route::get('gestionPI/adminCPI/{publicacion}', 'showPFD');
});

?>