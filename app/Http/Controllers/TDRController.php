<?php

namespace App\Http\Controllers;
use App\Models\tdr;
use Illuminate\Http\Request;

class TDRController extends Controller
{
    public function index(){

        $tdr = tdr::orderby('id', 'desc')->paginate();
        return view('gestionPI/tdr.index', compact('tdr'));
    }

    public function create(){
        return view('gestionPI/tdr.create');
    }

    public function store(Request $request){

        $request->validate([
            'idTipoRecurso' => 'required',
            'mayorCuantiaTDR' => 'required',
            'descripcionTDR' => 'required',
            'costoTDR' => 'required'       
        ]);

        $tdr = tdr::create($request->all());

        return redirect()->route('tdr.show', $tdr);
        
    }

    public function show(tdr $tdr){
        
        return view('gestionPI/tdr.show', compact('tdr'));
    }

    public function edit(tdr $tdr){
        
        return view('gestionPI/tdr.edit', compact('tdr'));
    }

    public function update(Request $request, tdr $tdr){        

        $tdr->update($request->all());

        return redirect()->route('tdr.show', $tdr);
        
    }

    public function destroy(tdr $tdr){        

        $tdr->delete();

        return redirect()->route('tdr.index');
        
    }
}
