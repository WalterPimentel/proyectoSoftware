<?php

namespace App\Http\Controllers;

use App\Models\{acciones_mejora, comisiones_areas, comunicar_plan_fd, cronograma, cuadro_necesidades, 
                informe_gestion, monitoreo_pfd, plan_fd, revision_pfd, tdr, tipo_costo, tipo_recurso};
use Illuminate\Http\Request;

class GestionPIController extends Controller
{
    //indexs
    
    public function index(){

        $pfds = plan_fd::paginate();
        return view('gestionPI.index', compact('pfds'));
    }

    public function indexAccionesMejoras(){

        $accionesmejoras = acciones_mejora::paginate();
        return view('gestionPI/accionesmejoras.index', compact('accionesmejoras'));
    }

    public function indexComisiones(){

        $comisiones = comisiones_areas::paginate();
        return view('gestionPI/comisiones.index', compact('comisiones'));
    }

    public function indexComunicarPFD(){

        $comunicarpfd = comunicar_plan_fd::paginate();
        return view('gestionPI/comunicarpfd.index', compact('comunicarpfd'));
    }

    public function indexCronogramas(){

        $cronogramas = cronograma::paginate();
        return view('gestionPI/cronogramas.index', compact('cronogramas'));
    }

    public function indexCuadroNecesidades(){

        $cuadronecesidades = cuadro_necesidades::paginate();
        return view('gestionPI/cuadronecesidades.index', compact('cuadronecesidades'));
    }

    public function indexInformesGestion(){

        $informesgestion = informe_gestion::paginate();
        return view('gestionPI/informesgestion.index', compact('informesgestion'));
    }

    public function indexMonitoreosPFD(){

        $monitoreospfd = monitoreo_pfd::paginate();
        return view('gestionPI/monitoreospfd.index', compact('monitoreospfd'));
    }

    public function indexRevisionesPFD(){

        $revisionespfd = revision_pfd::paginate();
        return view('gestionPI/revisionespfd.index', compact('revisionespfd'));
    }

    public function indexTDR(){

        $tdr = tdr::paginate();
        return view('gestionPI/tdr.index', compact('tdr'));
    }

    public function indexTiposCostos(){

        $tiposcostos = tipo_costo::paginate();
        return view('gestionPI/tiposcostos.index', compact('tiposcostos'));
    }

    public function indexTiposRecursos(){

        $tiposrecursos = tipo_recurso::paginate();
        return view('gestionPI/tiposrecursos.index', compact('tiposrecursos'));
    }

    //creates

    public function create(){        
        return view('gestionPI.create');
    }

    public function createAccionesMejoras(){
        return view('gestionPI/accionesmejoras.create');
    }

    public function createComisiones(){
        return view('gestionPI/comisiones.create');
    }

    public function createComunicarPFD(){
        return view('gestionPI/comunicarpfd.create');
    }

    public function createCronogramas(){
        return view('gestionPI/cronogramas.create');
    }

    public function createCuadroNecesidades(){
        return view('gestionPI/cuadronecesidades.create');
    }

    public function createInformesGestion(){
        return view('gestionPI/informesgestion.create');
    }

    public function createMonitoreosPFD(){
        return view('gestionPI/monitoreospfd.create');
    }

    public function createRevisionesPFD(){
        return view('gestionPI/revisionespfd.create');
    }

    public function createTDR(){
        return view('gestionPI/tdr.create');
    }

    public function createTiposCostos(){
        return view('gestionPI/tiposcostos.create');
    }

    public function createTiposRecursos(){
        return view('gestionPI/tiposrecursos.create');
    }

    //shows

    public function show($pfd){
        
        $pfd = plan_fd::find($pfd);
        return view('practicas.show', compact('pfd'));
    }

    public function showAccionesMejoras($accionmejora){

        $accionmejora = acciones_mejora::find($accionmejora);
        return view('gestionPI/accionesmejoras.show', compact('accionmejora'));
    }

    public function showComisiones($comision){

        $comision = comisiones_areas::find($comision);
        return view('gestionPI/comisiones.show', compact('comision'));
    }

    public function showComunicarPFD($comunicarpfd){

        $comunicarpfd = comunicar_plan_fd::find($comunicarpfd);
        return view('gestionPI/comunicarpfd.show', compact('comunicarpfd'));
    }

    public function showCronogramas($cronograma){

        $cronograma = cronograma::find($cronograma);
        return view('gestionPI/cronogramas.show', compact('cronograma'));
    }

    public function showCuadroNecesidades($cuadronecesidad){

        $cuadronecesidad = cuadro_necesidades::find($cuadronecesidad);
        return view('gestionPI/cuadronecesidades.show', compact('cuadronecesidad'));
    }

    public function showInformesGestion($informegestion){

        $informegestion = informe_gestion::find($informegestion);
        return view('gestionPI/informesgestion.show', compact('informegestion'));
    }

    public function showMonitoreosPFD($monitoreopfd){

        $monitoreopfd = monitoreo_pfd::find($monitoreopfd);
        return view('gestionPI/monitoreospfd.show', compact('monitoreopfd'));
    }

    public function showRevisionesPFD($revisionpfd){

        $revisionpfd = revision_pfd::find($revisionpfd);
        return view('gestionPI/revisionespfd.show', compact('revisionpfd'));
    }

    public function showTDR($tdr){

        $tdr = tdr::find($tdr);
        return view('gestionPI/tdr.show', compact('tdr'));
    }

    public function showTiposCostos($tipocosto){

        $tipocosto = tipo_costo::find($tipocosto);
        return view('gestionPI/tiposcostos.show', compact('tipocosto'));
    }

    public function showTiposRecursos($tiporecurso){

        $tiporecurso = tipo_recurso::find($tiporecurso);
        return view('gestionPI/tiposrecursos.show', compact('tiporecurso'));
    }

}
