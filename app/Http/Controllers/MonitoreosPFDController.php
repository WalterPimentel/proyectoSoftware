<?php

namespace App\Http\Controllers;
use App\Models\monitoreo_pfd;
use Illuminate\Http\Request;

class MonitoreosPFDController extends Controller
{
    public function index(){

        $monitoreospfd = monitoreo_pfd::orderby('id', 'desc')->paginate();
        return view('gestionPI/monitoreospfd.index', compact('monitoreospfd'));
    }

    public function create(){
        return view('gestionPI/monitoreospfd.create');
    }

    public function store(Request $request){

        $request->validate([
            'idAccionesMejora' => 'required',
            'descripcionMPFD' => 'required',
            'porcentajeAvanceMPFD' => 'required'     
        ]);

        $monitoreospfd = monitoreo_pfd::create($request->all());

        return redirect()->route('monitoreospfd.show', $monitoreospfd);
        
    }

    public function show(monitoreo_pfd $monitoreospfd){
        
        return view('gestionPI/monitoreospfd.show', compact('monitoreospfd'));
    }

    public function edit(monitoreo_pfd $monitoreospfd){
        
        return view('gestionPI/monitoreospfd.edit', compact('monitoreospfd'));
    }

    public function update(Request $request, monitoreo_pfd $monitoreospfd){

        $request->validate([
            'idAccionesMejora' => 'required',
            'descripcionMPFD' => 'required',
            'porcentajeAvanceMPFD' => 'required'     
        ]);

        $monitoreospfd->update($request->all());

        return redirect()->route('monitoreospfd.show', $monitoreospfd);
        
    }

    public function destroy(monitoreo_pfd $monitoreospfd){        

        $monitoreospfd->delete();

        return redirect()->route('monitoreospfd.index');
        
    }

}
