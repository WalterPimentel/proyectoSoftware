<?php

namespace App\Http\Controllers;
use App\Models\docentes;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index(){
        $docentes = docentes::orderby('id', 'desc')->paginate();

        return view('practicas/docentes.index', compact('docentes'));
    }
    
    public function create(){
        return view('practicas/docentes.create');        
    }

    public function store(Request $request){

        $request->validate([
            'codigoDocente'    => ['required', 'numeric', 'min:1'],
            'nombresDocente'   => ['required', 'regex:/^[A-Za-z.\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'apellidopDocente' => ['required', 'regex:/^[A-Za-z\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'apellidomDocente' => ['required', 'regex:/^[A-Za-z\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'telefonoDocente'  => ['required', 'numeric', 'min:900000000', 'regex:/^9\d{8}$/'],
            'correoDocente'    => ['required', 'email', function ($attribute, $value, $fail) {
                if (!str_contains($value, '@')) {
                    $fail("El campo Correo debe ser un correo electrónico válido.");
                    return;
                }
        
                $allowedDomains = [
                    'gmail.com', 
                    'outlook.com', 
                    'continental.edu.pe', 
                    'yahoo.com', 
                    'hotmail.com', 
                    'icloud.com',
                    'aol.com', 
                    'protonmail.com', 
                    'mail.com', 
                    'zoho.com', 
                    'yandex.com', 
                    'live.com',
                    'gmx.com',
                    'tutanota.com',
                    'inbox.com',
                    'mail.ru',
                    'uncp.edu.pe',
                    'virtualuncp.edu.pe',
                    'mail.upla.edu.pe',
                    'upla.edu.pe',
                    'utp.edu.pe'
                ];
                $domain = explode('@', $value)[1];  
                if (!in_array($domain, $allowedDomains)) {
                    $fail('El dominio "@' .$domain. '" no esta permitido.');
                    //$fail("El campo Correo debe tener un dominio permitido: " . implode(', ', $allowedDomains));
                }
            }]
        ]);

        $docente = docentes::create($request->all());

        return redirect()->route('docentes.show', $docente);
        
    }

    public function show(docentes $docente){
                
        return view('practicas/docentes.show', compact('docente'));
    }

    public function edit(docentes $docente){
                
        return view('practicas/docentes.edit', compact('docente'));        
    }

    public function update(Request $request, docentes $docente){

        $request->validate([
            'codigoDocente' => ['required', 'numeric', 'min:1'],
            'nombresDocente' => ['required', 'regex:/^[A-Za-z.\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'apellidopDocente' => ['required', 'regex:/^[A-Za-z\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'apellidomDocente' => ['required', 'regex:/^[A-Za-z\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'telefonoDocente' => ['required', 'numeric', 'min:900000000', 'regex:/^9\d{8}$/'],
            'correoDocente' => ['required', 'email', function ($attribute, $value, $fail) {
                if (!str_contains($value, '@')) {
                    $fail("El campo Correo debe ser un correo electrónico válido.");
                    return;
                }
        
                $allowedDomains = [
                    'gmail.com', 
                    'outlook.com', 
                    'continental.edu.pe', 
                    'yahoo.com', 
                    'hotmail.com', 
                    'icloud.com',
                    'aol.com', 
                    'protonmail.com', 
                    'mail.com', 
                    'zoho.com', 
                    'yandex.com', 
                    'live.com',
                    'gmx.com',
                    'tutanota.com',
                    'inbox.com',
                    'mail.ru',
                    'uncp.edu.pe',
                    'virtualuncp.edu.pe',
                    'mail.upla.edu.pe',
                    'upla.edu.pe',
                    'utp.edu.pe'
                ];
                $domain = explode('@', $value)[1];  
                if (!in_array($domain, $allowedDomains)) {
                    $fail("El campo Correo debe tener un dominio permitido: " . implode(', ', $allowedDomains));
                }
            }]
        ]);

        $docente->update($request->all());

        return redirect()->route('docentes.show', $docente);
        
    }

    public function destroy(docentes $docente){        

        $docente->delete();

        return redirect()->route('docentes.index');
        
    }
}
