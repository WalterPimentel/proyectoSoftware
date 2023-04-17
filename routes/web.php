<?php

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
    return "Bienvenido a la Página Principal";
});

Route::get('practicas', function(){
    return "Bienvenido a la Gestión de Prácticas Preprofesionales";
});

Route::get('practicas/create', function(){
    return "En esta página podras crear un nuevo registro.";
});

Route::get('practicas/{procedimiento}/{registro?}', function($procedimiento, $registro = null){
    if($registro){
        return "Bienvenido al registro: $registro, del procedimiento $procedimiento";
    }else{
        return "Bienvenido al procedimiento: $procedimiento";
    }
});