<?php

namespace App\Http\Controllers;

use App\Models\{
    plan_fd, 
    comisiones_areas, 
    cuadro_necesidades, 
    revision_pfd
};
use Illuminate\Http\Request;

class GestionPIController extends Controller
{
    
    public function index(){

        $pfds = plan_fd::orderby('id', 'desc')->paginate();
        return view('gestionPI.index', compact('pfds'));
    }

    public function create(){        

        $comision = comisiones_areas::orderby('id', 'desc')->get();
        $cuadronecesidade = cuadro_necesidades::orderby('id', 'desc')->get();
        $revisionespfd = revision_pfd::orderby('id', 'desc')->get();

        return view('gestionPI.create', compact('comision', 'cuadronecesidade', 'revisionespfd'));
    }

    public function store(Request $request){

        $request->validate([
            'idComision'                => ['required', 'numeric', 'min:1'],
            'idCuadroNecesidades'       => ['required', 'numeric', 'min:1'],
            'idRevisionPFD'             => ['required', 'numeric', 'min:1'],
            'idActaConsejoFacultad'     => ['required', 'numeric', 'min:1'],
            'idResponsableElaboracion'  => ['required', 'numeric', 'min:1'],
            'idResponsableAprobacion'   => ['required', 'numeric', 'min:1'],
            'descripcionPFD'            => 'required',
            'fechaElaboracionPFD'       => 'required|date',
            'fechaAprobacionPFD'        => 'required|date',
            'yearPFD'                   => 'required|date_format:Y'            
        ]);

        $pfd = plan_fd::create($request->all());

        return redirect()->route('gestionPI.show', $pfd);
        
    }

    public function show(plan_fd $gestionPI){
        
        $comisiones = comisiones_areas::all();
        $cuadronecesidades = cuadro_necesidades::all();
        $revisionespfd = revision_pfd::all();
    
        $comisionEncontrada = $comisiones->find($gestionPI->idComision);
        $nombreComision = $comisionEncontrada ? $comisionEncontrada->nombreComision : "<span style='color: red;'>Error al obtener registro.</span>";
    
        $cnEncontrada = $cuadronecesidades->find($gestionPI->idCuadroNecesidades);
        $descripcionCuadroN = $cnEncontrada ? $cnEncontrada->descripcionCuadroN : "<span style='color: red;'>Error al obtener registro.</span>";
    
        $rpfdEncontrada = $revisionespfd->find($gestionPI->idRevisionPFD);
        $descripcionRPFD = $rpfdEncontrada ? $rpfdEncontrada->descripcionRPFD : "<span style='color: red;'>Error al obtener registro.</span>";
        
        return view('gestionPI.show', compact('gestionPI', 'nombreComision', 'descripcionCuadroN', 'descripcionRPFD'));
    }

    public function edit(plan_fd $gestionPI){

        $comision = comisiones_areas::orderby('id', 'desc')->get();
        $cuadronecesidade = cuadro_necesidades::orderby('id', 'desc')->get();
        $revisionespfd = revision_pfd::orderby('id', 'desc')->get();
                
        return view('gestionPI.edit', compact('gestionPI', 'comision', 'cuadronecesidade', 'revisionespfd'));
    }

    public function update(Request $request, plan_fd $gestionPI){

        $request->validate([
            'idComision'                => ['required', 'numeric', 'min:1'],
            'idCuadroNecesidades'       => ['required', 'numeric', 'min:1'],
            'idRevisionPFD'             => ['required', 'numeric', 'min:1'],
            'idActaConsejoFacultad'     => ['required', 'numeric', 'min:1'],
            'idResponsableElaboracion'  => ['required', 'numeric', 'min:1'],
            'idResponsableAprobacion'   => ['required', 'numeric', 'min:1'],
            'descripcionPFD'            => 'required',
            'fechaElaboracionPFD'       => 'required|date',
            'fechaAprobacionPFD'        => 'required|date',
            'yearPFD'                   => 'required|date_format:Y'            
        ]);

        $gestionPI->update($request->all());

        return redirect()->route('gestionPI.show', $gestionPI);
        
    }

    public function destroy(plan_fd $gestionPI){        

        $gestionPI->delete();

        return redirect()->route('gestionPI.index');
        
    }
}
