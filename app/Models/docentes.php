<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docentes extends Model
{
    use HasFactory;

    protected $table = "docentes";

    //Esta forma es mas reutilizable y guarda en la BD con letra inicial mayuscula
    //Este codigo es mas util para campos como nombres y apellidos, para textos u oraciones mejor el anterior (solo minusculas)

    public function setAttribute($key, $value)
    {
        if (in_array($key, ['nombresDocente', 'apellidopDocente', 'apellidomDocente'])) {
            $value = ucwords($value);
        }elseif ($key === 'correoDocente') {
            $value = strtolower($value);
        }

        return parent::setAttribute($key, $value);
    }

    /*
    protected function nombresDocente(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }

    protected function apellidopDocente(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }

    protected function apellidomDocente(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }

    protected function correoDocente(): Attribute{
        
        return new Attribute(
            set: fn($value) => strtolower($value)
        );

    }
    */
}
