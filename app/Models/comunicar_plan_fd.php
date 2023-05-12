<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comunicar_plan_fd extends Model
{
    use HasFactory;
    
    protected $table = "comunicar_plan_fd";

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
}
