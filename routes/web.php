<?php

use Illuminate\Support\Facades\Route;

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
    Admin\HomeController as AdminHomeController
};

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');

Route::resource('practicas', PracticaController::class);
Route::resource('docentes', DocenteController::class);
Route::resource('empresas', EmpresaController::class);
Route::resource('estudiantes', EstudianteController::class);
Route::resource('etapas', EtapaController::class);
Route::resource('practicasrequisitos', PracticasRequisitoController::class);
Route::resource('requisitos', RequisitoController::class);

Route::resource('gestionPI', GestionPIController::class);
Route::resource('accionesmejoras', AccionesMejoraController::class);
Route::resource('comisiones', ComisionController::class);
Route::resource('comunicarpfd', ComunicarPFDController::class);
Route::resource('cronogramas', CronogramaController::class);
Route::resource('cuadronecesidades', CuadroNecesidadController::class);
Route::resource('informesgestion', InformesGestionController::class);
Route::resource('monitoreospfd', MonitoreosPFDController::class);
Route::resource('revisionespfd', RevisionesPFDController::class);
Route::resource('tdr', TDRController::class);
Route::resource('tiposcostos', TiposCostoController::class);
Route::resource('tiposrecursos', TiposRecursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');
