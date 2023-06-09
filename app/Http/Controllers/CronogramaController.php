<?php

namespace App\Http\Controllers;
use App\Models\cronograma;
use Illuminate\Http\Request;

class CronogramaController extends Controller
{
    public function index(){

        $cronogramas = cronograma::orderby('id', 'desc')->paginate();
        return view('gestionPI/cronogramas.index', compact('cronogramas'));
    }

    public function create(){
        return view('gestionPI/cronogramas.create');
    }

    public function store(Request $request){

        $request->validate([
            'idPlanFD'              => ['required', 'numeric', 'min:1'],
            'idProyecto'            => ['required', 'numeric', 'min:1'],
            'descripcionCronograma' => 'required'         
        ]);

        $cronograma = cronograma::create($request->all());

        return redirect()->route('cronogramas.show', $cronograma);
        
    }

    public function show(cronograma $cronograma){
        
        return view('gestionPI/cronogramas.show', compact('cronograma'));
    }

    public function edit(cronograma $cronograma){
        
        return view('gestionPI/cronogramas.edit', compact('cronograma'));
    }

    public function update(Request $request, cronograma $cronograma){

        $request->validate([
            'idPlanFD'              => ['required', 'numeric', 'min:1'],
            'idProyecto'            => ['required', 'numeric', 'min:1'],
            'descripcionCronograma' => 'required'         
        ]);

        $cronograma->update($request->all());

        return redirect()->route('cronogramas.show', $cronograma);
        
    }

    public function destroy(cronograma $cronograma){        

        $cronograma->delete();

        return redirect()->route('cronogramas.index');
        
    }

}
