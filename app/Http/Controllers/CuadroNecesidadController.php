<?php

namespace App\Http\Controllers;
use App\Models\cuadro_necesidades;
use Illuminate\Http\Request;

class CuadroNecesidadController extends Controller
{
    public function index(){

        $cuadronecesidades = cuadro_necesidades::orderby('id', 'desc')->paginate();
        return view('gestionPI/cuadronecesidades.index', compact('cuadronecesidades'));
    }

    public function create(){
        return view('gestionPI/cuadronecesidades.create');
    }

    public function store(Request $request){

        $request->validate([
            'idComision' => 'required',
            'idTipoRecurso' => 'required',
            'idTipoCosto' => 'required',
            'idTDR' => 'required',
            'descripcionCuadroN' => 'required',
            'cantidadCuadroN' => 'required',
            'precioCuadroN' => 'required'          
        ]);

        $cuadronecesidade = cuadro_necesidades::create($request->all());

        return redirect()->route('cuadronecesidades.show', $cuadronecesidade);
        
    }

    public function show(cuadro_necesidades $cuadronecesidade){
        
        return view('gestionPI/cuadronecesidades.show', compact('cuadronecesidade'));
    }

    public function edit(cuadro_necesidades $cuadronecesidade){
        
        return view('gestionPI/cuadronecesidades.edit', compact('cuadronecesidade'));
    }

    public function update(Request $request, cuadro_necesidades $cuadronecesidade){        

        $cuadronecesidade->update($request->all());

        return redirect()->route('cuadronecesidades.show', $cuadronecesidade);
        
    }

    public function destroy(cuadro_necesidades $cuadronecesidade){        

        $cuadronecesidade->delete();

        return redirect()->route('cuadronecesidades.index');
        
    }
}
