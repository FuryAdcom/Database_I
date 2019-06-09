<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    protected $table='cuestionarios';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable = [
        'id',
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        'p7',
        'p8',
        'p9',
        'p10',
        'p11',
        'p12',
        'p13',
        'p14',
        'p15',
        'p16',
        'p17',
        'p18',
        'p19',
        'p20',
        'p21',
        'p22',
        'p23'
    ];

    protected $guarded =[
        'id'
    ];
}
