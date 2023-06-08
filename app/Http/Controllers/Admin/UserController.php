<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash;
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
            'name'      => ['required', 'regex:/^[A-Za-z\sñÑáéíóúÁÉÍÓÚ]{5,}$/'],            
            'email'     => ['required', 'email', function ($attribute, $value, $fail) {
                if (!str_contains($value, '@')) {
                    $fail("El campo Correo debe ser un correo electrónico válido.");
                    return;
                }
        
                $allowedDomains = ['continental.edu.pe'];
                $domain = explode('@', $value)[1];  
                if (!in_array($domain, $allowedDomains)) {                    
                    $fail("El campo Correo debe tener un dominio permitido: @" . implode(', @', $allowedDomains));
                }
            }],
            'password' => [
                'required', 
                'min:8', 
                'regex:/^(?=.*[a-záéíóúñ])(?=.*[A-ZÁÉÍÓÚÑ])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/', 
                'confirmed'
            ]
            
        ]);

        $password = $request->input('password');
        if (!empty($password)) {
            $hashedPassword = Hash::make($password);
            $request->merge(['password' => $hashedPassword]);
        }

        $user = User::create($request->all());

        return redirect()->route('users.show', $user)->with('success', 'Usuario creado exitosamente.');
        
    }

    public function show(User $user){
                
        return view('users.show', compact('user'));
    }

    public function edit(User $user){
                
        return view('users.edit', compact('user'));        
    }

    public function update(Request $request, User $user){

        $currentPassword = $request->input('current_password');
        $user = User::find($user->id);

        if (!Hash::check($currentPassword, $user->password)) {
            // La contraseña actual no coincide, puedes agregar un mensaje de error
            return redirect()->back()->withErrors(['current_password' => 'La contraseña actual es incorrecta.']);
        }

        $request->validate([
            'name'      => ['required', 'regex:/^[A-Za-z\sñÑáéíóúÁÉÍÓÚ]{5,}$/'],            
            'email'     => ['required', 'email', function ($attribute, $value, $fail) {
                if (!str_contains($value, '@')) {
                    $fail("El campo Correo debe ser un correo electrónico válido.");
                    return;
                }
        
                $allowedDomains = ['continental.edu.pe'];
                $domain = explode('@', $value)[1];  
                if (!in_array($domain, $allowedDomains)) {                    
                    $fail("El campo Correo debe tener un dominio permitido: @" . implode(', @', $allowedDomains));
                }
            }],
            'current_password' => ['required'],
            'password' => [
                'required', 
                'min:8', 
                'regex:/^(?=.*[a-záéíóúñ])(?=.*[A-ZÁÉÍÓÚÑ])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/', 
                'confirmed'
            ]
            
        ]);

        $password = $request->input('password');
        if (!empty($password)) {
            $hashedPassword = Hash::make($password);
            $request->merge(['password' => $hashedPassword]);
        }

        $user->update($request->all());

        return redirect()->route('users.show', $user);
        
    }

    public function destroy(User $user){        

        $user->delete();

        return redirect()->route('users.index');
        
    }
}
