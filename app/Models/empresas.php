<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreEmpresa', 
        'encargadoEmpresa', 
        'rubroEmpresa', 
        'direccionEmpresa', 
        'telefonoEmpresa'
    ];
    
    protected $guarded = ['id'];
    
    protected $table = "empresas";

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
        if (in_array($key, ['nombreEmpresa', 'encargadoEmpresa', 'rubroEmpresa', 'direccionEmpresa'])) {
            $value = $this->capitalizeValue($value);
        }

        return parent::setAttribute($key, $value);
    }
}
