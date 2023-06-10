<?php

namespace App\Http\Controllers;
use App\Models\{
    acciones_mejora,
    plan_fd, 
    comisiones_areas, 
    monitoreo_pfd, 
    tipo_recurso
};
use Illuminate\Http\Request;

class AccionesMejoraController extends Controller
{
    public function index(){

        $accionesmejoras = acciones_mejora::orderby('id', 'desc')->paginate();

        $pfds = plan_fd::all();
        $comision = comisiones_areas::all();      
        $monitoreoPFD = monitoreo_pfd::all();
        $tipoRecurso = tipo_recurso::all();
        
        return view('gestionPI/accionesmejoras.index', compact('accionesmejoras', 'pfds', 'comision', 'monitoreoPFD', 'tipoRecurso'));
    }

    public function create(){

        $pfds = plan_fd::orderby('id', 'desc')->get();
        $comision = comisiones_areas::orderby('id', 'desc')->get();        
        $monitoreoPFD = monitoreo_pfd::orderby('id', 'desc')->get();
        $tipoRecurso = tipo_recurso::orderby('id', 'desc')->get();

        return view('gestionPI/accionesmejoras.create', compact('comision', 'pfds', 'monitoreoPFD', 'tipoRecurso'));
    }

    public function store(Request $request){

        $request->validate([
            'idPlanFD'          => ['required', 'numeric', 'min:1'],
            'idComision'        => ['required', 'numeric', 'min:1'],            
            'idMonitoreoPFD'    => ['required', 'numeric', 'min:1'],
            'idTipoRecurso'     => ['required', 'numeric', 'min:1'],
            'metasAM'           => 'required',
            'descripcionAM'     => 'required'
        ]);

        $accionesmejora = acciones_mejora::create($request->all());

        return redirect()->route('accionesmejoras.show', $accionesmejora);
        
    }

    public function show(acciones_mejora $accionesmejora){

        $planFD = plan_fd::all();
        $comisiones = comisiones_areas::all();
        $monitoreoPFD = monitoreo_pfd::all();
        $tipoRecurso = tipo_recurso::all();

        $planFDEncontrada = $planFD->find($accionesmejora->idPlanFD);
        $descripcionPFD = $planFDEncontrada ? $planFDEncontrada->descripcionPFD : "<span style='color: red;'>Error al obtener registro.</span>";

        $comisionEncontrada = $comisiones->find($accionesmejora->idComision);
        $nombreComision = $comisionEncontrada ? $comisionEncontrada->nombreComision : "<span style='color: red;'>Error al obtener registro.</span>";

        $monitoreoPFDEncontrada = $monitoreoPFD->find($accionesmejora->idMonitoreoPFD);
        $descripcionMPFD = $monitoreoPFDEncontrada ? $monitoreoPFDEncontrada->descripcionMPFD : "<span style='color: red;'>Error al obtener registro.</span>";

        $recursoEncontrada = $tipoRecurso->find($accionesmejora->idTipoRecurso);
        $descripcionRecurso = $recursoEncontrada ? $recursoEncontrada->descripcionRecurso : "<span style='color: red;'>Error al obtener registro.</span>";
        
        return view('gestionPI/accionesmejoras.show', compact('accionesmejora', 'descripcionPFD', 'nombreComision', 'descripcionMPFD', 'descripcionRecurso'));
    }

    public function edit(acciones_mejora $accionesmejora){

        $pfds = plan_fd::orderby('id', 'desc')->get();
        $comision = comisiones_areas::orderby('id', 'desc')->get();        
        $monitoreoPFD = monitoreo_pfd::orderby('id', 'desc')->get();
        $tipoRecurso = tipo_recurso::orderby('id', 'desc')->get();
        
        return view('gestionPI/accionesmejoras.edit', compact('accionesmejora', 'comision', 'pfds', 'monitoreoPFD', 'tipoRecurso'));
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
