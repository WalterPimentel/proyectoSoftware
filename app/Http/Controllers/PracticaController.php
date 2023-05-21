<?php

namespace App\Http\Controllers;

use App\Models\{Practica, docentes, empresas, estudiantes, etapas, practicas_requisitos, requisitos};
use Illuminate\Http\Request;

class PracticaController extends Controller
{
    //indexs
    
    public function index(){
        $practicas = Practica::orderby('id', 'desc')->paginate();

        return view('practicas.index', compact('practicas'));
        //compat, se usa para enviar una variable a la vista
    }

    public function indexDocentes(){
        $docentes = docentes::orderby('id', 'desc')->paginate();

        return view('practicas/docentes.index', compact('docentes'));
    }
    public function indexEmpresas(){
        $empresas = empresas::orderby('id', 'desc')->paginate();

        return view('practicas/empresas.index', compact('empresas'));
    }

    public function indexEstudiantes(){
        $estudiantes = estudiantes::orderby('id', 'desc')->paginate();

        return view('practicas/estudiantes.index', compact('estudiantes'));
    }

    public function indexEtapas(){
        $etapas = etapas::orderby('id', 'desc')->paginate();

        return view('practicas/etapas.index', compact('etapas'));
    }

    public function indexPracticasRequisitos(){
        $practicasRequisitos = practicas_requisitos::orderby('id', 'desc')->paginate();

        return view('practicas/practicasrequisitos.index', compact('practicasRequisitos'));
    }

    public function indexRequisitos(){
        $requisitos = requisitos::orderby('id', 'desc')->paginate();

        return view('practicas/requisitos.index', compact('requisitos'));
    }

    //creates

    public function create(){
        return view('practicas.create');        
    }

    public function createDocentes(){
        return view('practicas/docentes.create');        
    }

    public function createEmpresas(){
        return view('practicas/empresas.create');         
    }

    public function createEstudiantes(){
        return view('practicas/estudiantes.create');        
    }

    public function createEtapas(){
        return view('practicas/etapas.create');         
    }

    public function createPracticasRequisitos(){
        return view('practicas/practicasrequisitos.create');       
    }

    public function createRequisitos(){
        return view('practicas/requisitos.create');     
    }

    //stores

    public function store(Request $request){
        
        $request->validate([
            'codigo' => 'required',
            'idEstudiante' => 'required',
            'idDocente' => 'required',
            'idEmpresa' => 'required',
            'idEtapa' => 'required',
            'titulo' => 'required'
        ]);

        $practica = Practica::create($request->all());

        return redirect()->route('practicas.show', $practica);
        
    }

    public function storeDocentes(Request $request){

        $request->validate([
            'codigoDocente' => 'required',
            'nombresDocente' => 'required',
            'apellidopDocente' => 'required',
            'apellidomDocente' => 'required',
            'telefonoDocente' => 'required',
            'correoDocente' => 'required'
        ]);

        $docente = docentes::create($request->all());

        return redirect()->route('docentes.show', $docente);
        
    }

    public function storeEmpresas(Request $request){

        $request->validate([
            'nombreEmpresa' => 'required',
            'encargadoEmpresa' => 'required',
            'rubroEmpresa' => 'required',
            'direccionEmpresa' => 'required',
            'telefonoEmpresa' => 'required'
        ]);

        $empresa = empresas::create($request->all());

        return redirect()->route('empresas.show', $empresa);
        
    }

    public function storeEstudiantes(Request $request){

        $request->validate([
            'codigoEstudiante' => 'required',
            'nombresEstudiante' => 'required',
            'apellidopEstudiante' => 'required',
            'apellidomEstudiante' => 'required',
            'telefonoEstudiante' => 'required',
            'correoEstudiante' => 'required'
        ]);
        
        $estudiante = estudiantes::create($request->all());

        return redirect()->route('estudiantes.show', $estudiante);
        
    }

    public function storeEtapas(Request $request){

        $request->validate([
            'nombreEtapa' => 'required',
            'descripcionEtapa' => 'required'
        ]);

        $etapa = etapas::create($request->all());

        return redirect()->route('etapas.show', $etapa);
        
    }

    public function storePracticasRequisitos(Request $request){

        $request->validate([
            'idPractica' => 'required',
            'idRequisito' => 'required'
        ]);

        $practicaRequisito = practicas_requisitos::create($request->all());

        return redirect()->route('practicasrequisitos.show', $practicaRequisito);
        
    }
    
    public function storeRequisitos(Request $request){

        $request->validate([
            'nombreRequisito' => 'required',
            'descripcionRequisito' => 'required',
            'estado' => 'required'
        ]);

        $requisito = requisitos::create($request->all());

        return redirect()->route('requisitos.show', $requisito);
        
    }

    //shows

    public function show(Practica $practica){
                
        return view('practicas.show', compact('practica'));        
    }

    public function showDocentes(docentes $docente){
                
        return view('practicas/docentes.show', compact('docente'));
    }

    public function showEmpresas(empresas $empresa){
                
        return view('practicas/empresas.show', compact('empresa'));
    }
    public function showEstudiantes(estudiantes $estudiante){
                
        return view('practicas/estudiantes.show', compact('estudiante'));
    }

    public function showEtapas(etapas $etapa){
                
        return view('practicas/etapas.show', compact('etapa'));
    }

    public function showPracticasRequisitos(practicas_requisitos $practicaRequisito){
                
        return view('practicas/practicasrequisitos.show', compact('practicaRequisito'));
    }

    public function showRequisitos(requisitos $requisito){
                
        return view('practicas/requisitos.show', compact('requisito'));
    }

    //edits

    public function edit(Practica $practica){
                
        return view('practicas.edit', compact('practica'));        
    }

    public function editDocentes(docentes $docente){
                
        return view('practicas/docentes.edit', compact('docente'));        
    }

    public function editEmpresas(empresas $empresa){
                
        return view('practicas/empresas.edit', compact('empresa'));        
    }

    public function editEstudiantes(estudiantes $estudiante){
                
        return view('practicas/estudiantes.edit', compact('estudiante'));        
    }

    public function editEtapas(etapas $etapa){
                
        return view('practicas/etapas.edit', compact('etapa'));        
    }

    public function editPracticasRequisitos(practicas_requisitos $practicaRequisito){
                
        return view('practicas/practicasrequisitos.edit', compact('practicaRequisito'));        
    }

    public function editRequisitos(requisitos $requisito){
                
        return view('practicas/requisitos.edit', compact('requisito'));        
    }

    //updates

    public function update(Request $request, Practica $practica){        

        $practica->update($request->all());

        return redirect()->route('practicas.show', $practica);
        
    }

    public function updateDocentes(Request $request, docentes $docente){        

        $docente->update($request->all());

        return redirect()->route('docentes.show', $docente);
        
    }

    public function updateEmpresas(Request $request, empresas $empresa){        

        $empresa->update($request->all());

        return redirect()->route('empresas.show', $empresa);
        
    }

    public function updateEstudiantes(Request $request, estudiantes $estudiante){        

        $estudiante->update($request->all());

        return redirect()->route('estudiantes.show', $estudiante);
        
    }

    public function updateEtapas(Request $request, etapas $etapa){        

        $etapa->update($request->all());

        return redirect()->route('etapas.show', $etapa);
        
    }

    public function updatePracticasRequisitos(Request $request, practicas_requisitos $practicaRequisito){        

        $practicaRequisito->update($request->all());

        return redirect()->route('practicasrequisitos.show', $practicaRequisito);
        
    }
    
    public function updateRequisitos(Request $request, requisitos $requisito){        

        $requisito->update($request->all());

        return redirect()->route('requisitos.show', $requisito);
        
    }

    //destroys

    public function destroy(Practica $practica){        

        $practica->delete();

        return redirect()->route('practicas.index');
        
    }

    public function destroyDocentes(docentes $docente){        

        $docente->delete();

        return redirect()->route('docentes.index');
        
    }

    public function destroyEmpresas(empresas $empresa){        

        $empresa->delete();

        return redirect()->route('empresas.index');
        
    }

    public function destroyEstudiantes( estudiantes $estudiante){        

        $estudiante->delete();

        return redirect()->route('estudiantes.index');
        
    }

    public function destroyEtapas(etapas $etapa){        

        $etapa->delete();

        return redirect()->route('etapas.index');
        
    }

    public function destroyPracticasRequisitos(practicas_requisitos $practicaRequisito){        

        $practicaRequisito->delete();

        return redirect()->route('practicasrequisitos.index');
        
    }
    
    public function destroyRequisitos(requisitos $requisito){        

        $requisito->delete();

        return redirect()->route('requisitos.show');
        
    }
}
