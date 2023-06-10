<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acciones_mejora extends Model
{
    use HasFactory;

    protected $fillable = [
        'idPlanFD',
        'idComision',          
        'idMonitoreoPFD', 
        'idTipoRecurso', 
        'metasAM', 
        'descripcionAM'
    ];

    protected $guarded = ['id'];

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

    public function plan_fd(){
        return $this->belongsTo('App\Models\plan_fd', 'idPlanFD');
    }

    public function comisiones_areas(){
        return $this->belongsTo('App\Models\comisiones_areas', 'idComision');
    }

    public function monitoreo_pfd(){
        return $this->belongsTo('App\Models\monitoreo_pfd', 'idMonitoreoPFD');
    }

    public function tipo_recurso(){
        return $this->belongsTo('App\Models\tipo_recurso', 'idTipoRecurso');
    }

}
