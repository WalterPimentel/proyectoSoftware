<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class empresas extends Model
{
    use HasFactory;
    
    protected $table = "empresas";

    protected function nombreEmpresa(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }

    protected function encargadoEmpresa(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }

    protected function rubroEmpresa(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }

    protected function direccionEmpresa(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }
}
