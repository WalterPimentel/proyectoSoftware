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
            'idComision' => 'required',
            'idCuadroNecesidades' => 'required',
            'idRevisionPFD' => 'required',
            'idActaConsejoFacultad' => 'required',
            'idResponsableElaboracion' => 'required',
            'idResponsableAprobacion' => 'required',
            'descripcionPFD' => 'required',
            'fechaElaboracionPFD' => 'required',
            'fechaAprobacionPFD' => 'required',
            'yearPFD' => 'required'            
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

        $gestionPI->update($request->all());

        return redirect()->route('gestionPI.show', $gestionPI);
        
    }

    public function destroy(plan_fd $gestionPI){        

        $gestionPI->delete();

        return redirect()->route('gestionPI.index');
        
    }
}
