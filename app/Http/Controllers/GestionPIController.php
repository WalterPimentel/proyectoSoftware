<?php

namespace App\Http\Controllers;

use App\Models\plan_fd;
use Illuminate\Http\Request;

class GestionPIController extends Controller
{
    
    public function index(){

        $pfds = plan_fd::orderby('id', 'desc')->paginate();
        return view('gestionPI.index', compact('pfds'));
    }

    public function create(){        
        return view('gestionPI.create');
    }

    public function store(Request $request){

        $request->validate([
            'idComision' => ['required', 'numeric', 'min:1'],
            'idCuadroNecesidades' => ['required', 'numeric', 'min:1'],
            'idRevisionPFD' => ['required', 'numeric', 'min:1'],
            'idActaConsejoFacultad' => ['required', 'numeric', 'min:1'],
            'idResponsableElaboracion' => ['required', 'numeric', 'min:1'],
            'idResponsableAprobacion' => ['required', 'numeric', 'min:1'],
            'descripcionPFD' => 'required',
            'fechaElaboracionPFD' => 'required|date',
            'fechaAprobacionPFD' => 'required|date',
            'yearPFD' => 'required|date_format:Y'            
        ]);

        $pfd = plan_fd::create($request->all());

        return redirect()->route('gestionPI.show', $pfd);
        
    }

    public function show(plan_fd $gestionPI){
                
        return view('gestionPI.show', compact('gestionPI'));
    }

    public function edit(plan_fd $gestionPI){
                
        return view('gestionPI.edit', compact('gestionPI'));
    }

    public function update(Request $request, plan_fd $gestionPI){

        $request->validate([
            'idComision' => ['required', 'numeric', 'min:1'],
            'idCuadroNecesidades' => ['required', 'numeric', 'min:1'],
            'idRevisionPFD' => ['required', 'numeric', 'min:1'],
            'idActaConsejoFacultad' => ['required', 'numeric', 'min:1'],
            'idResponsableElaboracion' => ['required', 'numeric', 'min:1'],
            'idResponsableAprobacion' => ['required', 'numeric', 'min:1'],
            'descripcionPFD' => 'required',
            'fechaElaboracionPFD' => 'required|date',
            'fechaAprobacionPFD' => 'required|date',
            'yearPFD' => 'required|date_format:Y'            
        ]);

        $gestionPI->update($request->all());

        return redirect()->route('gestionPI.show', $gestionPI);
        
    }

    public function destroy(plan_fd $gestionPI){        

        $gestionPI->delete();

        return redirect()->route('gestionPI.index');
        
    }
}
