<?php

namespace App\Http\Controllers;
use App\Models\comisiones_areas;

use Illuminate\Http\Request;

class ComisionController extends Controller
{
    public function index(){

        $comisiones = comisiones_areas::orderby('id', 'desc')->paginate();
        return view('gestionPI/comisiones.index', compact('comisiones'));
    }

    public function create(){
        return view('gestionPI/comisiones.create');
    }

    public function store(Request $request){

        $request->validate([
            'idDocente' => 'required',
            'idAdministrativo' => 'required',
            'nombreComision' => 'required',
            'macroProcesoComision' => 'required',
            'procesoComision' => 'required',
            'subprocesoComision' => 'required',
            'periodoComision' => 'required'           
        ]);

        $comision = comisiones_areas::create($request->all());

        return redirect()->route('comisiones.show', $comision);
        
    }

    public function show(comisiones_areas $comisione){
        
        return view('gestionPI/comisiones.show', compact('comisione'));
    }

    public function edit(comisiones_areas $comisione){
        
        return view('gestionPI/comisiones.edit', compact('comisione'));
    }

    public function update(Request $request, comisiones_areas $comisione){
        
        $request->validate([
            'idDocente' => 'required',
            'idAdministrativo' => 'required',
            'nombreComision' => 'required',
            'macroProcesoComision' => 'required',
            'procesoComision' => 'required',
            'subprocesoComision' => 'required',
            'periodoComision' => 'required'           
        ]);

        $comisione->update($request->all());

        return redirect()->route('comisiones.show', $comisione);
        
    }

    public function destroy(comisiones_areas $comisione){        

        $comisione->delete();

        return redirect()->route('comisiones.index');
        
    }
}
