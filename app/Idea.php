<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $table= 'idea';

    protected $fillable = [
        'p1', 'p2'
    ];
    
}