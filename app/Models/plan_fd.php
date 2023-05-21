<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class plan_fd extends Model
{
    use HasFactory;

    protected $fillable = [
        'idComision', 
        'idCuadroNecesidades', 
        'idRevisionPFD', 
        'idActaConsejoFacultad', 
        'idResponsableElaboracion', 
        'idResponsableAprobacion',
        'descripcionPFD',
        'fechaElaboracionPFD',
        'fechaAprobacionPFD',
        'yearPFD'
    ];

    protected $guarded = ['id'];

    protected $table = "planes_fd";

    protected function 	descripcionPFD(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower($value)
        );

    }
}
