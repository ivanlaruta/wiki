<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;
use Carbon\Carbon;
use DB;
class VentasController extends Controller
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

        $inicio_mes_ant = $ult_mes->startOfMonth()->toDateString();
        $fin_mes_ant = $ult_mes2->endOfMonth()->toDateString();

        $año_actual = Carbon::now('America/La_Paz') -> year; //año actual.

        $dia =Venta::where('FECHA_FACTURA',$hoy)->count();

        $esta_sema =Venta::whereBetween('FECHA_FACTURA',[$inicio_sem,$hoy])->count();

        $ult_15d =Venta::whereBetween('FECHA_FACTURA',[$ult_15,$hoy])->count();

        $este_mes =Venta::whereBetween('FECHA_FACTURA',[$inicio_mes,$hoy])->count();

        $anterior_mes=Venta::whereBetween('FECHA_FACTURA',[$inicio_mes_ant,$fin_mes_ant])->count();

        $este_año =Venta::whereBetween('FECHA_FACTURA',[$inicio_año,$hoy])->count();
        
        // $sema =Venta::whereBetween('FECHA_FACTURA',[$ult_sem,$hoy])->count();

        // $mes =Venta::whereBetween('FECHA_FACTURA',[$ult_mes,$hoy])->count();

        // $año =Venta::whereBetween('FECHA_FACTURA',[$ult_anio,$hoy])->count();

        // $menos_año =Venta::where('FECHA_FACTURA','<',$ult_anio)->count();

        $todos =Venta::all()->count();

        $min_date =Venta::min('FECHA_FACTURA');


         $por_reg =Venta::select('REGIONAL',DB::raw('COUNT(*) AS VENTAS'))
         ->where(DB::raw('YEAR(FECHA_FACTURA)'),'=',$año_actual)
         ->groupBy('REGIONAL')
         ->orderBy('VENTAS', 'desc')
         ->get();

          //$por_mes = DB::select( DB::raw("SELECT SUBSTRING(CONVERT(VARCHAR(6),FECHA_FACTURA,112),5,2) as MES ,COUNT (*) VENTAS  FROM ventas WHERE CONVERT(VARCHAR(4),FECHA_FACTURA,112) >= '".$año_actual."' GROUP BY SUBSTRING(CONVERT(VARCHAR(6),FECHA_FACTURA,112),5,2)"));

          $por_mes = Venta::select( DB::raw("month(FECHA_FACTURA) as MES , COUNT (*) as VENTAS"))
          ->where('FECHA_FACTURA','>',$inicio_año)
          ->groupBy(DB::raw('month(FECHA_FACTURA)'))

          ->get();


          $por_marca =Venta::select('MARCA',DB::raw('COUNT(*) AS VENTAS'))
         ->where('FECHA_FACTURA','>',$inicio_año)
         ->groupBy('MARCA')
          ->orderBy('VENTAS', 'desc')
         ->get();
         
         return view('ventas.index')
         ->with('dia',$dia)

         // ->with('sema',$sema)
         // ->with('mes',$mes)
         // ->with('año',$año)
         // ->with('menos_año',$menos_año)
         ->with('todos',$todos)
         ->with('min_date',$min_date)

         ->with('hoy',Carbon::now('America/La_Paz'))
         // ->with('ult_sem',Carbon::now('America/La_Paz')->subWeek())
         // ->with('ult_mes',Carbon::now('America/La_Paz')->subMonth())
         // ->with('ult_anio',Carbon::now('America/La_Paz')->subYear())
         
         ->with('por_reg',$por_reg)
         ->with('por_mes',$por_mes)
         ->with('por_marca',$por_marca)
         ->with('año_actual',$año_actual)

         ->with('inicio_sem',Carbon::now('America/La_Paz')->startOfWeek())
         ->with('inicio_mes',Carbon::now('America/La_Paz')->startOfMonth())
         ->with('inicio_año',Carbon::now('America/La_Paz')->startOfYear())
         ->with('ult_15', Carbon::now('America/La_Paz')->subDays(15))

         ->with('inicio_mes_ant',$inicio_mes_ant)
         ->with('fin_mes_ant',$fin_mes_ant)

        
         ->with('esta_sema',$esta_sema)
         ->with('ult_15d',$ult_15d)
         ->with('este_mes',$este_mes)
         ->with('este_año',$este_año)
         ->with('anterior_mes',$anterior_mes)
         
         ;

    }

    public function por_mes($mes)
    {

        if ($mes == 1) { 
            $desc_mes='ENERO';
            $desc_mes_ant='DICIEMBRE';
        }
        if ($mes == 2) { 
            $desc_mes='FEBRERO';
            $desc_mes_ant='ENERO';
        }
        if ($mes == 3) { 
            $desc_mes='MARZO';
            $desc_mes_ant='FEBRERO';
        }
        if ($mes == 4) { 
            $desc_mes='ABRIL';
            $desc_mes_ant='MARZO';
        }
        if ($mes == 5) { 
            $desc_mes='MAYO';
            $desc_mes_ant='ABRIL';
        }
        if ($mes == 6) { 
            $desc_mes='JUNIO';
            $desc_mes_ant='MAYO';
        }
        if ($mes == 7) { 
            $desc_mes='JULIO';
            $desc_mes_ant='JUNIO';
        }
        if ($mes == 8) { 
            $desc_mes='AGOSTO';
            $desc_mes_ant='JULIO';
        }
        if ($mes == 9) { 
            $desc_mes='SEPTIEMBRE';
            $desc_mes_ant='AGOSTO';
        }
        if ($mes == 10){ 
            $desc_mes=' OCTUBRE';
            $desc_mes_ant=' SEPTIEMBRE';
        }
        if ($mes == 11) { 
            $desc_mes='NOVIEMBRE';
            $desc_mes_ant='OCTUBRE';
        }
        if ($mes == 12) { 
            $desc_mes='DICIEMBRE';
            $desc_mes_ant='NOVIEMBRE';
        }


        $año_actual = Carbon::now('America/La_Paz') -> year;
        $fecha = $año_actual.'-'.$mes.'-01';

        $inicio_mes_anterior = Carbon::parse($fecha)->subMonth()->toDateString();
        $aux_ant = Carbon::parse($fecha)->subMonth();
        $fin_mes_anterior = $aux_ant->endOfMonth()->toDateString();

        $inicio_mes = Carbon::parse($fecha)->toDateString();
        $aux = Carbon::parse($fecha);
        $fin_mes = $aux->endOfMonth()->toDateString();

        //============= CALCULO DE DIFERENCIAS ========

        $ventas_mes =Venta::whereBetween('FECHA_FACTURA',[$inicio_mes,$fin_mes])->count();
        $ventas_mes_anterior =Venta::whereBetween('FECHA_FACTURA',[$inicio_mes_anterior,$fin_mes_anterior])->count();

        $prom = DB::select("SELECT avg(VENTAS) AS VENTAS FROM (SELECT  COUNT (*) as VENTAS FROM v_ventas_fac where FECHA_FACTURA >'2017-01-01'Group by month(FECHA_FACTURA)) as VENTAS");

        $promedio = $prom[0]->VENTAS;

        $dif_mes_anterior = $ventas_mes - $ventas_mes_anterior ;
        $dif_prom = $ventas_mes - $promedio ;
       
        //==========================================0


        //============  LISTAS ====================

        $por_reg =Venta::select('REGIONAL',DB::raw('COUNT(*) AS VENTAS'))
         ->whereBetween('FECHA_FACTURA',[$inicio_mes,$fin_mes])
         ->groupBy('REGIONAL')
         ->orderBy('VENTAS', 'desc')
         ->get();

        $por_marca =Venta::select('MARCA',DB::raw('COUNT(*) AS VENTAS'))
         ->whereBetween('FECHA_FACTURA',[$inicio_mes,$fin_mes])
         ->groupBy('MARCA')
          ->orderBy('VENTAS', 'desc')
         ->get();

        $por_dia =Venta::select('FECHA_FACTURA',DB::raw('COUNT(*) AS VENTAS'))
         ->whereBetween('FECHA_FACTURA',[$inicio_mes,$fin_mes])
         ->groupBy('FECHA_FACTURA')
          ->orderBy('FECHA_FACTURA')
         ->get();

         //===================================================



         return view('ventas.detalle_por_mes')
      
         ->with('año_actual',$año_actual)

         ->with('inicio_mes',$inicio_mes)
         ->with('fin_mes',$fin_mes)

         ->with('por_dia',$por_dia)
         ->with('por_reg',$por_reg)
         ->with('por_marca',$por_marca)
         ->with('desc_mes',$desc_mes)
         ->with('desc_mes_ant',$desc_mes_ant)

         ->with('ventas_mes',$ventas_mes)
         ->with('ventas_mes_anterior',$ventas_mes_anterior)

         ->with('promedio',$promedio)
         ->with('dif_mes_anterior',$dif_mes_anterior)
         ->with('dif_prom',$dif_prom)
         
         ;
        
    }

    public function por_regional($reg)
    {
        $año_actual = Carbon::now('America/La_Paz') -> year;
        $inicio_año=Carbon::now('America/La_Paz')->startOfYear()->toDateString();    //inicio de año

        $total = Venta::where('REGIONAL',$reg)
        ->where('FECHA_FACTURA','>',$inicio_año)
        ->count();
      
        $por_sucursal =Venta::select('SUCURSAL',DB::raw('COUNT(*) AS VENTAS'))
         ->where('FECHA_FACTURA','>',$inicio_año)
         ->where('REGIONAL','=',$reg)
         ->whereNotNull('REGIONAL')
         ->groupBy('SUCURSAL')
         ->orderBy('VENTAS', 'desc')
         ->get();

        $por_marca =Venta::select('MARCA',DB::raw('COUNT(*) AS VENTAS'))
         ->where('FECHA_FACTURA','>',$inicio_año)
         ->where('REGIONAL','=',$reg)
         ->whereNotNull('REGIONAL')
         ->groupBy('MARCA')
          ->orderBy('VENTAS', 'desc')
         ->get();

        $por_mes = Venta::select( DB::raw("month(FECHA_FACTURA) as MES , COUNT (*) as VENTAS"))
          ->where('FECHA_FACTURA','>',$inicio_año)
          ->where('REGIONAL','=',$reg)
         ->whereNotNull('REGIONAL')
          ->groupBy(DB::raw('month(FECHA_FACTURA)'))

          ->get();

        $regional = rtrim($reg);

         //===================================================


         return view('ventas.detalle_por_regional')
      
         ->with('año_actual',$año_actual)

         ->with('por_sucursal',$por_sucursal)
         ->with('por_marca',$por_marca)
         ->with('por_mes',$por_mes)

         ->with('regional',$regional)
         ->with('total',$total)
         ;
        
    }

     public function por_marca($marca)
    {
        $año_actual = Carbon::now('America/La_Paz') -> year;
        $inicio_año=Carbon::now('America/La_Paz')->startOfYear()->toDateString();    //inicio de año

        $total = Venta::where('MARCA',$marca)
        ->where('FECHA_FACTURA','>',$inicio_año)
        ->count();
      
        $por_regional =Venta::select('REGIONAL',DB::raw('COUNT(*) AS VENTAS'))
         ->where('FECHA_FACTURA','>',$inicio_año)
         ->where('MARCA',$marca)
         ->groupBy('REGIONAL')
         ->orderBy('VENTAS', 'desc')
         ->get();

        $por_modelo =Venta::select('MODELO',DB::raw('COUNT(*) AS VENTAS'))
         ->where('FECHA_FACTURA','>',$inicio_año)
         ->where('MARCA',$marca)
         ->groupBy('MODELO')
         ->orderBy('VENTAS', 'desc')
         ->get();

        $por_mes = Venta::select( DB::raw("month(FECHA_FACTURA) as MES , COUNT (*) as VENTAS"))
          ->where('FECHA_FACTURA','>',$inicio_año)
          ->where('MARCA',$marca)
          ->groupBy(DB::raw('month(FECHA_FACTURA)'))
          ->get();

       

         //===================================================

         return view('ventas.detalle_por_marca')
      
         ->with('año_actual',$año_actual)

         ->with('por_regional',$por_regional)
         ->with('por_modelo',$por_modelo)
         ->with('por_mes',$por_mes)

         ->with('marca',$marca)
         ->with('total',$total)
         ;
        
    }

    public function detalle_fecha($f_ini,$f_fin,$title,$vista,$origen)
    {
        $año_actual = Carbon::now('America/La_Paz') -> year;

        $mes = Carbon::parse($f_ini)->month;

        if ($mes == 1) { $desc_mes='ENERO'; }
        if ($mes == 2) { $desc_mes='FEBRERO'; }
        if ($mes == 3) { $desc_mes='MARZO'; }
        if ($mes == 4) { $desc_mes='ABRIL'; }
        if ($mes == 5) { $desc_mes='MAYO'; }
        if ($mes == 6) { $desc_mes='JUNIO'; }
        if ($mes == 7) { $desc_mes='JULIO'; }
        if ($mes == 8) { $desc_mes='AGOSTO'; }
        if ($mes == 9) { $desc_mes='SEPTIEMBRE'; }
        if ($mes == 10){ $desc_mes=' OCTUBRE'; }
        if ($mes == 11) { $desc_mes='NOVIEMBRE'; }
        if ($mes == 12) { $desc_mes='DICIEMBRE'; }

        $inicio=date('Y-m-d',strtotime($f_ini));
        $final = date('Y-m-d',strtotime($f_fin));

        $detalle=Venta::select(DB::raw('ROW_NUMBER() OVER(ORDER BY FECHA_FACTURA DESC) AS ITEM'),'*')
          ->whereBetween('FECHA_FACTURA',[$inicio,$final])
         ->get();

        return view('ventas.detalle')
         ->with('detalle',$detalle)
         ->with('f_ini',$f_ini)
         ->with('f_fin',$f_fin)
         ->with('vista',$vista)
         ->with('title',$title)
         ->with('origen',$origen)
         ->with('año_actual',$año_actual)
         ->with('mes',$mes)
         ->with('desc_mes',$desc_mes)
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
