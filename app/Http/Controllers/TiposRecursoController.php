<?php

namespace App\Http\Controllers;
use App\Models\tipo_recurso;
use Illuminate\Http\Request;

class TiposRecursoController extends Controller
{
    public function index(){

        $tiposrecursos = tipo_recurso::orderby('id', 'desc')->paginate();
        return view('gestionPI/tiposrecursos.index', compact('tiposrecursos'));
    }

    public function create(){
        return view('gestionPI/tiposrecursos.create');
    }

    public function store(Request $request){

        $request->validate([
            'descripcionRecurso' => 'required'   
        ]);

        $tiposrecurso = tipo_recurso::create($request->all());

        return redirect()->route('tiposrecursos.show', $tiposrecurso);
        
    }

    public function show(tipo_recurso $tiposrecurso){
        
        return view('gestionPI/tiposrecursos.show', compact('tiposrecurso'));
    }

    public function edit(tipo_recurso $tiposrecurso){
        
        return view('gestionPI/tiposrecursos.edit', compact('tiposrecurso'));
    }

    public function update(Request $request, tipo_recurso $tiposrecurso){        

        $tiposrecurso->update($request->all());

        return redirect()->route('tiposrecursos.show', $tiposrecurso);
        
    }

    public function destroy(tipo_recurso $tiposrecurso){        

        $tiposrecurso->delete();

        return redirect()->route('tiposrecursos.index');
        
    }
}
