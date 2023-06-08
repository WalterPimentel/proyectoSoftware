<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::orderby('id', 'desc')->paginate();

        return view('users.index', compact('users'));
    }
    
    public function create(){
        return view('users.create');        
    }

    public function store(Request $request){

        $request->validate([
            'name'          => ['required', 'regex:/^[A-Za-z\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'password'  => 'required',
            'email'    => ['required', 'email', function ($attribute, $value, $fail) {
                if (!str_contains($value, '@')) {
                    $fail("El campo Correo debe ser un correo electrónico válido.");
                    return;
                }
        
                $allowedDomains = ['continental.edu.pe', 'asdasd.com.pe'];
                $domain = explode('@', $value)[1];  
                if (!in_array($domain, $allowedDomains)) {
                    $fail('El dominio "@' .$domain. '" no esta permitido.');
                    $fail("El campo Correo debe tener un dominio permitido: " . implode(', ', '@' + $allowedDomains));
                }
            }]
        ]);

        $user = User::create($request->all());

        return redirect()->route('users.show', $user);
        
    }

    public function show(User $user){
                
        return view('users.show', compact('user'));
    }

    public function edit(User $user){
                
        return view('users.edit', compact('user'));        
    }

    public function update(Request $request, User $user){

        $request->validate([
            'codigouser' => ['required', 'numeric', 'min:1'],
            'nombresuser' => ['required', 'regex:/^[A-Za-z.\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'apellidopuser' => ['required', 'regex:/^[A-Za-z\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'apellidomuser' => ['required', 'regex:/^[A-Za-z\sñÑáéíóúÁÉÍÓÚ]+$/'],
            'telefonouser' => ['required', 'numeric', 'min:900000000', 'regex:/^9\d{8}$/'],
            'correouser' => ['required', 'email', function ($attribute, $value, $fail) {
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

        $user->update($request->all());

        return redirect()->route('users.show', $user);
        
    }

    public function destroy(User $user){        

        $user->delete();

        return redirect()->route('users.index');
        
    }
}
