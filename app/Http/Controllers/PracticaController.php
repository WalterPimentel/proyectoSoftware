<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticaController extends Controller
{
    public function index(){
        return view('practicas.index');
    }

    public function create(){
        return view('practicas.create');        
    }

    public function show($procedimiento){
        return view('practicas.show', compact('procedimiento'));        
    }
}
