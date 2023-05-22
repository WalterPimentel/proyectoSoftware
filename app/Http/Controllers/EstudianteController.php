<?php

namespace App\Http\Controllers;
use App\Models\estudiantes;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index(){
        $estudiantes = estudiantes::orderby('id', 'desc')->paginate();

        return view('practicas/estudiantes.index', compact('estudiantes'));
    }

    public function create(){
        return view('practicas/estudiantes.create');        
    }

    public function store(Request $request){

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

    public function show(estudiantes $estudiante){
                
        return view('practicas/estudiantes.show', compact('estudiante'));
    }

    public function edit(estudiantes $estudiante){
                
        return view('practicas/estudiantes.edit', compact('estudiante'));        
    }

    public function update(Request $request, estudiantes $estudiante){        

        $estudiante->update($request->all());

        return redirect()->route('estudiantes.show', $estudiante);
        
    }

    public function destroy( estudiantes $estudiante){        

        $estudiante->delete();

        return redirect()->route('estudiantes.index');
        
    }
}
