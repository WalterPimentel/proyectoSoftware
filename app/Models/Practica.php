<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practica extends Model
{
    use HasFactory;

    //asignar solo los campos que tiene permiso insertar, modificar o eliminar datos
    protected $fillable = [
        'codigo', 
        'idEstudiante', 
        'idDocente', 
        'idEmpresa', 
        'idEtapa', 
        'titulo'
    ];

    //la reversa de fillable es guarded, indicas que campos no deben ser tocados
    
    protected $guarded = ['id'];
    
    protected $table = "practicas";

    protected function capitalizeValue($value)
    {
        $lowercaseWords = ['y', 'es', 'de', 'en', 'la', 'del', 'el', 'con'];
        $words = explode(' ', strtolower($value));
        $capitalizedWords = [];

        foreach ($words as $key => $word) {
            if ($key === 0) {
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
        if (in_array($key, ['Titulo'])) {
            $value = $this->capitalizeValue($value);
        }

        return parent::setAttribute($key, $value);
    }

    //método para relación de 1 a 1 viceversa, desde entidad débil (recibir los datos)
    public function estudiante(){
        return $this->belongsTo('App\Models\estudiantes', 'idEstudiante');
    }

    //método para relación de 1 a Muchos viceversa, desde entidad débil (recibir los datos)
    public function docente(){
        return $this->belongsTo('App\Models\Docentes', 'idDocente');
    }
    
    public function etapa(){
        return $this->belongsTo('App\Models\etapas', 'idEtapa');
    }

    public function empresa(){
        return $this->belongsTo('App\Models\empresas', 'idEmpresa');
    }

    //método para relación de Muchos a Muchos viceversa, desde entidad fuerte
    public function requisitos(){
        return $this->belongsToMany('App\Models\requisitos');
    }
}
