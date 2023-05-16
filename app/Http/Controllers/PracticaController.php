<?php

namespace App\Http\Controllers;

use App\Models\{Practica, docentes, empresas, estudiantes, etapas, practicas_requisitos, requisitos};
use Illuminate\Http\Request;

class PracticaController extends Controller
{
    //indexs
    
    public function index(){
        $practicas = Practica::paginate();

        return view('practicas.index', compact('practicas'));
        //compat, se usa para enviar una variable a la vista
    }

    public function indexDocentes(){
        $docentes = docentes::paginate();

        return view('practicas/docentes.index', compact('docentes'));
    }
    public function indexEmpresas(){
        $empresas = empresas::paginate();

        return view('practicas/empresas.index', compact('empresas'));
    }

    public function indexEstudiantes(){
        $estudiantes = estudiantes::paginate();

        return view('practicas/estudiantes.index', compact('estudiantes'));
    }

    public function indexEtapas(){
        $etapas = etapas::paginate();

        return view('practicas/etapas.index', compact('etapas'));
    }

    public function indexPracticasRequisitos(){
        $practicasRequisitos = practicas_requisitos::paginate();

        return view('practicas/practicasrequisitos.index', compact('practicasRequisitos'));
    }

    public function indexRequisitos(){
        $requisitos = requisitos::paginate();

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
