<?php

namespace App\Http\Controllers;
use App\Models\empresas;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index(){
        $empresas = empresas::orderby('id', 'desc')->paginate();

        return view('practicas/empresas.index', compact('empresas'));
    }

    public function create(){
        return view('practicas/empresas.create');         
    }

    public function store(Request $request){

        $request->validate([
            'nombreEmpresa' => 'required',
            'encargadoEmpresa' => 'required',
            'rubroEmpresa' => 'required',
            'direccionEmpresa' => 'required',
            'telefonoEmpresa' => 'required'
        ]);

        $empresa = empresas::create($request->all());

        return redirect()->route('empresas.show', $empresa);
        
    }

    public function show(empresas $empresa){
                
        return view('practicas/empresas.show', compact('empresa'));
    }

    public function edit(empresas $empresa){
                
        return view('practicas/empresas.edit', compact('empresa'));        
    }

    public function update(Request $request, empresas $empresa){        

        $empresa->update($request->all());

        return redirect()->route('empresas.show', $empresa);
        
    }

    public function destroy(empresas $empresa){        

        $empresa->delete();

        return redirect()->route('empresas.index');
        
    }
}
