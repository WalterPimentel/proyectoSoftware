<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

//llamado manual
use Illuminate\Database\Eloquent\Casts\Attribute;
use PhpParser\Node\Expr\FuncCall;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //agregar el método mutador para el campo NAME del usuario
    protected function name(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucwords($value), //muestra mayusculas primeras letras
            set: fn($value) => strtolower($value)//registra minusculas al BD

        );

        //Otra forma de crear mutadores
        /*
        return new Attribute(
            get: function($value){
                return ucwords($value);
            },

            set:function($value){
                return strtolower($value);
            }
        );
        */
    }
}
