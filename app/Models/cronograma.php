<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class cronograma extends Model
{
    use HasFactory;

    protected $table = "cronograma";

    protected function 	descripcionCronograma(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucfirst(strtolower($value)),
            set: fn($value) => strtolower($value)
        );

    }
}
