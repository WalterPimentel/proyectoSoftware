<?php

namespace App\Http\Controllers;

use App\Models\{acciones_mejora, comisiones_areas, comunicar_plan_fd, cronograma, cuadro_necesidades, 
                informe_gestion, monitoreo_pfd, plan_fd, revision_pfd, tdr, tipo_costo, tipo_recurso};
use Illuminate\Http\Request;

class GestionPIController extends Controller
{
    //indexs
    
    public function index(){

        $pfds = plan_fd::orderby('id', 'desc')->paginate();
        return view('gestionPI.index', compact('pfds'));
    }

    public function indexAccionesMejoras(){

        $accionesmejoras = acciones_mejora::orderby('id', 'desc')->paginate();
        return view('gestionPI/accionesmejoras.index', compact('accionesmejoras'));
    }

    public function indexComisiones(){

        $comisiones = comisiones_areas::orderby('id', 'desc')->paginate();
        return view('gestionPI/comisiones.index', compact('comisiones'));
    }

    public function indexComunicarPFD(){

        $comunicarpfd = comunicar_plan_fd::orderby('id', 'desc')->paginate();
        return view('gestionPI/comunicarpfd.index', compact('comunicarpfd'));
    }

    public function indexCronogramas(){

        $cronogramas = cronograma::orderby('id', 'desc')->paginate();
        return view('gestionPI/cronogramas.index', compact('cronogramas'));
    }

    public function indexCuadroNecesidades(){

        $cuadronecesidades = cuadro_necesidades::orderby('id', 'desc')->paginate();
        return view('gestionPI/cuadronecesidades.index', compact('cuadronecesidades'));
    }

    public function indexInformesGestion(){

        $informesgestion = informe_gestion::orderby('id', 'desc')->paginate();
        return view('gestionPI/informesgestion.index', compact('informesgestion'));
    }

    public function indexMonitoreosPFD(){

        $monitoreospfd = monitoreo_pfd::orderby('id', 'desc')->paginate();
        return view('gestionPI/monitoreospfd.index', compact('monitoreospfd'));
    }

    public function indexRevisionesPFD(){

        $revisionespfd = revision_pfd::orderby('id', 'desc')->paginate();
        return view('gestionPI/revisionespfd.index', compact('revisionespfd'));
    }

    public function indexTDR(){

        $tdr = tdr::orderby('id', 'desc')->paginate();
        return view('gestionPI/tdr.index', compact('tdr'));
    }

    public function indexTiposCostos(){

        $tiposcostos = tipo_costo::orderby('id', 'desc')->paginate();
        return view('gestionPI/tiposcostos.index', compact('tiposcostos'));
    }

    public function indexTiposRecursos(){

        $tiposrecursos = tipo_recurso::orderby('id', 'desc')->paginate();
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

    //stores

    public function store(Request $request){
        $planfd = new plan_fd();

        $planfd->idComision = $request->idComision;
        $planfd->idCuadroNecesidades = $request->idCuadroNecesidades;
        $planfd->idRevisionPFD = $request->idRevisionPFD;
        $planfd->idActaConsejoFacultad = $request->idActaConsejoFacultad;
        $planfd->idResponsableElaboracion = $request->idResponsableElaboracion;
        $planfd->idResponsableAprobacion = $request->idResponsableAprobacion;
        $planfd->descripcionPFD = $request->descripcionPFD;
        $planfd->fechaElaboracionPFD = $request->fechaElaboracionPFD;
        $planfd->fechaAprobacionPFD = $request->fechaAprobacionPFD;
        $planfd->yearPFD = $request->yearPFD;

        $planfd->save();

        return redirect()->route('gestionPI.show', $planfd);
        
    }

    public function storeAccionesMejoras(Request $request){
        $accionmejora = new acciones_mejora();

        $accionmejora->idComision = $request->idComision;
        $accionmejora->idPlanFD = $request->idPlanFD;
        $accionmejora->idMonitoreoPFD = $request->idMonitoreoPFD;
        $accionmejora->idTipoRecurso = $request->idTipoRecurso;
        $accionmejora->metasAM = $request->metasAM;
        $accionmejora->descripcionAM = $request->descripcionAM;

        $accionmejora->save();

        return redirect()->route('accionesmejoras.show', $accionmejora);
        
    }

    public function storeComisiones(Request $request){
        $comision = new comisiones_areas();

        $comision->idDocente = $request->idDocente;
        $comision->idAdministrativo = $request->idAdministrativo;
        $comision->nombreComision = $request->nombreComision;
        $comision->macroProcesoComision = $request->macroProcesoComision;
        $comision->procesoComision = $request->procesoComision;
        $comision->subprocesoComision = $request->subprocesoComision;
        $comision->periodoComision = $request->periodoComision;

        $comision->save();

        return redirect()->route('comisiones.show', $comision);
        
    }

    public function storeComunicarPFD(Request $request){
        $comunicarpfd = new comunicar_plan_fd();

        $comunicarpfd->idPlanFD = $request->idPlanFD;
        $comunicarpfd->idParteInteresada = $request->idParteInteresada;
        $comunicarpfd->descripcionComunicarPFD = $request->descripcionComunicarPFD;
        $comunicarpfd->medioComunicarPFD = $request->medioComunicarPFD;
        $comunicarpfd->fechaComunicarPFD = $request->fechaComunicarPFD;
        $comunicarpfd->horaComunicarPFD = $request->horaComunicarPFD;
        $comunicarpfd->observacionesComunicarPFD = $request->observacionesComunicarPFD;

        $comunicarpfd->save();

        return redirect()->route('comunicarpfd.show', $comunicarpfd);
        
    }

    public function storeCronogramas(Request $request){
        $cronograma = new cronograma();

        $cronograma->idPlanFD = $request->idPlanFD;
        $cronograma->idProyecto = $request->idProyecto;
        $cronograma->descripcionCronograma = $request->descripcionCronograma;

        $cronograma->save();

        return redirect()->route('cronogramas.show', $cronograma);
        
    }

    public function storeCuadroNecesidades(Request $request){
        $cuadronecesidad = new cuadro_necesidades();

        $cuadronecesidad->idComision = $request->idComision;
        $cuadronecesidad->idTipoRecurso = $request->idTipoRecurso;
        $cuadronecesidad->idTipoCosto = $request->idTipoCosto;
        $cuadronecesidad->idTDR = $request->idTDR;
        $cuadronecesidad->descripcionCuadroN = $request->descripcionCuadroN;
        $cuadronecesidad->cantidadCuadroN = $request->cantidadCuadroN;
        $cuadronecesidad->precioCuadroN = $request->precioCuadroN;

        $cuadronecesidad->save();

        return redirect()->route('cuadronecesidades.show', $cuadronecesidad);
        
    }

    public function storeInformesGestion(Request $request){
        $informegestion = new informe_gestion();

        $informegestion->idMonitoreoPFD = $request->idMonitoreoPFD;
        $informegestion->idResponsableElaboracion = $request->idResponsableElaboracion;
        $informegestion->descripcionIG = $request->descripcionIG;
        $informegestion->observacionesIG = $request->observacionesIG;

        $informegestion->save();

        return redirect()->route('informesgestion.show', $informegestion);
        
    }

    public function storeMonitoreosPFD(Request $request){
        $monitoreopfd = new monitoreo_pfd();

        $monitoreopfd->idAccionesMejora = $request->idAccionesMejora;
        $monitoreopfd->descripcionMPFD = $request->descripcionMPFD;
        $monitoreopfd->porcentajeAvanceMPFD = $request->porcentajeAvanceMPFD;

        $monitoreopfd->save();

        return redirect()->route('monitoreospfd.show', $monitoreopfd);
        
    }

    public function storeRevisionesPFD(Request $request){
        $revisionpfd = new revision_pfd();

        $revisionpfd->descripcionRPFD = $request->descripcionRPFD;
        $revisionpfd->observacionesRPFD = $request->observacionesRPFD;        

        $revisionpfd->save();

        return redirect()->route('revisionespfd.show', $revisionpfd);
        
    }

    public function storeTDR(Request $request){
        $tdr = new tdr();

        $tdr->idTipoRecurso = $request->idTipoRecurso;
        $tdr->mayorCuantiaTDR = $request->mayorCuantiaTDR;        
        $tdr->descripcionTDR = $request->descripcionTDR;
        $tdr->costoTDR = $request->costoTDR;

        $tdr->save();

        return redirect()->route('tdr.show', $tdr);
        
    }
    
    public function storeTiposCostos(Request $request){
        $tipocosto = new tipo_costo();

        $tipocosto->idTipoRecurso = $request->idTipoRecurso;
        $tipocosto->descripcionCosto = $request->descripcionCosto;        
        $tipocosto->observacionesCosto = $request->observacionesCosto;

        $tipocosto->save();

        return redirect()->route('tiposcostos.show', $tipocosto);
        
    }

    public function storeTiposRecursos(Request $request){
        $tiporecurso = new tipo_recurso();

        $tiporecurso->descripcionRecurso = $request->descripcionRecurso;

        $tiporecurso->save();

        return redirect()->route('tiposrecursos.show', $tiporecurso);
        
    }

    //shows

    public function show($pfd){
        
        $pfd = plan_fd::find($pfd);
        return view('gestionPI.show', compact('pfd'));
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
