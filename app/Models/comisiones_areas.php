<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comisiones_areas extends Model
{
    use HasFactory;

    protected $fillable = [
        'idDocente', 
        'idAdministrativo', 
        'nombreComision', 
        'macroProcesoComision', 
        'procesoComision', 
        'subprocesoComision',
        'periodoComision'
    ];

    protected $guarded = ['id'];
    
    protected $table = "comisiones_areas";

    protected function capitalizeValue($value)
    {
        // cada letra esta en mayuscula y los preposiciones/articulos se mantienen en micuscula
        $lowercaseWords = ['y', 'es', 'de', 'en', 'la', 'del', 'el', 'con'];
        $words = explode(' ', strtolower($value));
        $capitalizedWords = [];

        foreach ($words as $key => $word) {
            if ($key === 0) {
                //primera letra de primera palbra siempre en mayusucla incluido los preposiciones/articulos
                $capitalizedWords[] = ucfirst($word);
            } elseif (in_array($word, $lowercaseWords)) {
                $capitalizedWords[] = $word;
            } else {
                $capitalizedWords[] = ucfirst($word);
            }
        }

        return implode(' ', $capitalizedWords);
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, ['macroProcesoComision', 'procesoComision', 'subprocesoComision', 'periodoComision', 'nombreComision'])) {
            $value = $this->capitalizeValue($value);
        }

        return parent::setAttribute($key, $value);
    }

    public function plan_fd(){
        return $this->hasMany('App\Models\plan_fd', 'idComision');
    }
    
    public function acciones_mejora(){
        return $this->hasMany('App\Models\acciones_mejora', 'idComision');
    }

    public function cuadro_necesidades(){
        return $this->hasOne('App\Models\cuadro_necesidades', 'idComision');
    }
}
