<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{plan_fd, Practica, User};

class HomeController extends Controller
{
    //reemplazo de function __invoke
    public function index(){

        $gestionPIs = plan_fd::count();
        $practicas = Practica::count();
        $users = User::count();

        return view('home', compact('gestionPIs', 'practicas', 'users'));
    }
    
}

?>