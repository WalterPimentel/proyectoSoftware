<?php

namespace App\Http\Controllers;
use App\Models\etapas;
use Illuminate\Http\Request;

class EtapaController extends Controller
{
    public function index(){
        $etapas = etapas::orderby('id', 'desc')->paginate();

        return view('practicas/etapas.index', compact('etapas'));
    }
    
    public function create(){
        return view('practicas/etapas.create');         
    }

    public function store(Request $request){

        $request->validate([
            'nombreEtapa' => 'required',
            'descripcionEtapa' => 'required'
        ]);

        $etapa = etapas::create($request->all());

        return redirect()->route('etapas.show', $etapa);
        
    }

    public function show(etapas $etapa){
                
        return view('practicas/etapas.show', compact('etapa'));
    }

    public function edit(etapas $etapa){
                
        return view('practicas/etapas.edit', compact('etapa'));        
    }

    public function update(Request $request, etapas $etapa){

        $request->validate([
            'nombreEtapa' => 'required',
            'descripcionEtapa' => 'required'
        ]);

        $etapa->update($request->all());

        return redirect()->route('etapas.show', $etapa);
        
    }

    public function destroy(etapas $etapa){        

        $etapa->delete();

        return redirect()->route('etapas.index');
        
    }
}
