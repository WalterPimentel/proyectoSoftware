<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class tipo_costo extends Model
{
    use HasFactory;

    protected $fillable = [
        'idTipoRecurso', 
        'descripcionCosto', 
        'observacionesCosto'
    ];

    protected $guarded = ['id'];

    protected $table = "tipos_costos";

    protected function 	observacionesCosto(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower($value)
        );

    }

    public function tipo_recurso(){
        return $this->belongsTo('App\Models\tipo_recurso', 'idTipoRecurso');
    }

    public function cuadro_necesidades(){
        return $this->hasMany('App\Models\cuadro_necesidades', 'idTipoCosto');
    }
}
