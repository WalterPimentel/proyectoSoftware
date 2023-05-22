<?php

namespace App\Http\Controllers;

use App\Models\Practica;
use Illuminate\Http\Request;

class PracticaController extends Controller
{
    
    public function index(){
        $practicas = Practica::orderby('id', 'desc')->paginate();

        return view('practicas.index', compact('practicas'));
    }

    public function create(){
        return view('practicas.create');        
    }

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

    public function show(Practica $practica){
                
        return view('practicas.show', compact('practica'));        
    }

    public function edit(Practica $practica){
                
        return view('practicas.edit', compact('practica'));        
    }
    
    public function update(Request $request, Practica $practica){        

        $practica->update($request->all());

        return redirect()->route('practicas.show', $practica);
        
    }

    public function destroy(Practica $practica){        

        $practica->delete();

        return redirect()->route('practicas.index');
        
    }        
}
