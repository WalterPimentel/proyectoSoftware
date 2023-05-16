<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class monitoreo_pfd extends Model
{
    use HasFactory;
    
    protected $table = "monitoreos_pfd";

    protected function 	descripcionMPFD(): Attribute{
        
        return new Attribute(
            get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower($value)
        );

    }
}
