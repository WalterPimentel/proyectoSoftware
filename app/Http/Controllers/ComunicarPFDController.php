<?php

namespace App\Http\Controllers;
use App\Models\comunicar_plan_fd;
use Illuminate\Http\Request;

class ComunicarPFDController extends Controller
{
    public function index(){

        $comunicarpfd = comunicar_plan_fd::orderby('id', 'desc')->paginate();
        return view('gestionPI/comunicarpfd.index', compact('comunicarpfd'));
    }

    public function create(){
        return view('gestionPI/comunicarpfd.create');
    }

    public function store(Request $request){

        $request->validate([
            'idPlanFD'                  => ['required', 'numeric', 'min:1'],
            'idParteInteresada'         => ['required', 'numeric', 'min:1'],
            'descripcionComunicarPFD'   => 'required',
            'medioComunicarPFD'         => 'required',
            'fechaComunicarPFD'         => 'required|date',
            'horaComunicarPFD'          => 'required|date_format:H:i:s',
            'observacionesComunicarPFD' => 'required'       
        ]);

        $comunicarpfd = comunicar_plan_fd::create($request->all());

        return redirect()->route('comunicarpfd.show', $comunicarpfd);
        
    }

    public function show(comunicar_plan_fd $comunicarpfd){
        
        return view('gestionPI/comunicarpfd.show', compact('comunicarpfd'));
    }

    public function edit(comunicar_plan_fd $comunicarpfd){
        
        return view('gestionPI/comunicarpfd.edit', compact('comunicarpfd'));
    }

    public function update(Request $request, comunicar_plan_fd $comunicarpfd){

        $request->validate([
            'idPlanFD'                  => ['required', 'numeric', 'min:1'],
            'idParteInteresada'         => ['required', 'numeric', 'min:1'],
            'descripcionComunicarPFD'   => 'required',
            'medioComunicarPFD'         => 'required',
            'fechaComunicarPFD'         => 'required|date',
            'horaComunicarPFD'          => 'required|date_format:H:i:s',
            'observacionesComunicarPFD' => 'required'       
        ]);

        $comunicarpfd->update($request->all());

        return redirect()->route('comunicarpfd.show', $comunicarpfd);
        
    }

    public function destroy(comunicar_plan_fd $comunicarpfd){        

        $comunicarpfd->delete();

        return redirect()->route('comunicarpfd.index');
        
    }
}
