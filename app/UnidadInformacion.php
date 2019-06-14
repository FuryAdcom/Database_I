<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadInformacion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'categoria', 'cita', 'referencia',
        'nivel', 'fk_unidad_info', 'fk_investigacion'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'fecha_creacion' => 'datetime',
    ];
}
