<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnunciadoHolopraxico extends Model
{

    protected $table='pregunta';
    protected $primaryKey='id';

    protected $fillable = [
        'pregunta',
        'tipo'
    ];
}
