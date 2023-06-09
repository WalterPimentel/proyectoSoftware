<?php

namespace App\Http\Controllers;
use App\Models\acciones_mejora;
use Illuminate\Http\Request;

class AccionesMejoraController extends Controller
{
    public function index(){

        $accionesmejoras = acciones_mejora::orderby('id', 'desc')->paginate();
        return view('gestionPI/accionesmejoras.index', compact('accionesmejoras'));
    }

    public function create(){
        return view('gestionPI/accionesmejoras.create');
    }

    public function store(Request $request){

        $request->validate([
            'idComision'        => ['required', 'numeric', 'min:1'],
            'idPlanFD'          => ['required', 'numeric', 'min:1'],
            'idMonitoreoPFD'    => ['required', 'numeric', 'min:1'],
            'idTipoRecurso'     => ['required', 'numeric', 'min:1'],
            'metasAM'           => 'required',
            'descripcionAM'     => 'required'
        ]);

        $accionesmejora = acciones_mejora::create($request->all());

        return redirect()->route('accionesmejoras.show', $accionesmejora);
        
    }

    public function show(acciones_mejora $accionesmejora){
        
        return view('gestionPI/accionesmejoras.show', compact('accionesmejora'));
    }

    public function edit(acciones_mejora $accionesmejora){
        
        return view('gestionPI/accionesmejoras.edit', compact('accionesmejora'));
    }

    public function update(Request $request, acciones_mejora $accionesmejora){   
        
        $request->validate([
            'idComision'        => ['required', 'numeric', 'min:1'],
            'idPlanFD'          => ['required', 'numeric', 'min:1'],
            'idMonitoreoPFD'    => ['required', 'numeric', 'min:1'],
            'idTipoRecurso'     => ['required', 'numeric', 'min:1'],
            'metasAM'           => 'required',
            'descripcionAM'     => 'required'
        ]);

        $accionesmejora->update($request->all());

        return redirect()->route('accionesmejoras.show', $accionesmejora);
        
    }

    public function destroy(acciones_mejora $accionesmejora){        

        $accionesmejora->delete();

        return redirect()->route('accionesmejoras.index');
        
    }
}
