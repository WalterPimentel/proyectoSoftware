<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class tipo_recurso extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcionRecurso'
    ];

    protected $guarded = ['id'];

    protected $table = "tipos_recursos";

    protected function 	descripcionRecurso(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower($value)
        );

    }

    public function acciones_mejora(){
        return $this->hasMany('App\Models\acciones_mejora', 'idTipoRecurso');
    }

    public function cuadro_necesidades(){
        return $this->hasMany('App\Models\cuadro_necesidades', 'idTipoRecurso');
    }

    public function tipo_costo(){
        return $this->hasOne('App\Models\tipo_costo', 'idTipoRecurso');
    }

    public function tdr(){
        return $this->hasOne('App\Models\tdr', 'idTipoRecurso');
    }
}
