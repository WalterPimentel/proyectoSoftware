<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\{
    AccionesMejoraController,
    ComisionController,
    ComunicarPFDController,
    CronogramaController,
    CuadroNecesidadController,
    DocenteController,
    EmpresaController,
    EstudianteController,
    EtapaController,
    HomeController, 
    PracticaController, 
    GestionPIController,
    InformesGestionController,
    MonitoreosPFDController,
    PracticasRequisitoController,
    RequisitoController,
    RevisionesPFDController,
    TDRController,
    TiposCostoController,
    TiposRecursoController,
    Admin\UserController,
    Admin\HomeController as AdminHomeController
};

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth:sanctum');
Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home')->middleware('auth:sanctum');

Route::resource('users', UserController::class)->middleware('auth:sanctum');

Route::resource('gestionPI', GestionPIController::class)->middleware('auth:sanctum');
Route::resource('accionesmejoras', AccionesMejoraController::class)->middleware('auth:sanctum');
Route::resource('comisiones', ComisionController::class)->middleware('auth:sanctum');
Route::resource('comunicarpfd', ComunicarPFDController::class)->middleware('auth:sanctum');
Route::resource('cronogramas', CronogramaController::class)->middleware('auth:sanctum');
Route::resource('cuadronecesidades', CuadroNecesidadController::class)->middleware('auth:sanctum');
Route::resource('informesgestion', InformesGestionController::class)->middleware('auth:sanctum');
Route::resource('monitoreospfd', MonitoreosPFDController::class)->middleware('auth:sanctum');
Route::resource('revisionespfd', RevisionesPFDController::class)->middleware('auth:sanctum');
Route::resource('tdr', TDRController::class)->middleware('auth:sanctum');
Route::resource('tiposcostos', TiposCostoController::class)->middleware('auth:sanctum');
Route::resource('tiposrecursos', TiposRecursoController::class)->middleware('auth:sanctum');

Route::resource('practicas', PracticaController::class)->middleware('auth:sanctum');
Route::resource('docentes', DocenteController::class)->middleware('auth:sanctum');
Route::resource('empresas', EmpresaController::class)->middleware('auth:sanctum');
Route::resource('estudiantes', EstudianteController::class)->middleware('auth:sanctum');
Route::resource('etapas', EtapaController::class)->middleware('auth:sanctum');
Route::resource('practicasrequisitos', PracticasRequisitoController::class)->middleware('auth:sanctum');
Route::resource('requisitos', RequisitoController::class)->middleware('auth:sanctum');

Route::view('nosotros', 'nosotros')->name('nosotros')->middleware('auth:sanctum');
