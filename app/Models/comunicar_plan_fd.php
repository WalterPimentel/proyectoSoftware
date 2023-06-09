<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comunicar_plan_fd extends Model
{
    use HasFactory;

    protected $fillable = ['codigoEstudiante', 
        'idPlanFD', 
        'idParteInteresada', 
        'descripcionComunicarPFD', 
        'medioComunicarPFD', 
        'fechaComunicarPFD',
        'horaComunicarPFD',
        'observacionesComunicarPFD'
    ];

    protected $guarded = ['id'];
    
    protected $table = "comunicar_planes_fd";

    protected function capitalizeValue($value)
    {
        return ucfirst(strtolower($value));
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, ['descripcionComunicarPFD', 'medioComunicarPFD'])) {
            $value = $this->capitalizeValue($value);
        }

        return parent::setAttribute($key, $value);
    }

    public function plan_fd(){
        return $this->belongsTo('App\Models\plan_fd', 'idPlanFD');
    }
}
