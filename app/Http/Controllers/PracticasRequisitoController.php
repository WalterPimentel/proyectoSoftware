<?php

namespace App\Http\Controllers;
use App\Models\practicas_requisitos;
use Illuminate\Http\Request;

class PracticasRequisitoController extends Controller
{
    public function index(){
        $practicasRequisitos = practicas_requisitos::orderby('id', 'desc')->paginate();

        return view('practicas/practicasrequisitos.index', compact('practicasRequisitos'));
    }

    public function create(){
        return view('practicas/practicasrequisitos.create');       
    }

    public function store(Request $request){

        $request->validate([
            'idPractica'    => ['required', 'numeric', 'min:1'],
            'idRequisito'   => ['required', 'numeric', 'min:1']
        ]);

        $practicasrequisito = practicas_requisitos::create($request->all());

        return redirect()->route('practicasrequisitos.show', $practicasrequisito);
        
    }

    public function show(practicas_requisitos $practicasrequisito){
                
        return view('practicas/practicasrequisitos.show', compact('practicasrequisito'));
    }

    public function edit(practicas_requisitos $practicasrequisito){
                
        return view('practicas/practicasrequisitos.edit', compact('practicasrequisito'));        
    }

    public function update(Request $request, practicas_requisitos $practicasrequisito){

        $request->validate([
            'idPractica'    => ['required', 'numeric', 'min:1'],
            'idRequisito'   => ['required', 'numeric', 'min:1']
        ]);

        $practicasrequisito->update($request->all());

        return redirect()->route('practicasrequisitos.show', $practicasrequisito);
        
    }

    public function destroy(practicas_requisitos $practicasrequisito){        

        $practicasrequisito->delete();

        return redirect()->route('practicasrequisitos.index');
        
    }
}
