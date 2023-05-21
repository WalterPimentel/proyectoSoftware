<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class practicas_requisitos extends Model
{
    use HasFactory;

    protected $fillable = [
        'idPractica', 
        'idRequisito'
    ];

    protected $guarded = ['id'];

    protected $table = "practicas_requisitos";
}
