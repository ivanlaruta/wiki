<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Metas;
use Carbon\Carbon;
use DB;

class MetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt = Carbon::now('America/La_Paz');  //fecha actual
        $hoy = Carbon::now('America/La_Paz')->toDateString(); // hoy
        $ult_sem =  Carbon::now('America/La_Paz')->subWeek()->toDateString();  // menos una semana 
        $ult_15 =  Carbon::now('America/La_Paz')->subDays(15)->toDateString();  // menos 15 dias
        $ult_mes = Carbon::now('America/La_Paz')->subMonth();  // menos un mes
        $ult_mes2 = Carbon::now('America/La_Paz')->subMonth();  // menos un mes
        $ult_anio = Carbon::now('America/La_Paz')->subYear()->toDateString(); // menos un año
        
        $inicio_sem=Carbon::now('America/La_Paz')->startOfWeek()->toDateString();   //inicio de semana
        $inicio_mes=Carbon::now('America/La_Paz')->startOfMonth()->toDateString();  //inicio de mes
        $inicio_año=Carbon::now('America/La_Paz')->startOfYear()->toDateString();    //inicio de año
        $año_actual = Carbon::now('America/La_Paz') -> year; //año actual.


        $BENI = 'BENI';
        $COBIJA = 'COBIJA';
        $COCHABAMBA = 'COCHABAMBA';
        $EL_ALTO = 'EL ALTO';
        $LA_PAZ = 'LA PAZ';
        $ORURO = 'ORURO';
        $POTOSI = 'POTOSI';
        $SANTA_CRUZ = 'SANTA CRUZ';
        $SUCRE = 'SUCRE';
        $TARIJA = 'TARIJA';
        $NO_ASIGNADO = 'NO ASIGNADO';

        $TOTALES_BENI =Metas::select(DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_total_montos'))
        ->where('REGIONAL','BENI')
        ->get();

        $TOTALES_COBIJA =Metas::select(DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_total_montos'))
        ->where('REGIONAL','COBIJA')
        ->get();

        $TOTALES_COCHABAMBA =Metas::select(DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_total_montos'))
        ->where('REGIONAL','COCHABAMBA')
        ->get();

        $TOTALES_EL_ALTO =Metas::select(DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_total_montos'))
        ->where('REGIONAL','EL ALTO')
        ->get();

        $TOTALES_LA_PAZ =Metas::select(DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_total_montos'))
        ->where('REGIONAL','LA PAZ')
        ->get();

        $TOTALES_ORURO =Metas::select(DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_total_montos'))
        ->where('REGIONAL','ORURO')
        ->get();

        $TOTALES_POTOSI =Metas::select(DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_total_montos'))
        ->where('REGIONAL','POTOSI')
        ->get();

        $TOTALES_SANTA_CRUZ =Metas::select(DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_total_montos'))
        ->where('REGIONAL','SANTA CRUZ')
        ->get();

        $TOTALES_SUCRE =Metas::select(DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_total_montos'))
        ->where('REGIONAL','SUCRE')
        ->get();

        $TOTALES_TARIJA =Metas::select(DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_total_montos'))
        ->where('REGIONAL','TARIJA')
        ->get();

        $TOTALES_NO_ASIGNADO =Metas::select(DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_total_montos'))
        ->where('REGIONAL','NO ASIGNADO')
        ->get();

        $SUCURSALES_BENI=Metas::select('SUCURSAL',DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_monto'))
            
            ->where ('REGIONAL','BENI')
            ->groupBy('SUCURSAL')
            ->orderBy('meta_total_unidades', 'desc')
            ->get();
        $SUCURSALES_COBIJA=Metas::select('SUCURSAL',DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_monto'))
            
            ->where ('REGIONAL','COBIJA')
            ->groupBy('SUCURSAL')
            ->orderBy('meta_total_unidades', 'desc')
            ->get();
        $SUCURSALES_COCHABAMBA=Metas::select('SUCURSAL',DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_monto'))
            
            ->where ('REGIONAL','COCHABAMBA')
            ->groupBy('SUCURSAL')
            ->orderBy('meta_total_unidades', 'desc')
            ->get();
        $SUCURSALES_EL_ALTO=Metas::select('SUCURSAL',DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_monto'))
            
            ->where ('REGIONAL','EL ALTO')
            ->groupBy('SUCURSAL')
            ->orderBy('meta_total_unidades', 'desc')
            ->get();
        $SUCURSALES_LA_PAZ=Metas::select('SUCURSAL',DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_monto'))
            
            ->where ('REGIONAL','LA PAZ')
            ->groupBy('SUCURSAL')
            ->orderBy('meta_total_unidades', 'desc')
            ->get();
        $SUCURSALES_ORURO=Metas::select('SUCURSAL',DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_monto'))
            
            ->where ('REGIONAL','ORURO')
            ->groupBy('SUCURSAL')
            ->orderBy('meta_total_unidades', 'desc')
            ->get();
        $SUCURSALES_POTOSI=Metas::select('SUCURSAL',DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_monto'))
            
            ->where ('REGIONAL','POTOSI')
            ->groupBy('SUCURSAL')
            ->orderBy('meta_total_unidades', 'desc')
            ->get();
        $SUCURSALES_SANTA_CRUZ=Metas::select('SUCURSAL',DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_monto'))
            
            ->where ('REGIONAL','SANTA CRUZ')
            ->groupBy('SUCURSAL')
            ->orderBy('meta_total_unidades', 'desc')
            ->get();
        $SUCURSALES_SUCRE=Metas::select('SUCURSAL',DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_monto'))
            
            ->where ('REGIONAL','SUCRE')
            ->groupBy('SUCURSAL')
            ->orderBy('meta_total_unidades', 'desc')
            ->get();
        $SUCURSALES_TARIJA=Metas::select('SUCURSAL',DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_monto'))
            
            ->where ('REGIONAL','TARIJA')
            ->groupBy('SUCURSAL')
            ->orderBy('meta_total_unidades', 'desc')
            ->get();
        $SUCURSALES_NO_ASIGNADO=Metas::select('SUCURSAL',DB::raw('SUM(meta_unidades) as meta_total_unidades, SUM(meta_montos) as meta_monto'))
            
            ->where ('REGIONAL','NO ASIGNADO')
            ->groupBy('SUCURSAL')
            ->orderBy('meta_total_unidades', 'desc')
            ->get();

        return view('reportes.metas.index') 
        ->with('BENI',$BENI)
        ->with('COBIJA',$COBIJA)
        ->with('COCHABAMBA',$COCHABAMBA)
        ->with('EL_ALTO',$EL_ALTO)
        ->with('LA_PAZ',$LA_PAZ)
        ->with('ORURO',$ORURO)
        ->with('POTOSI',$POTOSI)
        ->with('SANTA_CRUZ',$SANTA_CRUZ)
        ->with('SUCRE',$SUCRE)
        ->with('TARIJA',$TARIJA)
        ->with('NO_ASIGNADO',$NO_ASIGNADO)
        ->with('TOTALES_BENI',$TOTALES_BENI)
        ->with('TOTALES_COBIJA',$TOTALES_COBIJA)
        ->with('TOTALES_COCHABAMBA',$TOTALES_COCHABAMBA)
        ->with('TOTALES_EL_ALTO',$TOTALES_EL_ALTO)
        ->with('TOTALES_LA_PAZ',$TOTALES_LA_PAZ)
        ->with('TOTALES_ORURO',$TOTALES_ORURO)
        ->with('TOTALES_POTOSI',$TOTALES_POTOSI)
        ->with('TOTALES_SANTA_CRUZ',$TOTALES_SANTA_CRUZ)
        ->with('TOTALES_SUCRE',$TOTALES_SUCRE)
        ->with('TOTALES_TARIJA',$TOTALES_TARIJA)
        ->with('TOTALES_NO_ASIGNADO',$TOTALES_NO_ASIGNADO)
        ->with('SUCURSALES_BENI',$SUCURSALES_BENI)
        ->with('SUCURSALES_COBIJA',$SUCURSALES_COBIJA)
        ->with('SUCURSALES_COCHABAMBA',$SUCURSALES_COCHABAMBA)
        ->with('SUCURSALES_EL_ALTO',$SUCURSALES_EL_ALTO)
        ->with('SUCURSALES_LA_PAZ',$SUCURSALES_LA_PAZ)
        ->with('SUCURSALES_ORURO',$SUCURSALES_ORURO)
        ->with('SUCURSALES_POTOSI',$SUCURSALES_POTOSI)
        ->with('SUCURSALES_SANTA_CRUZ',$SUCURSALES_SANTA_CRUZ)
        ->with('SUCURSALES_SUCRE',$SUCURSALES_SUCRE)
        ->with('SUCURSALES_TARIJA',$SUCURSALES_TARIJA)
        ->with('SUCURSALES_NO_ASIGNADO',$SUCURSALES_NO_ASIGNADO)
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
