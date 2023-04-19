<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionPIController extends Controller
{
    
    public function indexPI(){
        return view('gestionPI.indexPI');
    }

    public function registroCN(){
        return view('gestionPI.adminCPI.registroCN');        
    }

    public function registroIG(){
        return view('gestionPI.adminCPI.registroIG');        
    }

    public function registroPFD(){
        return view('gestionPI.adminCPI.registroPFD');        
    }

    public function registroCNPFD(){
        return view('gestionPI.secreD.registroCNPFD');        
    }

    public function showPFD($publicacion){
        return view('gestionPI.adminCPI.showPFD', compact('publicacion'));        
    }

}

?>