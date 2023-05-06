<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class etapas extends Model
{
    use HasFactory;

    protected $table = "etapas";

    protected function nombreEtapa(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }

    protected function descripcionEtapa(): Attribute{
        
        return new Attribute(
            set: fn($value) => strtolower($value)
        );

    }
}
