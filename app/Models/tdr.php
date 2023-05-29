<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class tdr extends Model
{
    use HasFactory;

    protected $fillable = [
        'idTipoRecurso', 
        'mayorCuantiaTDR', 
        'descripcionTDR', 
        'costoTDR'
    ];

    protected $guarded = ['id'];

    protected $table = "tdr";

    protected function 	descripcionTDR(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower($value)
        );

    }

    public function tipo_recurso(){
        return $this->belongsTo('App\Models\tipo_recurso', 'idTipoRecurso');
    }

    public function cuadro_necesidades(){
        return $this->hasMany('App\Models\cuadro_necesidades', 'idTDR');
    }
}
