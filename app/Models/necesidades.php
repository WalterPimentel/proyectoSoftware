<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class necesidades extends Model
{
    use HasFactory;

    protected $table = "necesidades";

    protected function areaNecesidades(): Attribute{
        
        return new Attribute(
            set: fn($value) => strtolower($value)
        );

    }

    protected function descripcionNecesidades(): Attribute{
        
        return new Attribute(
            set: fn($value) => strtolower($value)
        );

    }
}
