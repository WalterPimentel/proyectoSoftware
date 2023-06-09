<?php

namespace App\Http\Controllers;
use App\Models\estudiantes;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index(){
        $estudiantes = estudiantes::orderby('id', 'desc')->paginate();

        return view('practicas/estudiantes.index', compact('estudiantes'));
    }

    public function create(){
        return view('practicas/estudiantes.create');        
    }

    public function store(Request $request){

        $request->validate([
            'codigoEstudiante'      => ['required', 'numeric', 'min:1'],
            'nombresEstudiante'     => ['required', 'regex:/^[A-Za-z.\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'apellidopEstudiante'   => ['required', 'regex:/^[A-Za-z\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'apellidomEstudiante'   => ['required', 'regex:/^[A-Za-z\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'telefonoEstudiante'    => ['required', 'numeric', 'min:900000000', 'regex:/^9\d{8}$/'],
            'correoEstudiante'      => ['required', 'email', function ($attribute, $value, $fail) {
                if (!str_contains($value, '@')) {
                    $fail("El campo Correo debe ser un correo electrónico válido.");
                    return;
                }
        
                $allowedDomains = ['continental.edu.pe'];
                $domain = explode('@', $value)[1];  
                if (!in_array($domain, $allowedDomains)) {
                    $fail('El dominio "@' .$domain. '" no esta permitido para estudiantes, debe tener el dominio: @' . implode(", ", $allowedDomains));                    
                }
            }]
        ]);
        
        $estudiante = estudiantes::create($request->all());

        return redirect()->route('estudiantes.show', $estudiante);
        
    }

    public function show(estudiantes $estudiante){
                
        return view('practicas/estudiantes.show', compact('estudiante'));
    }

    public function edit(estudiantes $estudiante){
                
        return view('practicas/estudiantes.edit', compact('estudiante'));        
    }

    public function update(Request $request, estudiantes $estudiante){

        $request->validate([
            'codigoEstudiante'      => ['required', 'numeric', 'min:1'],
            'nombresEstudiante'     => ['required', 'regex:/^[A-Za-z.\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'apellidopEstudiante'   => ['required', 'regex:/^[A-Za-z\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'apellidomEstudiante'   => ['required', 'regex:/^[A-Za-z\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'telefonoEstudiante'    => ['required', 'numeric', 'min:900000000', 'regex:/^9\d{8}$/'],
            'correoEstudiante'      => ['required', 'email', function ($attribute, $value, $fail) {
                if (!str_contains($value, '@')) {
                    $fail("El campo Correo debe ser un correo electrónico válido.");
                    return;
                }
        
                $allowedDomains = ['continental.edu.pe'];
                $domain = explode('@', $value)[1];  
                if (!in_array($domain, $allowedDomains)) {
                    $fail('El dominio "@' .$domain. '" no esta permitido para estudiantes, debe tener el dominio: @' . implode(", ", $allowedDomains));                    
                }
            }]
        ]);

        $estudiante->update($request->all());

        return redirect()->route('estudiantes.show', $estudiante);
        
    }

    public function destroy( estudiantes $estudiante){        

        $estudiante->delete();

        return redirect()->route('estudiantes.index');
        
    }
}
