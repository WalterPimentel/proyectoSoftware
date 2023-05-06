<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class estudiantes extends Model
{
    use HasFactory;

    protected $table = "estudiantes";

    protected function nombresEstudiante(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }

    protected function apellidopEstudiante(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }

    protected function apellidomEstudiante(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }

    protected function correoEstudiante(): Attribute{
        
        return new Attribute(
            set: fn($value) => strtolower($value)
        );

    }
}
