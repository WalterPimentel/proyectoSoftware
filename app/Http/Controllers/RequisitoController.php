<?php

namespace App\Http\Controllers;
use App\Models\requisitos;
use Illuminate\Http\Request;

class RequisitoController extends Controller
{
    public function index(){
        $requisitos = requisitos::orderby('id', 'desc')->paginate();

        return view('practicas/requisitos.index', compact('requisitos'));
    }

    public function create(){
        return view('practicas/requisitos.create');     
    }

    public function store(Request $request){

        $request->validate([
            'nombreRequisito' => 'required',
            'descripcionRequisito' => 'nullable',
            'estado' => 'required|boolean'
        ]);

        $requisito = requisitos::create($request->all());

        return redirect()->route('requisitos.show', $requisito);
        
    }

    public function show(requisitos $requisito){
                
        return view('practicas/requisitos.show', compact('requisito'));
    }

    public function edit(requisitos $requisito){
                
        return view('practicas/requisitos.edit', compact('requisito'));        
    }

    public function update(Request $request, requisitos $requisito){

        $request->validate([
            'nombreRequisito' => 'required',
            'descripcionRequisito' => 'nullable',
            'estado' => 'required|boolean'
        ]);

        $requisito->update($request->all());

        return redirect()->route('requisitos.show', $requisito);
        
    }

    public function destroy(requisitos $requisito){        

        $requisito->delete();

        return redirect()->route('requisitos.index');
        
    }

}
