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
        $practica = new Practica();

        $practica->codigo = $request->codigo;
        $practica->idEstudiante = $request->idEstudiante;
        $practica->idDocente = $request->idDocente;
        $practica->idEmpresa = $request->idEmpresa;
        $practica->idEtapa = $request->idEtapa;
        $practica->titulo = $request->titulo;

        $practica->save();

        return redirect()->route('practicas.show', $practica);
        
    }

    public function storeDocentes(Request $request){
        $docente = new docentes();

        $docente->codigoDocente = $request->codigoDocente;
        $docente->nombresDocente = $request->nombresDocente;
        $docente->apellidopDocente = $request->apellidopDocente;
        $docente->apellidomDocente = $request->apellidomDocente;
        $docente->telefonoDocente = $request->telefonoDocente;
        $docente->correoDocente = $request->correoDocente;

        $docente->save();

        return redirect()->route('docentes.show', $docente);
        
    }

    public function storeEmpresas(Request $request){
        $empresa = new empresas();

        $empresa->nombreEmpresa = $request->nombreEmpresa;
        $empresa->encargadoEmpresa = $request->encargadoEmpresa;
        $empresa->rubroEmpresa = $request->rubroEmpresa;
        $empresa->direccionEmpresa = $request->direccionEmpresa;
        $empresa->telefonoEmpresa = $request->telefonoEmpresa;

        $empresa->save();

        return redirect()->route('empresas.show', $empresa);
        
    }

    public function storeEstudiantes(Request $request){
        $estudiante = new estudiantes();

        $estudiante->codigoEstudiante = $request->codigoEstudiante;
        $estudiante->nombresEstudiante = $request->nombresEstudiante;
        $estudiante->apellidopEstudiante = $request->apellidopEstudiante;
        $estudiante->apellidomEstudiante = $request->apellidomEstudiante;
        $estudiante->telefonoEstudiante = $request->telefonoEstudiante;
        $estudiante->correoEstudiante = $request->correoEstudiante;

        $estudiante->save();

        return redirect()->route('estudiantes.show', $estudiante);
        
    }

    public function storeEtapas(Request $request){
        $etapa = new etapas();

        $etapa->nombreEtapa = $request->nombreEtapa;
        $etapa->descripcionEtapa = $request->descripcionEtapa;

        $etapa->save();

        return redirect()->route('etapas.show', $etapa);
        
    }

    public function storePracticasRequisitos(Request $request){
        $practicarequisito = new practicas_requisitos();

        $practicarequisito->idPractica = $request->idPractica;
        $practicarequisito->idRequisito = $request->idRequisito;

        $practicarequisito->save();

        return redirect()->route('practicasrequisitos.show', $practicarequisito);
        
    }
    
    public function storeRequisitos(Request $request){
        $requisito = new requisitos();

        $requisito->nombreRequisito = $request->nombreRequisito;
        $requisito->descripcionRequisito = $request->descripcionRequisito;
        $requisito->estado = $request->estado;

        $requisito->save();

        return redirect()->route('requisitos.show', $requisito);
        
    }

    //shows

    public function show($idPractica){
        
        $practica = Practica::find($idPractica);
        return view('practicas.show', compact('practica'));        
    }

    public function showDocentes($docente){
        
        $docente = docentes::find($docente);
        return view('practicas/docentes.show', compact('docente'));
    }

    public function showEmpresas($empresa){
        
        $empresa = empresas::find($empresa);
        return view('practicas/empresas.show', compact('empresa'));
    }
    public function showEstudiantes($estudiante){
        
        $estudiante = estudiantes::find($estudiante);
        return view('practicas/estudiantes.show', compact('estudiante'));
    }

    public function showEtapas($etapa){
        
        $etapa = etapas::find($etapa);
        return view('practicas/etapas.show', compact('etapa'));
    }

    public function showPracticasRequisitos($practicaRequisito){
        
        $practicaRequisito = practicas_requisitos::find($practicaRequisito);
        return view('practicas/practicasrequisitos.show', compact('practicaRequisito'));
    }

    public function showRequisitos($requisito){
        
        $requisito = requisitos::find($requisito);
        return view('practicas/requisitos.show', compact('requisito'));
    }
}
