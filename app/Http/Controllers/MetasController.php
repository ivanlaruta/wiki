<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
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

        $ubica =Factura::select('REGIONAL')
        ->groupBy('REGIONAL')
        ->orderBy('REGIONAL','ASC')
        ->get();

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


        $LA_PAZ = 'LA PAZ';


        $TOTALES_LA_PAZ =Metas::select(DB::raw('metas.REGIONAL,SUM(meta_unidades) as META_TOTAL_UNIDADES, SUM(meta_montos) as META_TOTAL_MONTOS ,(SELECT COUNT(f.CHASIS)as Expr1 from v_facturados f where f.REGIONAL = metas.REGIONAL )as REAL_TOTAL_UNIDADES, (SELECT SUM (F.BOLIVIANOS)as Expr2 from v_facturados f where f.REGIONAL = metas.REGIONAL  )AS REAL_TOTAL_MONTO'))
        ->where('REGIONAL','LA PAZ')
        ->groupBy('REGIONAL')
        ->first();

        //dd($TOTALES_LA_PAZ->META_TOTAL_UNIDADES);
        $SUCURSALES_LA_PAZ=Metas::select(DB::raw('metas.REGIONAL,metas.SUCURSAL,SUM(metas.META_UNIDADES) as META_UNIDADES,SUM(metas.META_MONTOS) as META_MONTOS ,(SELECT COUNT(f.CHASIS)as Expr1 from v_facturados f where f.REGIONAL = metas.REGIONAL and metas.SUCURSAL = f.SUCURSAL)as REAL_UNIDADES, (SELECT SUM (F.BOLIVIANOS)as Expr2 from v_facturados f where f.REGIONAL = metas.REGIONAL and metas.SUCURSAL = f.SUCURSAL )AS REAL_MONTO '))
            
            ->where ('REGIONAL','LA PAZ')
            ->groupBy('REGIONAL','SUCURSAL')
            ->orderBy('META_UNIDADES', 'desc')
            ->get();      
          

        return view('reportes.metas.index') 
        
        ->with('LA_PAZ',$LA_PAZ)
       
        ->with('TOTALES_LA_PAZ',$TOTALES_LA_PAZ)
       
        ->with('SUCURSALES_LA_PAZ',$SUCURSALES_LA_PAZ)
        ->with('ubica',$ubica)
        
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
