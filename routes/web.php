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
    Route::get('practicas/{practica}', 'show')->name('practicas.show');
    Route::get('practicas/docentes/{docente}', 'showDocentes')->name('docentes.show');
    Route::get('practicas/empresas/{empresa}', 'showEmpresas')->name('empresas.show');
    Route::get('practicas/estudiantes/{estudiante}', 'showEstudiantes')->name('estudiantes.show');
    Route::get('practicas/etapas/{etapa}', 'showEtapas')->name('etapas.show');
    Route::get('practicas/practicasrequisitos/{practicaRequisito}', 'showPracticasRequisitos')->name('practicasrequisitos.show');
    Route::get('practicas/requisitos/{requisito}', 'showRequisitos')->name('requisitos.show');

    //edits
    Route::get('practicas/{practica}/edit', 'edit')->name('practicas.edit');
    Route::get('practicas/docentes/{docente}/edit', 'editDocentes')->name('docentes.edit');
    Route::get('practicas/empresas/{empresa}/edit', 'editEmpresas')->name('empresas.edit');
    Route::get('practicas/estudiantes/{estudiante}/edit', 'editEstudiantes')->name('estudiantes.edit');
    Route::get('practicas/etapas/{etapa}/edit', 'editEtapas')->name('etapas.edit');
    Route::get('practicas/practicasrequisitos/{practicaRequisito}/edit', 'editPracticasRequisitos')->name('practicasrequisitos.edit');
    Route::get('practicas/requisitos/{requisito}/edit', 'editRequisitos')->name('requisitos.edit');

    //updates
    Route::put('practicas/{practica}', 'update')->name('practicas.update');
    Route::put('practicas/docentes/{docente}', 'updateDocentes')->name('docentes.update');
    Route::put('practicas/empresas/{empresa}', 'updateEmpresas')->name('empresas.update');
    Route::put('practicas/estudiantes/{estudiante}', 'updateEstudiantes')->name('estudiantes.update');
    Route::put('practicas/etapas/{etapa}', 'updateEtapas')->name('etapas.update');
    Route::put('practicas/practicasrequisitos/{practicaRequisito}', 'updatePracticasRequisitos')->name('practicasrequisitos.update');
    Route::put('practicas/requisitos/{requisito}', 'updateRequisitos')->name('requisitos.update');

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
    Route::get('gestionPI/{pfd}', 'show')->name('gestionPI.show');
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

    //edits
    Route::get('gestionPI/{pfd}/edit', 'edit')->name('gestionPI.edit');
    Route::get('gestionPI/accionesmejoras/{accionmejora}/edit', 'editAccionesMejoras')->name('accionesmejoras.edit');
    Route::get('gestionPI/comisiones/{comision}/edit', 'editComisiones')->name('comisiones.edit');
    Route::get('gestionPI/comunicarpfd/{comunicarpfd}/edit', 'editComunicarPFD')->name('comunicarpfd.edit');
    Route::get('gestionPI/cronogramas/{cronograma}/edit', 'editCronogramas')->name('cronogramas.edit');
    Route::get('gestionPI/cuadronecesidades/{cuadronecesidad}/edit', 'editCuadroNecesidades')->name('cuadronecesidades.edit');
    Route::get('gestionPI/informesgestion/{informegestion}/edit', 'editInformesGestion')->name('informesgestion.edit');
    Route::get('gestionPI/monitoreospfd/{monitoreopfd}/edit', 'editMonitoreosPFD')->name('monitoreospfd.edit');
    Route::get('gestionPI/revisionespfd/{revisionpfd}/edit', 'editRevisionesPFD')->name('revisionespfd.edit');
    Route::get('gestionPI/tdr/{tdr}/edit', 'editTDR')->name('tdr.edit');
    Route::get('gestionPI/tiposcostos/{tipocosto}/edit', 'editTiposCostos')->name('tiposcostos.edit');
    Route::get('gestionPI/tiposrecursos/{tiporecurso}/edit', 'editTiposRecursos')->name('tiposrecursos.edit');

    //updates
    Route::put('gestionPI/{pfd}', 'update')->name('gestionPI.update');
    Route::put('gestionPI/accionesmejoras/{accionmejora}', 'updateAccionesMejoras')->name('accionesmejoras.update');
    Route::put('gestionPI/comisiones/{comision}', 'updateComisiones')->name('comisiones.update');
    Route::put('gestionPI/comunicarpfd/{comunicarpfd}', 'updateComunicarPFD')->name('comunicarpfd.update');
    Route::put('gestionPI/cronogramas/{cronograma}', 'updateCronogramas')->name('cronogramas.update');
    Route::put('gestionPI/cuadronecesidades/{cuadronecesidad}', 'updateCuadroNecesidades')->name('cuadronecesidades.update');
    Route::put('gestionPI/informesgestion/{informegestion}', 'updateInformesGestion')->name('informesgestion.update');
    Route::put('gestionPI/monitoreospfd/{monitoreopfd}', 'updateMonitoreosPFD')->name('monitoreospfd.update');
    Route::put('gestionPI/revisionespfd/{revisionpfd}', 'updateRevisionesPFD')->name('revisionespfd.update');
    Route::put('gestionPI/tdr/{tdr}', 'updateTDR')->name('tdr.update');
    Route::put('gestionPI/tiposcostos/{tipocosto}', 'updateTiposCostos')->name('tiposcostos.update');
    Route::put('gestionPI/tiposrecursos/{tiporecurso}', 'updateTiposRecursos')->name('tiposrecursos.update');

});
