<?php

namespace App\Http\Controllers;

use App\UnidadInformacion;
use Illuminate\Http\Request;

class UnidadInformacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('investigacion.fundamento_noologico');
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
            'categoria' => 'required',
            //'cita' => 'required',
            'referencia' => 'required',
            'nivel' => 'required'
        ]);

        Unidad_Info::create([
            'id' =>  Unidad_Info::max('id') + 1,
            'categoria' => $request->categoria,
            'cita' => $request->descripcion,
            'referencia' => $request->referencia,
            'nivel' => $request->nivel,
            //'fk_unidad_info' => $request->fk_unidad_info,
            //'fk_investigacion' => $request->eh,
        ]);

        return redirect('investigacion.hola');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UnidadInformacion  $unidadInformacion
     * @return \Illuminate\Http\Response
     */
    public function show(UnidadInformacion $unidadInformacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UnidadInformacion  $unidadInformacion
     * @return \Illuminate\Http\Response
     */
    public function edit(UnidadInformacion $unidadInformacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnidadInformacion  $unidadInformacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnidadInformacion $unidadInformacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnidadInformacion  $unidadInformacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnidadInformacion $unidadInformacion)
    {
        //
    }
}
