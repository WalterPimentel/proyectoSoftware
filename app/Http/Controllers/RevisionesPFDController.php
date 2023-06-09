<?php

namespace App\Http\Controllers;
use App\Models\revision_pfd;
use Illuminate\Http\Request;

class RevisionesPFDController extends Controller
{
    public function index(){

        $revisionespfd = revision_pfd::orderby('id', 'desc')->paginate();
        return view('gestionPI/revisionespfd.index', compact('revisionespfd'));
    }

    public function create(){
        return view('gestionPI/revisionespfd.create');
    }

    public function store(Request $request){

        $request->validate([
            'descripcionRPFD'   => 'required',
            'observacionesRPFD' => 'required'   
        ]);

        $revisionespfd = revision_pfd::create($request->all());

        return redirect()->route('revisionespfd.show', $revisionespfd);
        
    }

    public function show(revision_pfd $revisionespfd){
        
        return view('gestionPI/revisionespfd.show', compact('revisionespfd'));
    }

    public function edit(revision_pfd $revisionespfd){
        
        return view('gestionPI/revisionespfd.edit', compact('revisionespfd'));
    }

    public function update(Request $request, revision_pfd $revisionespfd){

        $request->validate([
            'descripcionRPFD'   => 'required',
            'observacionesRPFD' => 'required'   
        ]);

        $revisionespfd->update($request->all());

        return redirect()->route('revisionespfd.show', $revisionespfd);
        
    }

    public function destroy(revision_pfd $revisionespfd){        

        $revisionespfd->delete();

        return redirect()->route('revisionespfd.index');
        
    }
}
