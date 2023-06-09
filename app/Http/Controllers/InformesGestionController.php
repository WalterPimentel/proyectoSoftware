<?php

namespace App\Http\Controllers;
use App\Models\informe_gestion;
use Illuminate\Http\Request;

class InformesGestionController extends Controller
{
    public function index(){

        $informesgestion = informe_gestion::orderby('id', 'desc')->paginate();
        return view('gestionPI/informesgestion.index', compact('informesgestion'));
    }

    public function create(){
        return view('gestionPI/informesgestion.create');
    }

    public function store(Request $request){

        $request->validate([
            'idMonitoreoPFD'            => ['required', 'numeric', 'min:1'],
            'idResponsableElaboracion'  => ['required', 'numeric', 'min:1'],
            'descripcionIG'             => 'required',
            'observacionesIG'           => 'required'       
        ]);

        $informesgestion = informe_gestion::create($request->all());

        return redirect()->route('informesgestion.show', $informesgestion);
        
    }

    public function show(informe_gestion $informesgestion){
        
        return view('gestionPI/informesgestion.show', compact('informesgestion'));
    }

    public function edit(informe_gestion $informesgestion){
        
        return view('gestionPI/informesgestion.edit', compact('informesgestion'));
    }

    public function update(Request $request, informe_gestion $informesgestion){

        $request->validate([
            'idMonitoreoPFD'            => ['required', 'numeric', 'min:1'],
            'idResponsableElaboracion'  => ['required', 'numeric', 'min:1'],
            'descripcionIG'             => 'required',
            'observacionesIG'           => 'required'       
        ]);

        $informesgestion->update($request->all());

        return redirect()->route('informesgestion.show', $informesgestion);
        
    }

    public function destroy(informe_gestion $informesgestion){        

        $informesgestion->delete();

        return redirect()->route('informesgestion.index');
        
    }
}
