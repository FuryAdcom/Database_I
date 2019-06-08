<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert_idea(request $req){
        $p1 = $req->input('p1');
        $p2 = $req->input('p2');
        
        $data = array('p1'=>$p1, 'p2'=>$p2);

        DB::table('idea')->insert($data);
        
    }
}
