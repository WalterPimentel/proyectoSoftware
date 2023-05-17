<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{HomeController, PracticaController, GestionPIController};

Route::get('/', HomeController::class)->name('home');

//Rutas para las Gestión de Practicas Preprofesionales
Route::controller(PracticaController::class)->group(function(){

    //indexs
    Route::get('practicas', 'index')->name('practicas.index');
    Route::get('practicas/docentes', 'indexDocentes')->name('docentes.index');
    Route::get('practicas/empresas', 'indexEmpresas')->name('empresas.index');
    Route::get('practicas/estudiantes', 'indexEstudiantes')->name('estudiantes.index');
    Route::get('practicas/etapas', 'indexEtapas')->name('etapas.index');
    Route::get('practicas/practicasrequisitos', 'indexPracticasRequisitos')->name('practicasrequisitos.index');
    Route::get('practicas/requisitos', 'indexRequisitos')->name('requisitos.index');

    //creates
    Route::get('practicas/create', 'create')->name('practicas.create');
    Route::get('practicas/docentes/create', 'createDocentes')->name('docentes.create');
    Route::get('practicas/empresas/create', 'createEmpresas')->name('empresas.create');
    Route::get('practicas/estudiantes/create', 'createEstudiantes')->name('estudiantes.create');
    Route::get('practicas/etapas/create', 'createEtapas')->name('etapas.create');
    Route::get('practicas/practicasrequisitos/create', 'createPracticasRequisitos')->name('practicasrequisitos.create');
    Route::get('practicas/requisitos/create', 'createRequisitos')->name('requisitos.create');

    //stores
    Route::post('practicas', 'store')->name('practicas.store');
    Route::post('practicas/docentes', 'storeDocentes')->name('docentes.store');
    Route::post('practicas/empresas', 'storeEmpresas')->name('empresas.store');
    Route::post('practicas/estudiantes', 'storeEstudiantes')->name('estudiantes.store');
    Route::post('practicas/etapas', 'storeEtapas')->name('etapas.store');
    Route::post('practicas/practicasrequisitos', 'storePracticasRequisitos')->name('practicasrequisitos.store');
    Route::post('practicas/requisitos', 'storeRequisitos')->name('requisitos.store');

    //shows
    Route::get('practicas/{idPractica}', 'show')->name('practicas.show');
    Route::get('practicas/docentes/{docente}', 'showDocentes')->name('docentes.show');
    Route::get('practicas/empresas/{empresa}', 'showEmpresas')->name('empresas.show');
    Route::get('practicas/estudiantes/{estudiante}', 'showEstudiantes')->name('estudiantes.show');
    Route::get('practicas/etapas/{etapa}', 'showEtapas')->name('etapas.show');
    Route::get('practicas/practicasrequisitos/{practicarequisito}', 'showPracticasRequisitos')->name('practicasrequisitos.show');
    Route::get('practicas/requisitos/{requisito}', 'showRequisitos')->name('requisitos.show');
});

//Rutas para la Gestión de Planificación Institucional
Route::controller(GestionPIController::class)->group(function(){

    //indexs
    Route::get('gestionPI', 'index')->name('gestionPI.index');
    Route::get('gestionPI/accionesmejoras', 'indexAccionesMejoras')->name('accionesmejoras.index');
    Route::get('gestionPI/comisiones', 'indexComisiones')->name('comisiones.index');
    Route::get('gestionPI/comunicarpfd', 'indexComunicarPFD')->name('comunicarpfd.index');
    Route::get('gestionPI/cronogramas', 'indexCronogramas')->name('cronogramas.index');
    Route::get('gestionPI/cuadronecesidades', 'indexCuadroNecesidades')->name('cuadronecesidades.index');
    Route::get('gestionPI/informesgestion', 'indexInformesGestion')->name('informesgestion.index');
    Route::get('gestionPI/monitoreospfd', 'indexMonitoreosPFD')->name('monitoreospfd.index');
    Route::get('gestionPI/revisionespfd', 'indexRevisionesPFD')->name('revisionespfd.index');
    Route::get('gestionPI/tdr', 'indexTDR')->name('tdr.index');
    Route::get('gestionPI/tiposcostos', 'indexTiposCostos')->name('tiposcostos.index');
    Route::get('gestionPI/tiposrecursos', 'indexTiposRecursos')->name('tiposrecursos.index');

    //creates
    Route::get('gestionPI/create', 'create')->name('gestionPI.create');
    Route::get('gestionPI/accionesmejoras/create', 'createAccionesMejoras')->name('accionesmejoras.create');
    Route::get('gestionPI/comisiones/create', 'createComisiones')->name('comisiones.create');
    Route::get('gestionPI/comunicarpfd/create', 'createComunicarPFD')->name('comunicarpfd.create');
    Route::get('gestionPI/cronogramas/create', 'createCronogramas')->name('cronogramas.create');
    Route::get('gestionPI/cuadronecesidades/create}', 'createCuadroNecesidades')->name('cuadronecesidades.create');
    Route::get('gestionPI/informesgestion/create', 'createInformesGestion')->name('informesgestion.create');
    Route::get('gestionPI/monitoreospfd/create', 'createMonitoreosPFD')->name('monitoreospfd.create');
    Route::get('gestionPI/revisionespfd/create', 'createRevisionesPFD')->name('revisionespfd.create');
    Route::get('gestionPI/tdr/create', 'createTDR')->name('tdr.create');
    Route::get('gestionPI/tiposcostos/create', 'createTiposCostos')->name('tiposcostos.create');
    Route::get('gestionPI/tiposrecursos/create', 'createTiposRecursos')->name('tiposrecursos.create');

    //stores
    Route::post('gestionPI', 'store')->name('gestionPI.store');
    Route::post('gestionPI/accionesmejoras', 'storeAccionesMejoras')->name('accionesmejoras.store');
    Route::post('gestionPI/comisiones', 'storeComisiones')->name('comisiones.store');
    Route::post('gestionPI/comunicarpfd', 'storeComunicarPFD')->name('comunicarpfd.store');
    Route::post('gestionPI/cronogramas', 'storeCronogramas')->name('cronogramas.store');
    Route::post('gestionPI/cuadronecesidades', 'storeCuadroNecesidades')->name('cuadronecesidades.store');
    Route::post('gestionPI/informesgestion', 'storeInformesGestion')->name('informesgestion.store');
    Route::post('gestionPI/monitoreospfd', 'storeMonitoreosPFD')->name('monitoreospfd.store');
    Route::post('gestionPI/revisionespfd', 'storeRevisionesPFD')->name('revisionespfd.store');
    Route::post('gestionPI/tdr', 'storeTDR')->name('tdr.store');
    Route::post('gestionPI/tiposcostos', 'storeTiposCostos')->name('tiposcostos.store');
    Route::post('gestionPI/tiposrecursos', 'storeTiposRecursos')->name('tiposrecursos.store');

    //shows
    Route::get('gestionPI/{idPlanFD}', 'show')->name('gestionPI.show');
    Route::get('gestionPI/accionesmejoras/{accionmejora}', 'showAccionesMejoras')->name('accionesmejoras.show');
    Route::get('gestionPI/comisiones/{comision}', 'showComisiones')->name('comisiones.show');
    Route::get('gestionPI/comunicarpfd/{comunicarpfd}', 'showComunicarPFD')->name('comunicarpfd.show');
    Route::get('gestionPI/cronogramas/{cronograma}', 'showCronogramas')->name('cronogramas.show');
    Route::get('gestionPI/cuadronecesidades/{cuadronecesidad}', 'showCuadroNecesidades')->name('cuadronecesidades.show');
    Route::get('gestionPI/informesgestion/{informegestion}', 'showInformesGestion')->name('informesgestion.show');
    Route::get('gestionPI/monitoreospfd/{monitoreopfd}', 'showMonitoreosPFD')->name('monitoreospfd.show');
    Route::get('gestionPI/revisionespfd/{revisionpfd}', 'showRevisionesPFD')->name('revisionespfd.show');
    Route::get('gestionPI/tdr/{tdr}', 'showTDR')->name('tdr.show');
    Route::get('gestionPI/tiposcostos/{tipocosto}', 'showTiposCostos')->name('tiposcostos.show');
    Route::get('gestionPI/tiposrecursos/{tiporecurso}', 'showTiposRecursos')->name('tiposrecursos.show');

});
