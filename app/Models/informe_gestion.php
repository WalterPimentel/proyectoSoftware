<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class informe_gestion extends Model
{
    use HasFactory;

    protected $table = "informe_gestion";

    protected function nombreInformeGestion(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }

    protected function areaGestion(): Attribute{
        
        return new Attribute(
            set: fn($value) => strtolower($value)
        );

    }

    protected function descripcionInformeGestion(): Attribute{
        
        return new Attribute(
            set: fn($value) => strtolower($value)
        );

    }
}
