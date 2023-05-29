<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class revision_pfd extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcionRPFD', 
        'observacionesRPFD'
    ];

    protected $guarded = ['id'];

    protected $table = "revisiones_pfd";

    public function setAttribute($key, $value)
    {
        if (in_array($key, ['descripcionRPFD', 'observacionesRPFD'])) {
            $value = ucfirst($value);
        }

        return parent::setAttribute($key, $value);
    }

    public function plan_fd(){
        return $this->hasOne('App\Models\plan_fd', 'idRevisionPFD');
    }
}
