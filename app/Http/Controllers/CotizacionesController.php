<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cotizacion;
use Carbon\Carbon;
use DB;

class CotizacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    

        dd('aqui ya no hay nada :(');
    }

    public function dashboard($title,$f_ini, $f_fin ,$mes,$regional)
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

        if ($mes == '0') { $mes = Carbon::now('America/La_Paz') -> month; }

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



        if($title == 'index')
        {
        $dia =Cotizacion::where('FECHA_COTIZACION',$hoy)->count();

        $esta_sema =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio_sem,$hoy])->count();

        $ult_15d =Cotizacion::whereBetween('FECHA_COTIZACION',[$ult_15,$hoy])->count();

        $este_mes =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio_mes,$hoy])->count();

        $total =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio_año,$hoy])->count();

        $por_reg =Cotizacion::select('Localidad',DB::raw('COUNT(*) AS COTIZACIONES'))
        ->where('FECHA_COTIZACION','>',$inicio_año)
        ->groupBy('Localidad')
        ->orderBy('COTIZACIONES', 'desc')
        ->get();   

        $por_mes = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
        ->where('FECHA_COTIZACION','>',$inicio_año)
        ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
        ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
        ->get();

        $por_vendedor =Cotizacion::select('REG_ABRE','Vendedor',DB::raw('COUNT(*) AS COTIZACIONES'))
        ->where('FECHA_COTIZACION','>',$inicio_año)
        ->groupBy('REG_ABRE','Vendedor')
        ->orderBy('COTIZACIONES', 'desc')
        ->paginate(10); 

         return view('cotizaciones.index') 
         ->with('dia',$dia)
         ->with('esta_sema',$esta_sema)
         ->with('ult_15d',$ult_15d)
         ->with('este_mes',$este_mes)

         ->with('total',$total)
       
         ->with('hoy',Carbon::now('America/La_Paz'))
         ->with('inicio_sem',Carbon::now('America/La_Paz')->startOfWeek())
         ->with('inicio_mes',Carbon::now('America/La_Paz')->startOfMonth())
         ->with('inicio_año',Carbon::now('America/La_Paz')->startOfYear())
         ->with('ult_15', Carbon::now('America/La_Paz')->subDays(15))  
         ->with('año_actual', $año_actual)  

         ->with('por_reg',$por_reg)
         ->with('por_mes',$por_mes)
         ->with('por_vendedor',$por_vendedor)

         ->with('title',$title)

         ;
       
        }

        if($title == 'diarias' || $title == 'semanal' || $title == 'ult_15_dias' )
        {

        $inicio=date('Y-m-d',strtotime($f_ini));
        $final = date('Y-m-d',strtotime($f_fin));

        $total =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio,$final])->count();

        $por_dia =Cotizacion::select('NOM_DIA','FECHA_COTIZACION',DB::raw('COUNT(*) AS COTIZACIONES'))
         ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
         ->groupBy('NOM_DIA','FECHA_COTIZACION')
         ->orderBy('FECHA_COTIZACION')
         ->get();

        $por_reg =Cotizacion::select('Localidad',DB::raw('COUNT(*) AS COTIZACIONES'))
        ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
        ->groupBy('Localidad')
        ->orderBy('COTIZACIONES', 'desc')
        ->get();   

        $por_vendedor =Cotizacion::select('REG_ABRE','Vendedor',DB::raw('COUNT(*) AS COTIZACIONES'))
        ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
        ->groupBy('REG_ABRE','Vendedor')
        ->orderBy('COTIZACIONES', 'desc')
        ->paginate(10); 

         return view('cotizaciones.index') 

         ->with('hoy',Carbon::now('America/La_Paz'))
         ->with('año_actual', $año_actual) 

         ->with('inicio',$inicio)
         ->with('final',$final)

         ->with('total',$total)
        
         ->with('por_reg',$por_reg)
         ->with('por_vendedor',$por_vendedor)
         ->with('por_dia',$por_dia)

         ->with('title',$title)

         ;
       
        }

        if($title == 'mes')
        {

        $fecha = $año_actual.'-'.$mes.'-01';
        $inicio = Carbon::parse($fecha)->toDateString();
        $aux = Carbon::parse($fecha);
        $final = $aux->endOfMonth()->toDateString();


        $total =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio,$final])->count();

        $por_dia =Cotizacion::select('NOM_DIA','FECHA_COTIZACION',DB::raw('COUNT(*) AS COTIZACIONES'))
         ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
         ->groupBy('NOM_DIA','FECHA_COTIZACION')
         ->orderBy('FECHA_COTIZACION')
         ->get();

        $por_reg =Cotizacion::select('Localidad',DB::raw('COUNT(*) AS COTIZACIONES'))
        ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
        ->groupBy('Localidad')
        ->orderBy('COTIZACIONES', 'desc')
        ->get();   

        $por_vendedor =Cotizacion::select('REG_ABRE','Vendedor',DB::raw('COUNT(*) AS COTIZACIONES'))
        ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
        ->groupBy('REG_ABRE','Vendedor')
        ->orderBy('COTIZACIONES', 'desc')
        ->paginate(10); 

         return view('cotizaciones.index') 

         ->with('hoy',Carbon::now('America/La_Paz'))
         ->with('año_actual', $año_actual) 

         ->with('inicio',$inicio)
         ->with('final',$final)

         ->with('total',$total)
        
         ->with('por_reg',$por_reg)
         ->with('por_vendedor',$por_vendedor)
         ->with('por_dia',$por_dia)

         ->with('title',$title)

         ->with('desc_mes',$desc_mes)
         ->with('mes',$mes)

         ;
       
        }

        if($title == 'regional')
        {

            dd($regional);

        $fecha = $año_actual.'-'.$mes.'-01';
        $inicio = Carbon::parse($fecha)->toDateString();
        $aux = Carbon::parse($fecha);
        $final = $aux->endOfMonth()->toDateString();


        $total =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio,$final])->count();

        $por_dia =Cotizacion::select('NOM_DIA','FECHA_COTIZACION',DB::raw('COUNT(*) AS COTIZACIONES'))
         ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
         ->groupBy('NOM_DIA','FECHA_COTIZACION')
         ->orderBy('FECHA_COTIZACION')
         ->get();

        $por_reg =Cotizacion::select('Localidad',DB::raw('COUNT(*) AS COTIZACIONES'))
        ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
        ->groupBy('Localidad')
        ->orderBy('COTIZACIONES', 'desc')
        ->get();   

        $por_vendedor =Cotizacion::select('REG_ABRE','Vendedor',DB::raw('COUNT(*) AS COTIZACIONES'))
        ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
        ->groupBy('REG_ABRE','Vendedor')
        ->orderBy('COTIZACIONES', 'desc')
        ->paginate(10); 

         return view('cotizaciones.index') 

         ->with('hoy',Carbon::now('America/La_Paz'))
         ->with('año_actual', $año_actual) 

         ->with('inicio',$inicio)
         ->with('final',$final)

         ->with('total',$total)
        
         ->with('por_reg',$por_reg)
         ->with('por_vendedor',$por_vendedor)
         ->with('por_dia',$por_dia)

         ->with('title',$title)

         ->with('desc_mes',$desc_mes)
         ->with('mes',$mes)

         ;
       
        }


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
