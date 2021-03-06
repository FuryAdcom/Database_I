<?php

namespace App\Http\Controllers;

use App\Pregunta;
use App\Evento;
use App\Contexto;
use App\Investigacion;
use App\ObjetivoEspecifico;
use App\ObjetivoGeneral;
use Illuminate\Http\Request;
use Datatables;
use DB;

class HologramaController extends Controller
{

    public function holograma($id){
        $investigacion = Investigacion::where('id', $id)
        ->first();
        $enunciado_holopraxico = Pregunta::where('fk_investigacion', $id)
        ->first();
        $objetivo_general = ObjetivoGeneral::where('fk_pregunta', $id)
        ->first();

        return view('investigacion.holograma', compact('investigacion', 'enunciado_holopraxico', 'objetivo_general'));
    }

    public function getPreguntaObjetivo2(Request $request){
        $id = $request->get('id');

        $preguntasObjetivos2 = ObjetivoEspecifico::leftjoin('objetivo_general as og', 'og.id','=', 'objetivo_especifico.fk_objetivo_general')
        ->leftjoin('pregunta', 'pregunta.id','=', 'og.fk_pregunta')
        ->leftjoin('investigacion', 'investigacion.id','=', 'pregunta.fk_investigacion')
        ->where('investigacion.id', $id)
        ->where('og.deleted','!=',true)
        ->where('investigacion.deleted','!=',true)
        ->where('objetivo_especifico.deleted','!=',true)
        ->select(DB::raw('objetivo_especifico.*, og.objetivo as pregunta_secundaria'))
        ->get();

        return Datatables::of($preguntasObjetivos2)
        ->addColumn('action', function ($preguntaObjetivo2) {
            return '<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>';
        })
        ->make(true);
    }

    public function getTablaOperacionalizacion(Request $request){
        $id = $request->get('id');

        $tablaOperacionalizacion = DB::select(DB::raw('SELECT e.nombre as evento, s.nombre as sinergia, i.nombre as indicio, it.numero as item
        FROM evento e, evento_ui eui, unidad_informacion ui, sinergia s, indicio i, item it
        WHERE ui.fk_pregunta = '.$id.' AND ui.id = eui.fk_unidad_informacion
        AND eui.fk_evento = e.id AND eui.id = s.fk_evento_ui
        AND i.fk_sinergia = s.id AND it.fk_indicio = i.id
        AND e.deleted != true AND s.deleted != true AND i.deleted != true
        AND it.deleted != true;'));

        return Datatables::of($tablaOperacionalizacion)
        ->make(true);
    }

}
