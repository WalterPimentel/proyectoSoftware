<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informe_gestion extends Model
{
    use HasFactory;

    protected $table = "informe_gestion";

    public function setAttribute($key, $value)
    {
        if (in_array($key, ['descripcionIG', 'observacionesIG'])) {
            $value = ucfirst($value);
        }

        return parent::setAttribute($key, $value);
    }
}
