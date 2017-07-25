<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\V_ubicacion;
use App\Marca;
use App\Modelo;
use App\Master;
use App\V_histo_ubica;
use Carbon\Carbon;
use DB;

class AlertaVehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $dt = Carbon::now('America/La_Paz');  //fecha actual

        $hoy = Carbon::now('America/La_Paz')->format('Ymd'); // hoy

        $ult_60 =  Carbon::now('America/La_Paz')->subDays(60)->format('Ymd');  // menos 60 dias
        $ult_mes = Carbon::now('America/La_Paz')->subMonth()->format('Ymd'); // menos un mes
        $ult_6mes = Carbon::now('America/La_Paz')->subMonth(6)->format('Ymd');  // menos un mes
        $ult_anio = Carbon::now('America/La_Paz')->subYear()->format('Ymd'); // menos un año
        $ult_2anio = Carbon::now('America/La_Paz')->subYear(2)->format('Ymd'); // menos dos año
        
        // $inicio_sem=Carbon::now('America/La_Paz')->startOfWeek()->toDateString();   //inicio de semana
        // $inicio_mes=Carbon::now('America/La_Paz')->startOfMonth()->toDateString();  //inicio de mes
        // $inicio_año=Carbon::now('America/La_Paz')->startOfYear()->toDateString();    //inicio de año

        // $inicio_mes_ant = $ult_mes->startOfMonth()->toDateString();
        // $fin_mes_ant = $ult_mes2->endOfMonth()->toDateString();

        $año_actual = Carbon::now('America/La_Paz') -> year; //año actual.


        $dias60 =V_histo_ubica::where('fecha_ult_mov','<',$ult_60)
        ->whereIn('estado', ['DISPONIBLE','RESERVADO'])->count();

        $meses6 =V_histo_ubica::where('fecha_ult_mov','<',$ult_6mes)
        ->whereIn('estado', ['DISPONIBLE','RESERVADO'])->count();

        $años1 =V_histo_ubica::where('fecha_ult_mov','<',$ult_anio)
        ->whereIn('estado', ['DISPONIBLE','RESERVADO'])->count();

        $años2 =V_histo_ubica::where('fecha_ult_mov','<',$ult_2anio)
        ->whereIn('estado', ['DISPONIBLE','RESERVADO'])->count();


        $det_dias60 =V_histo_ubica::where('fecha_ult_mov','<',$ult_60)
        ->whereIn('estado', ['DISPONIBLE','RESERVADO'])->get();

        $det_meses6 =V_histo_ubica::where('fecha_ult_mov','<',$ult_6mes)
        ->whereIn('estado', ['DISPONIBLE','RESERVADO'])->get();

        $det_años1 =V_histo_ubica::where('fecha_ult_mov','<',$ult_anio)
        ->whereIn('estado', ['DISPONIBLE','RESERVADO'])->get();

        $det_años2 =V_histo_ubica::where('fecha_ult_mov','<',$ult_2anio)
        ->whereIn('estado', ['DISPONIBLE','RESERVADO'])->get();



        // $detalle_reg=V_histo_ubica::select('nom_localidad' , 'UBICACION',DB::raw('COUNT(*) AS UNIDADES'))
        // ->where('fecha_ult_mov','<',$ult_60)
        // ->whereIn('estado', ['DISPONIBLE','RESERVADO'])
        // ->groupBy('nom_localidad','UBICACION')
        // ->orderBy('nom_localidad', 'asc','UNIDADES')
        // ->get();

        $detalle_reg=V_histo_ubica::select('nom_localidad' , DB::raw('COUNT(*) AS UNIDADES'))
        ->where('fecha_ult_mov','<',$ult_60)
        ->whereIn('estado', ['DISPONIBLE','RESERVADO'])
        ->groupBy('nom_localidad')
        ->orderBy('UNIDADES','DESC')
        ->get();

        $detalle_reg_1año=V_histo_ubica::select('nom_localidad' , DB::raw('COUNT(*) AS UNIDADES'))
        ->where('fecha_ult_mov','<',$ult_anio)
        ->whereIn('estado', ['DISPONIBLE','RESERVADO'])
        ->groupBy('nom_localidad')
        ->orderBy('UNIDADES','DESC')
        ->get();

         return view('alerta_vehiculos.index')
            ->with('dias60',$dias60)
            ->with('meses6',$meses6)
            ->with('años1',$años1)
            ->with('años2',$años2)

            ->with('ult_60',$ult_60)
            ->with('ult_6mes',$ult_6mes)
            ->with('ult_anio',$ult_anio)
            ->with('ult_2anio',$ult_2anio)

            ->with('det_dias60',$det_dias60)
            ->with('det_meses6',$det_meses6)
            ->with('det_años1',$det_años1)
            ->with('det_años2',$det_años2)
            ->with('detalle_reg',$detalle_reg)
            ->with('detalle_reg_1año',$detalle_reg_1año)
            ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
