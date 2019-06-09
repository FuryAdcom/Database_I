<?php

namespace App\Http\Controllers;

use App\Cuestionario;
use Illuminate\Http\Request;

class CuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('investigacion.cuestionario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'p19' => 'required',
            'p20' => 'required',
            'p21' => 'required',
            'p22' => 'required',
            'p23' => 'required'
        ]);

        Cuestionario::create([
            'id' =>  Cuestionario::max('id')+1,
            'p1' => $request->p1,
            'p2' => $request->p2,
            'p3' => $request->p3,
            'p4' => $request->p4,
            'p5' => $request->p5,
            'p6' => $request->p6,
            'p7' => $request->p7,
            'p8' => $request->p8,
            'p9' => $request->p9,
            'p10' => $request->p10,
            'p11' => $request->p11,
            'p12' => $request->p12,
            'p13' => $request->p13,
            'p14' => $request->p14,
            'p15' => $request->p15,
            'p16' => $request->p16,
            'p17' => $request->p17,
            'p18' => $request->p18,
            'p19' => $request->p19,
            'p20' => $request->p20,
            'p21' => $request->p21,
            'p22' => $request->p22,
            'p23' => $request->p23
        ]);

        return Redirect::to('investigacion.delimitacion_tema');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
