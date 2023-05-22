<?php

namespace App\Http\Controllers;
use App\Models\tipo_costo;
use Illuminate\Http\Request;

class TiposCostoController extends Controller
{
    public function index(){

        $tiposcostos = tipo_costo::orderby('id', 'desc')->paginate();
        return view('gestionPI/tiposcostos.index', compact('tiposcostos'));
    }

    public function create(){
        return view('gestionPI/tiposcostos.create');
    }


    public function store(Request $request){

        $request->validate([
            'idTipoRecurso' => 'required',
            'descripcionCosto' => 'required',
            'observacionesCosto' => 'required'     
        ]);

        $tiposcosto = tipo_costo::create($request->all());

        return redirect()->route('tiposcostos.show', $tiposcosto);
        
    }

    public function show(tipo_costo $tiposcosto){
        
        return view('gestionPI/tiposcostos.show', compact('tiposcosto'));
    }

    public function edit(tipo_costo $tiposcosto){
        
        return view('gestionPI/tiposcostos.edit', compact('tiposcosto'));
    }

    public function update(Request $request, tipo_costo $tiposcosto){        

        $tiposcosto->update($request->all());

        return redirect()->route('tiposcostos.show', $tiposcosto);
        
    }

    public function destroy(tipo_costo $tiposcosto){        

        $tiposcosto->delete();

        return redirect()->route('tiposcostos.index');
        
    }
}
