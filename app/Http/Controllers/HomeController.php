<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //reemplazo de function __invoke
    public function index(){
        return view('home');
    }
    
}

?>