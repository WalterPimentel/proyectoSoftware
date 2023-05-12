<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    use HasFactory;

    protected $table = "estudiantes";
    
    public function setAttribute($key, $value)
    {
        if (in_array($key, ['nombresEstudiante', 'apellidopEstudiante', 'apellidomEstudiante'])) {
            $value = ucwords($value);
        }elseif ($key === 'correoEstudiante') {
            $value = strtolower($value);
        }

        return parent::setAttribute($key, $value);
    }
}
