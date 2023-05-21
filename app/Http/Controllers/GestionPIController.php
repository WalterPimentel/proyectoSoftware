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

        $request->validate([
            'idComision' => 'required',
            'idCuadroNecesidades' => 'required',
            'idRevisionPFD' => 'required',
            'idActaConsejoFacultad' => 'required',
            'idResponsableElaboracion' => 'required',
            'idResponsableAprobacion' => 'required',
            'descripcionPFD' => 'required',
            'fechaElaboracionPFD' => 'required',
            'fechaAprobacionPFD' => 'required',
            'yearPFD' => 'required'            
        ]);

        $pfd = new plan_fd();

        $pfd->idComision = $request->idComision;
        $pfd->idCuadroNecesidades = $request->idCuadroNecesidades;
        $pfd->idRevisionPFD = $request->idRevisionPFD;
        $pfd->idActaConsejoFacultad = $request->idActaConsejoFacultad;
        $pfd->idResponsableElaboracion = $request->idResponsableElaboracion;
        $pfd->idResponsableAprobacion = $request->idResponsableAprobacion;
        $pfd->descripcionPFD = $request->descripcionPFD;
        $pfd->fechaElaboracionPFD = $request->fechaElaboracionPFD;
        $pfd->fechaAprobacionPFD = $request->fechaAprobacionPFD;
        $pfd->yearPFD = $request->yearPFD;

        $pfd->save();

        return redirect()->route('gestionPI.show', $pfd);
        
    }

    public function storeAccionesMejoras(Request $request){

        $request->validate([
            'idComision' => 'required',
            'idPlanFD' => 'required',
            'idMonitoreoPFD' => 'required',
            'idTipoRecurso' => 'required',
            'metasAM' => 'required',
            'descripcionAM' => 'required'         
        ]);

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

        $request->validate([
            'idDocente' => 'required',
            'idAdministrativo' => 'required',
            'nombreComision' => 'required',
            'macroProcesoComision' => 'required',
            'procesoComision' => 'required',
            'subprocesoComision' => 'required',
            'periodoComision' => 'required'           
        ]);

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

        $request->validate([
            'idPlanFD' => 'required',
            'idParteInteresada' => 'required',
            'descripcionComunicarPFD' => 'required',
            'medioComunicarPFD' => 'required',
            'fechaComunicarPFD' => 'required',
            'horaComunicarPFD' => 'required',
            'observacionesComunicarPFD' => 'required'       
        ]);

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

        $request->validate([
            'idPlanFD' => 'required',
            'idProyecto' => 'required',
            'descripcionCronograma' => 'required'         
        ]);

        $cronograma = new cronograma();

        $cronograma->idPlanFD = $request->idPlanFD;
        $cronograma->idProyecto = $request->idProyecto;
        $cronograma->descripcionCronograma = $request->descripcionCronograma;

        $cronograma->save();

        return redirect()->route('cronogramas.show', $cronograma);
        
    }

    public function storeCuadroNecesidades(Request $request){

        $request->validate([
            'idComision' => 'required',
            'idTipoRecurso' => 'required',
            'idTipoCosto' => 'required',
            'idTDR' => 'required',
            'descripcionCuadroN' => 'required',
            'cantidadCuadroN' => 'required',
            'precioCuadroN' => 'required'          
        ]);

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

        $request->validate([
            'idMonitoreoPFD' => 'required',
            'idResponsableElaboracion' => 'required',
            'descripcionIG' => 'required',
            'observacionesIG' => 'required'       
        ]);

        $informegestion = new informe_gestion();

        $informegestion->idMonitoreoPFD = $request->idMonitoreoPFD;
        $informegestion->idResponsableElaboracion = $request->idResponsableElaboracion;
        $informegestion->descripcionIG = $request->descripcionIG;
        $informegestion->observacionesIG = $request->observacionesIG;

        $informegestion->save();

        return redirect()->route('informesgestion.show', $informegestion);
        
    }

    public function storeMonitoreosPFD(Request $request){

        $request->validate([
            'idAccionesMejora' => 'required',
            'descripcionMPFD' => 'required',
            'porcentajeAvanceMPFD' => 'required'     
        ]);

        $monitoreopfd = new monitoreo_pfd();

        $monitoreopfd->idAccionesMejora = $request->idAccionesMejora;
        $monitoreopfd->descripcionMPFD = $request->descripcionMPFD;
        $monitoreopfd->porcentajeAvanceMPFD = $request->porcentajeAvanceMPFD;

        $monitoreopfd->save();

        return redirect()->route('monitoreospfd.show', $monitoreopfd);
        
    }

    public function storeRevisionesPFD(Request $request){

        $request->validate([
            'descripcionRPFD' => 'required',
            'observacionesRPFD' => 'required'   
        ]);

        $revisionpfd = new revision_pfd();

        $revisionpfd->descripcionRPFD = $request->descripcionRPFD;
        $revisionpfd->observacionesRPFD = $request->observacionesRPFD;        

        $revisionpfd->save();

        return redirect()->route('revisionespfd.show', $revisionpfd);
        
    }

    public function storeTDR(Request $request){

        $request->validate([
            'idTipoRecurso' => 'required',
            'mayorCuantiaTDR' => 'required',
            'descripcionTDR' => 'required',
            'costoTDR' => 'required'       
        ]);

        $tdr = new tdr();

        $tdr->idTipoRecurso = $request->idTipoRecurso;
        $tdr->mayorCuantiaTDR = $request->mayorCuantiaTDR;        
        $tdr->descripcionTDR = $request->descripcionTDR;
        $tdr->costoTDR = $request->costoTDR;

        $tdr->save();

        return redirect()->route('tdr.show', $tdr);
        
    }
    
    public function storeTiposCostos(Request $request){

        $request->validate([
            'idTipoRecurso' => 'required',
            'descripcionCosto' => 'required',
            'observacionesCosto' => 'required'     
        ]);

        $tipocosto = new tipo_costo();

        $tipocosto->idTipoRecurso = $request->idTipoRecurso;
        $tipocosto->descripcionCosto = $request->descripcionCosto;        
        $tipocosto->observacionesCosto = $request->observacionesCosto;

        $tipocosto->save();

        return redirect()->route('tiposcostos.show', $tipocosto);
        
    }

    public function storeTiposRecursos(Request $request){

        $request->validate([
            'descripcionRecurso' => 'required'   
        ]);

        $tiporecurso = new tipo_recurso();

        $tiporecurso->descripcionRecurso = $request->descripcionRecurso;

        $tiporecurso->save();

        return redirect()->route('tiposrecursos.show', $tiporecurso);
        
    }

    //shows

    public function show(plan_fd $pfd){
                
        return view('gestionPI.show', compact('pfd'));
    }

    public function showAccionesMejoras(acciones_mejora $accionmejora){
        
        return view('gestionPI/accionesmejoras.show', compact('accionmejora'));
    }

    public function showComisiones(comisiones_areas $comision){
        
        return view('gestionPI/comisiones.show', compact('comision'));
    }

    public function showComunicarPFD(comunicar_plan_fd $comunicarpfd){
        
        return view('gestionPI/comunicarpfd.show', compact('comunicarpfd'));
    }

    public function showCronogramas(cronograma $cronograma){
        
        return view('gestionPI/cronogramas.show', compact('cronograma'));
    }

    public function showCuadroNecesidades(cuadro_necesidades $cuadronecesidad){
        
        return view('gestionPI/cuadronecesidades.show', compact('cuadronecesidad'));
    }

    public function showInformesGestion(informe_gestion $informegestion){
        
        return view('gestionPI/informesgestion.show', compact('informegestion'));
    }

    public function showMonitoreosPFD(monitoreo_pfd $monitoreopfd){
        
        return view('gestionPI/monitoreospfd.show', compact('monitoreopfd'));
    }

    public function showRevisionesPFD(revision_pfd $revisionpfd){
        
        return view('gestionPI/revisionespfd.show', compact('revisionpfd'));
    }

    public function showTDR(tdr $tdr){
        
        return view('gestionPI/tdr.show', compact('tdr'));
    }

    public function showTiposCostos(tipo_costo $tipocosto){
        
        return view('gestionPI/tiposcostos.show', compact('tipocosto'));
    }

    public function showTiposRecursos(tipo_recurso $tiporecurso){
        
        return view('gestionPI/tiposrecursos.show', compact('tiporecurso'));
    }

    //edits

    public function edit(plan_fd $pfd){
                
        return view('gestionPI.edit', compact('pfd'));
    }

    public function editAccionesMejoras(acciones_mejora $accionmejora){
        
        return view('gestionPI/accionesmejoras.edit', compact('accionmejora'));
    }

    public function editComisiones(comisiones_areas $comision){
        
        return view('gestionPI/comisiones.edit', compact('comision'));
    }

    public function editComunicarPFD(comunicar_plan_fd $comunicarpfd){
        
        return view('gestionPI/comunicarpfd.edit', compact('comunicarpfd'));
    }

    public function editCronogramas(cronograma $cronograma){
        
        return view('gestionPI/cronogramas.edit', compact('cronograma'));
    }

    public function editCuadroNecesidades(cuadro_necesidades $cuadronecesidad){
        
        return view('gestionPI/cuadronecesidades.edit', compact('cuadronecesidad'));
    }

    public function editInformesGestion(informe_gestion $informegestion){
        
        return view('gestionPI/informesgestion.edit', compact('informegestion'));
    }

    public function editMonitoreosPFD(monitoreo_pfd $monitoreopfd){
        
        return view('gestionPI/monitoreospfd.edit', compact('monitoreopfd'));
    }

    public function editRevisionesPFD(revision_pfd $revisionpfd){
        
        return view('gestionPI/revisionespfd.edit', compact('revisionpfd'));
    }

    public function editTDR(tdr $tdr){
        
        return view('gestionPI/tdr.edit', compact('tdr'));
    }

    public function editTiposCostos(tipo_costo $tipocosto){
        
        return view('gestionPI/tiposcostos.edit', compact('tipocosto'));
    }

    public function editTiposRecursos(tipo_recurso $tiporecurso){
        
        return view('gestionPI/tiposrecursos.edit', compact('tiporecurso'));
    }

    //updates

    public function update(Request $request, plan_fd $pfd){        

        $pfd->idComision = $request->idComision;
        $pfd->idCuadroNecesidades = $request->idCuadroNecesidades;
        $pfd->idRevisionPFD = $request->idRevisionPFD;
        $pfd->idActaConsejoFacultad = $request->idActaConsejoFacultad;
        $pfd->idResponsableElaboracion = $request->idResponsableElaboracion;
        $pfd->idResponsableAprobacion = $request->idResponsableAprobacion;
        $pfd->descripcionPFD = $request->descripcionPFD;
        $pfd->fechaElaboracionPFD = $request->fechaElaboracionPFD;
        $pfd->fechaAprobacionPFD = $request->fechaAprobacionPFD;
        $pfd->yearPFD = $request->yearPFD;

        $pfd->save();

        return redirect()->route('gestionPI.show', $pfd);
        
    }

    public function updateAccionesMejoras(Request $request, acciones_mejora $accionmejora){        

        $accionmejora->idComision = $request->idComision;
        $accionmejora->idPlanFD = $request->idPlanFD;
        $accionmejora->idMonitoreoPFD = $request->idMonitoreoPFD;
        $accionmejora->idTipoRecurso = $request->idTipoRecurso;
        $accionmejora->metasAM = $request->metasAM;
        $accionmejora->descripcionAM = $request->descripcionAM;

        $accionmejora->save();

        return redirect()->route('accionesmejoras.show', $accionmejora);
        
    }

    public function updateComisiones(Request $request, comisiones_areas $comision){        

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

    public function updateComunicarPFD(Request $request, comunicar_plan_fd $comunicarpfd){        

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

    public function updateCronogramas(Request $request, cronograma $cronograma){        

        $cronograma->idPlanFD = $request->idPlanFD;
        $cronograma->idProyecto = $request->idProyecto;
        $cronograma->descripcionCronograma = $request->descripcionCronograma;

        $cronograma->save();

        return redirect()->route('cronogramas.show', $cronograma);
        
    }

    public function updateCuadroNecesidades(Request $request, cuadro_necesidades $cuadronecesidad){        

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

    public function updateInformesGestion(Request $request, informe_gestion $informegestion){        

        $informegestion->idMonitoreoPFD = $request->idMonitoreoPFD;
        $informegestion->idResponsableElaboracion = $request->idResponsableElaboracion;
        $informegestion->descripcionIG = $request->descripcionIG;
        $informegestion->observacionesIG = $request->observacionesIG;

        $informegestion->save();

        return redirect()->route('informesgestion.show', $informegestion);
        
    }

    public function updateMonitoreosPFD(Request $request, monitoreo_pfd $monitoreopfd){        

        $monitoreopfd->idAccionesMejora = $request->idAccionesMejora;
        $monitoreopfd->descripcionMPFD = $request->descripcionMPFD;
        $monitoreopfd->porcentajeAvanceMPFD = $request->porcentajeAvanceMPFD;

        $monitoreopfd->save();

        return redirect()->route('monitoreospfd.show', $monitoreopfd);
        
    }

    public function updateRevisionesPFD(Request $request, revision_pfd $revisionpfd){        

        $revisionpfd->descripcionRPFD = $request->descripcionRPFD;
        $revisionpfd->observacionesRPFD = $request->observacionesRPFD;        

        $revisionpfd->save();

        return redirect()->route('revisionespfd.show', $revisionpfd);
        
    }

    public function updateTDR(Request $request, tdr $tdr){        

        $tdr->idTipoRecurso = $request->idTipoRecurso;
        $tdr->mayorCuantiaTDR = $request->mayorCuantiaTDR;        
        $tdr->descripcionTDR = $request->descripcionTDR;
        $tdr->costoTDR = $request->costoTDR;

        $tdr->save();

        return redirect()->route('tdr.show', $tdr);
        
    }
    
    public function updateTiposCostos(Request $request, tipo_costo $tipocosto){        

        $tipocosto->idTipoRecurso = $request->idTipoRecurso;
        $tipocosto->descripcionCosto = $request->descripcionCosto;        
        $tipocosto->observacionesCosto = $request->observacionesCosto;

        $tipocosto->save();

        return redirect()->route('tiposcostos.show', $tipocosto);
        
    }

    public function updateTiposRecursos(Request $request, tipo_recurso $tiporecurso){        

        $tiporecurso->descripcionRecurso = $request->descripcionRecurso;

        $tiporecurso->save();

        return redirect()->route('tiposrecursos.show', $tiporecurso);
        
    }

}
