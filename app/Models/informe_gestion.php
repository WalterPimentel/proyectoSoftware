<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informe_gestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'idMonitoreoPFD', 
        'idResponsableElaboracion', 
        'descripcionIG', 
        'observacionesIG'
    ];

    protected $guarded = ['id'];

    protected $table = "informes_gestion";

    public function setAttribute($key, $value)
    {
        if (in_array($key, ['descripcionIG', 'observacionesIG'])) {
            $value = ucfirst($value);
        }

        return parent::setAttribute($key, $value);
    }

    public function monitoreo_pfd(){
        return $this->belongsTo('App\Modles\monitoreo_pfd', 'idMonitoreoPFD');
    }
}
