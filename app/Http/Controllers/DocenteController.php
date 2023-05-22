<?php

namespace App\Http\Controllers;
use App\Models\docentes;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index(){
        $docentes = docentes::orderby('id', 'desc')->paginate();

        return view('practicas/docentes.index', compact('docentes'));
    }
    
    public function create(){
        return view('practicas/docentes.create');        
    }

    public function store(Request $request){

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

    public function show(docentes $docente){
                
        return view('practicas/docentes.show', compact('docente'));
    }

    public function edit(docentes $docente){
                
        return view('practicas/docentes.edit', compact('docente'));        
    }

    public function update(Request $request, docentes $docente){        

        $docente->update($request->all());

        return redirect()->route('docentes.show', $docente);
        
    }

    public function destroy(docentes $docente){        

        $docente->delete();

        return redirect()->route('docentes.index');
        
    }
}
