<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnunciadoHolopraxico extends Model
{

    protected $table='enunciado_holopraxicos';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable = [
        'id',
        'pregunta'
    ];

    protected $guarded =[
        'id'
    ];
}
