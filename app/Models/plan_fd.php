<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function cronograma(){
        return $this->hasOne('App\Models\cronograma', 'idPlanFD');
    }

    public function comunicar_plan_fd(){
        return $this->hasOne('App\Models\comunicar_plan_fd', 'idPlanFD');
    }

    public function acciones_mejora(){
        return $this->hasMany('App\Models\acciones_mejora', 'idPlanFD');
    }

    public function revision_pfd(){
        return $this->belongsTo('App\Models\revision_pfd', 'idRevisionPFD');
    }

    public function cuadro_necesidades(){
        return $this->belongsTo('App\Models\cuadro_necesidades', 'idCuadroNecesidades');
    }

    public function comisiones_areas(){
        return $this->belongsTo('App\Models\comisiones_areas', 'idComision');
    }
}
