<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requisitos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreRequisito', 
        'descripcionRequisito', 
        'estado'
    ];

    protected $guarded = ['id'];

    protected $table = "requisitos";

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
        if (in_array($key, ['nombreRequisito'])) {
            $value = $this->capitalizeValue($value);
        }elseif ($key === 'descripcionRequisito') {
            $value = ucfirst($value);
        }

        return parent::setAttribute($key, $value);
    }
}
