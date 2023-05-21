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

        $pfd = plan_fd::create($request->all());

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

        $accionmejora = acciones_mejora::create($request->all());

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

        $comision = comisiones_areas::create($request->all());

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

        $comunicarpfd = comunicar_plan_fd::create($request->all());

        return redirect()->route('comunicarpfd.show', $comunicarpfd);
        
    }

    public function storeCronogramas(Request $request){

        $request->validate([
            'idPlanFD' => 'required',
            'idProyecto' => 'required',
            'descripcionCronograma' => 'required'         
        ]);

        $cronograma = cronograma::create($request->all());

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

        $cuadronecesidad = cuadro_necesidades::create($request->all());

        return redirect()->route('cuadronecesidades.show', $cuadronecesidad);
        
    }

    public function storeInformesGestion(Request $request){

        $request->validate([
            'idMonitoreoPFD' => 'required',
            'idResponsableElaboracion' => 'required',
            'descripcionIG' => 'required',
            'observacionesIG' => 'required'       
        ]);

        $informegestion = informe_gestion::create($request->all());

        return redirect()->route('informesgestion.show', $informegestion);
        
    }

    public function storeMonitoreosPFD(Request $request){

        $request->validate([
            'idAccionesMejora' => 'required',
            'descripcionMPFD' => 'required',
            'porcentajeAvanceMPFD' => 'required'     
        ]);

        $monitoreopfd = monitoreo_pfd::create($request->all());

        return redirect()->route('monitoreospfd.show', $monitoreopfd);
        
    }

    public function storeRevisionesPFD(Request $request){

        $request->validate([
            'descripcionRPFD' => 'required',
            'observacionesRPFD' => 'required'   
        ]);

        $revisionpfd = revision_pfd::create($request->all());

        return redirect()->route('revisionespfd.show', $revisionpfd);
        
    }

    public function storeTDR(Request $request){

        $request->validate([
            'idTipoRecurso' => 'required',
            'mayorCuantiaTDR' => 'required',
            'descripcionTDR' => 'required',
            'costoTDR' => 'required'       
        ]);

        $tdr = tdr::create($request->all());

        return redirect()->route('tdr.show', $tdr);
        
    }
    
    public function storeTiposCostos(Request $request){

        $request->validate([
            'idTipoRecurso' => 'required',
            'descripcionCosto' => 'required',
            'observacionesCosto' => 'required'     
        ]);

        $tipocosto = tipo_costo::create($request->all());

        return redirect()->route('tiposcostos.show', $tipocosto);
        
    }

    public function storeTiposRecursos(Request $request){

        $request->validate([
            'descripcionRecurso' => 'required'   
        ]);

        $tiporecurso = tipo_recurso::create($request->all());

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

        $pfd->update($request->all());

        return redirect()->route('gestionPI.show', $pfd);
        
    }

    public function updateAccionesMejoras(Request $request, acciones_mejora $accionmejora){        

        $accionmejora->update($request->all());

        return redirect()->route('accionesmejoras.show', $accionmejora);
        
    }

    public function updateComisiones(Request $request, comisiones_areas $comision){        

        $comision->update($request->all());

        return redirect()->route('comisiones.show', $comision);
        
    }

    public function updateComunicarPFD(Request $request, comunicar_plan_fd $comunicarpfd){        

        $comunicarpfd->update($request->all());

        return redirect()->route('comunicarpfd.show', $comunicarpfd);
        
    }

    public function updateCronogramas(Request $request, cronograma $cronograma){        

        $cronograma->update($request->all());

        return redirect()->route('cronogramas.show', $cronograma);
        
    }

    public function updateCuadroNecesidades(Request $request, cuadro_necesidades $cuadronecesidad){        

        $cuadronecesidad->update($request->all());

        return redirect()->route('cuadronecesidades.show', $cuadronecesidad);
        
    }

    public function updateInformesGestion(Request $request, informe_gestion $informegestion){        

        $informegestion->update($request->all());

        return redirect()->route('informesgestion.show', $informegestion);
        
    }

    public function updateMonitoreosPFD(Request $request, monitoreo_pfd $monitoreopfd){        

        $monitoreopfd->update($request->all());

        return redirect()->route('monitoreospfd.show', $monitoreopfd);
        
    }

    public function updateRevisionesPFD(Request $request, revision_pfd $revisionpfd){        

        $revisionpfd->update($request->all());

        return redirect()->route('revisionespfd.show', $revisionpfd);
        
    }

    public function updateTDR(Request $request, tdr $tdr){        

        $tdr->update($request->all());

        return redirect()->route('tdr.show', $tdr);
        
    }
    
    public function updateTiposCostos(Request $request, tipo_costo $tipocosto){        

        $tipocosto->update($request->all());

        return redirect()->route('tiposcostos.show', $tipocosto);
        
    }

    public function updateTiposRecursos(Request $request, tipo_recurso $tiporecurso){        

        $tiporecurso->update($request->all());

        return redirect()->route('tiposrecursos.show', $tiporecurso);
        
    }

}
