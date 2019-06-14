<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad_Info extends Model
{
    protected $table='unidad_infos';
    protected $primaryKey='id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'categoria', 'cita', 'referencia',
        'nivel', 'fk_unidad_info', 'fk_investigacion'
    ];

    protected $guarded =[
        'id'
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
