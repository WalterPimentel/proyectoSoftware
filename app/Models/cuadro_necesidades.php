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

    public function plan_fd(){
        return $this->hasMany('App\Models\plan_fd', 'idCuadroNecesidades');
    }

    public function comisiones_areas(){
        return $this->belongsTo('App\Models\comisiones_areas', 'idComision');
    }

    public function tipo_recurso(){
        return $this->belongsTo('App\Models\tipo_recurso', 'idTipoRecurso');
    }

    public function tipo_costo(){
        return $this->belongsTo('App\Models\tipo_costo', 'idTipoCosto');
    }

    public function tdr(){
        return $this->belongsTo('App\Models\tdr', 'idTDR');
    }
}
