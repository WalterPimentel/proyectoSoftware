<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acciones_mejora extends Model
{
    use HasFactory;

    protected $table = "acciones_mejoras";

    protected function capitalizeValue($value)
    {
        return ucfirst(strtolower($value)); //ucfirst muestra en mayúscula solo la primera letra de la primera palabra
    }

    public function setAttribute($key, $value) // se utiliza para establecer los valores de los atributos
    {
        if (in_array($key, ['metasAM', 'descripcionAM'])) {
            $value = $this->capitalizeValue($value);
        }

        return parent::setAttribute($key, $value);
    }
}
