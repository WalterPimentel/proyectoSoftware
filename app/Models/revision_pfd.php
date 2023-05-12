<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class revision_pfd extends Model
{
    use HasFactory;

    protected $table = "revision_pfd";

    public function setAttribute($key, $value)
    {
        if (in_array($key, ['descripcionRPFD', 'ovserbacionesRPFD'])) {
            $value = ucfirst($value);
        }

        return parent::setAttribute($key, $value);
    }
}
