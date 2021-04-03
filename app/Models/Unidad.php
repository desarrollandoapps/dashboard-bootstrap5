<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unidad extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "unidades";
    protected $fillable = [ 
        'nombre',
        'curso_id'
    ];
}
