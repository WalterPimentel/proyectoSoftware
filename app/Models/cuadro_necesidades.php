<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class cuadro_necesidades extends Model
{
    use HasFactory;

    protected $fillable = ['codigoEstudiante', 
        'idComision', 
        'idTipoRecurso', 
        'idTipoCosto', 
        'idTDR', 
        'descripcionCuadroN',
        'cantidadCuadroN',
        'precioCuadroN'
    ];
    protected $guarded = ['id'];
    
    protected $table = "cuadro_necesidades";

    protected function 	descripcionCuadroN(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucfirst(strtolower($value)),
            set: fn($value) => strtolower($value)
        );

    }
}
