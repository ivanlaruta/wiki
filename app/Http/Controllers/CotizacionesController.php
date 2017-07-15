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

    public function dashboard($v_aux,$title,$f_ini, $f_fin ,$mes,$regional,$marca,$sucursal,$modelo)
    {
        if($regional == '0'){$regional='%';}else{$regional=ltrim(rtrim($regional));}
        if($marca == '0'){$marca='%';}else{$marca=ltrim(rtrim($marca));}
        if($sucursal == '0'){$sucursal='%';}else{$sucursal=ltrim(rtrim($sucursal));}
        if($modelo == '0'){$modelo='%';}else{$modelo=ltrim(rtrim($modelo));}
        //if($master == '0'){$master='%';}else{$master=ltrim(rtrim($master));}
        //if($chassis == '0'){$chassis='%';}else{$chassis=ltrim(rtrim($chassis));}
        //if($vendedor == '0'){$vendedor='%';}else{$vendedor=ltrim(rtrim($vendedor));}
        //if($nro_cotizacion == '0'){$nro_cotizacion='%';}else{$nro_cotizacion=ltrim(rtrim($nro_cotizacion));}

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
            $dia =Cotizacion::where('FECHA_COTIZACION',$hoy)
            ->count();

            $esta_sema =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio_sem,$hoy])
            ->count();

            $ult_15d =Cotizacion::whereBetween('FECHA_COTIZACION',[$ult_15,$hoy])
            ->count();

            $este_mes =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio_mes,$hoy])
            ->count();

            $total =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio_año,$hoy])
            ->count();

             $nom_dia =Cotizacion::select('NOM_DIA')->where('FECHA_COTIZACION',$hoy)
            ->first();

            $v_aux=$nom_dia->NOM_DIA;

            $por_reg =Cotizacion::select('REGIONAL',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->groupBy('REGIONAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();   

            $por_mes = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
            ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
            ->get();

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_marca =Cotizacion::select('MARCA',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->groupBy('MARCA')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('cotizaciones.index') 
            ->with('v_aux',$v_aux)

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
            ->with('por_marca',$por_marca)

            ->with('title',$title)
            ;

        }

        if($title == 'diarias' || $title == 'semanal' || $title == 'ult_15_dias' )
        {

            $inicio=date('Y-m-d',strtotime($f_ini));
            $final = date('Y-m-d',strtotime($f_fin));



            $total =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->count();

            $por_dia =Cotizacion::select('NOM_DIA','FECHA_COTIZACION',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('NOM_DIA','FECHA_COTIZACION')
            ->orderBy('FECHA_COTIZACION')
            ->get();

            $por_reg =Cotizacion::select('REGIONAL',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('REGIONAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();   

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_marca =Cotizacion::select('MARCA',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('MARCA')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 

            ->with('inicio',$inicio)
            ->with('final',$final)

            ->with('total',$total)

            ->with('por_reg',$por_reg)
            ->with('por_vendedor',$por_vendedor)
            ->with('por_marca',$por_marca)
            ->with('por_dia',$por_dia)

            ->with('title',$title)
            ->with('mes',$mes)
            ->with('desc_mes',$desc_mes)
            ;

        }

        if($title == 'mes')
        {

            $fecha = $año_actual.'-'.$mes.'-01';
            $inicio = Carbon::parse($fecha)->toDateString();
            $aux = Carbon::parse($fecha);
            $final = $aux->endOfMonth()->toDateString();

            $total =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->count();

            $por_dia =Cotizacion::select('NOM_DIA','FECHA_COTIZACION',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('NOM_DIA','FECHA_COTIZACION')
            ->orderBy('FECHA_COTIZACION')
            ->get();

            $por_reg =Cotizacion::select('REGIONAL',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('REGIONAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();   

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_marca =Cotizacion::select('MARCA',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('MARCA')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 

            ->with('inicio',$inicio)
            ->with('final',$final)

            ->with('total',$total)

            ->with('por_reg',$por_reg)
            ->with('por_vendedor',$por_vendedor)
            ->with('por_marca',$por_marca)
            ->with('por_dia',$por_dia)

            ->with('title',$title)

            ->with('desc_mes',$desc_mes)
            ->with('mes',$mes)
            ;

        }

        if($title == 'regional')
        {
            $total =Cotizacion:: where ('REGIONAL',$regional)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->count();

            $por_mes = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
            ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
            ->get();

            $por_suc =Cotizacion::select('SUCURSAL',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->groupBy('SUCURSAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();   

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_marca =Cotizacion::select('MARCA',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->groupBy('MARCA')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 
            
            ->with('total',$total)
            
            ->with('por_suc',$por_suc)
            ->with('por_vendedor',$por_vendedor)
            ->with('por_marca',$por_marca)
            ->with('por_mes',$por_mes)

            ->with('title',$title)

            ->with('regional',$regional)
            ;
        }

        if($title == 'regional_sucursal')
        {
            $total =Cotizacion:: where ('REGIONAL',$regional)->where ('SUCURSAL',$sucursal)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->count();

            $por_mes = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->where ('SUCURSAL',$sucursal)
            ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
            ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
            ->get();

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->where ('SUCURSAL',$sucursal)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_marca =Cotizacion::select('MARCA',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->where ('SUCURSAL',$sucursal)
            ->groupBy('MARCA')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 
            
            ->with('total',$total)
            
            ->with('por_vendedor',$por_vendedor)
            ->with('por_marca',$por_marca)
            ->with('por_mes',$por_mes)

            ->with('title',$title)

            ->with('regional',$regional)
            ->with('sucursal',$sucursal)
            ;
        }

        if($title == 'regional_marca' || $title == 'marca_regional')
        {
            $total =Cotizacion:: where ('MARCA',$marca)->where ('REGIONAL',$regional)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->count();

            $por_mes = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
            ->where ('REGIONAL',$regional)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
            ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
            ->get();

            $por_suc =Cotizacion::select('SUCURSAL',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where ('REGIONAL',$regional)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->where ('REGIONAL',$regional)
            ->groupBy('SUCURSAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->where ('MARCA',$marca)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_modelo =Cotizacion::select('MODELO',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->where ('MARCA',$marca)
            ->groupBy('MODELO')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 
            
            ->with('total',$total)
            
            ->with('por_vendedor',$por_vendedor)
            ->with('por_modelo',$por_modelo)
            ->with('por_mes',$por_mes)
            ->with('por_suc',$por_suc)

            ->with('title',$title)

            ->with('marca',$marca)
            ->with('regional',$regional)
            ;
        }


        if($title == 'marca')
        {

            $total =Cotizacion:: where ('MARCA',$marca)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->count();

            $por_mes = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
            ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
            ->get();

            $por_reg =Cotizacion::select('REGIONAL',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->groupBy('REGIONAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_modelo =Cotizacion::select('MODELO',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->groupBy('MODELO')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 
            
            ->with('total',$total)
            
            ->with('por_vendedor',$por_vendedor)
            ->with('por_modelo',$por_modelo)
            ->with('por_mes',$por_mes)
            ->with('por_reg',$por_reg)

            ->with('title',$title)

            ->with('marca',$marca)
            ;
        }



        if($title == 'marca_modelo')
        {

            $total =Cotizacion:: where ('MARCA',$marca)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MODELO',$modelo)
            ->count();

            $por_mes = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->where ('MODELO',$modelo)
            ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
            ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
            ->get();

            $por_reg =Cotizacion::select('REGIONAL',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->where ('MODELO',$modelo)
            ->groupBy('REGIONAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->where ('MODELO',$modelo)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_master =Cotizacion::select('MASTER',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->where ('MODELO',$modelo)
            ->groupBy('MASTER')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 
            
            ->with('total',$total)
            
            ->with('por_vendedor',$por_vendedor)
            ->with('por_master',$por_master)
            ->with('por_mes',$por_mes)
            ->with('por_reg',$por_reg)

            ->with('title',$title)

            ->with('marca',$marca)
            ->with('modelo',$modelo)
            ;
        }


        if($title == 'mes_marca' || $title == 'marca_mes')
        {

            $fecha = $año_actual.'-'.$mes.'-01';
            $inicio = Carbon::parse($fecha)->toDateString();
            $aux = Carbon::parse($fecha);
            $final = $aux->endOfMonth()->toDateString();

            $total =Cotizacion:: where ('MARCA',$marca)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->count();

            $por_dia =Cotizacion::select('NOM_DIA','FECHA_COTIZACION',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where ('MARCA',$marca)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('NOM_DIA','FECHA_COTIZACION')
            ->orderBy('FECHA_COTIZACION')
            ->get();

            $por_reg =Cotizacion::select('REGIONAL',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->where ('MARCA',$marca)
            ->groupBy('REGIONAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->where ('MARCA',$marca)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_modelo =Cotizacion::select('MODELO',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->where ('MARCA',$marca)
            ->groupBy('MODELO')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 
            
            ->with('total',$total)
            
            ->with('por_vendedor',$por_vendedor)
            ->with('por_modelo',$por_modelo)
            ->with('por_dia',$por_dia)
            ->with('por_reg',$por_reg)

            ->with('title',$title)

            ->with('marca',$marca)
            ->with('mes',$mes)
            ->with('desc_mes',$desc_mes)
            ->with('inicio',$inicio)
            ->with('final',$final)
            ;
        }


        if($title == 'mes_regional' || $title == 'regional_mes')
        {  
            $fecha = $año_actual.'-'.$mes.'-01';
            $inicio = Carbon::parse($fecha)->toDateString();
            $aux = Carbon::parse($fecha);
            $final = $aux->endOfMonth()->toDateString();

            $total =Cotizacion:: where ('REGIONAL',$regional)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->count();

            $por_dia =Cotizacion::select('NOM_DIA','FECHA_COTIZACION',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where ('REGIONAL',$regional)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('NOM_DIA','FECHA_COTIZACION')
            ->orderBy('FECHA_COTIZACION')
            ->get();

            $por_suc =Cotizacion::select('SUCURSAL',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where ('REGIONAL',$regional)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('SUCURSAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();   

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where ('REGIONAL',$regional)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_marca =Cotizacion::select('MARCA',DB::raw('COUNT(*) AS COTIZACIONES'))
            ->where ('REGIONAL',$regional)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('MARCA')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 


            return view('cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            
            ->with('año_actual', $año_actual) 
            ->with('total',$total)
            
            ->with('por_suc',$por_suc)
            ->with('por_vendedor',$por_vendedor)
            ->with('por_marca',$por_marca)
            ->with('por_dia',$por_dia)

            ->with('title',$title)

            ->with('regional',$regional)
            ->with('mes',$mes)
            ->with('desc_mes',$desc_mes)
            ->with('inicio',$inicio)
            ->with('final',$final)
            ;
        } 
    }


    public function lista_detalle($v_aux,$title,$f_ini,$f_fin,$mes,$regional,$marca,$sucursal,$modelo,$master,$chassis,$vendedor,$nro_cotizacion)
    {
        $año_actual = Carbon::now('America/La_Paz') -> year;
        $inicio_año=Carbon::now('America/La_Paz')->startOfYear()->toDateString();
        $hoy = Carbon::now('America/La_Paz')->toDateString(); 

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

        if($f_ini == '0' &&  $f_fin == '0')
        {
            if ($mes == '0') 
            { 
                $inicio =$inicio_año;
                $final = $hoy;
            }
            else
            {
                $fecha = $año_actual.'-'.$mes.'-01';
                $inicio = Carbon::parse($fecha)->toDateString();
                $aux = Carbon::parse($fecha);
                $final = $aux->endOfMonth()->toDateString();
            }
        }
        else
        {
            $inicio=date('Y-m-d',strtotime($f_ini));
            $final = date('Y-m-d',strtotime($f_fin));
        }

        if($regional == '0'){$regional='%';}else{$regional=ltrim(rtrim($regional));}
        if($marca == '0'){$marca='%';}else{$marca=ltrim(rtrim($marca));}
        if($sucursal == '0'){$sucursal='%';}else{$sucursal=ltrim(rtrim($sucursal));}
        if($modelo == '0'){$modelo='%';}else{$modelo=ltrim(rtrim($modelo));}
        if($master == '0'){$master='%';}else{$master=ltrim(rtrim($master));}
        if($chassis == '0'){$chassis='%';}else{$chassis=ltrim(rtrim($chassis));}
        if($vendedor == '0'){$vendedor='%';}else{$vendedor=ltrim(rtrim($vendedor));}
        if($nro_cotizacion == '0'){$nro_cotizacion='%';}else{$nro_cotizacion=ltrim(rtrim($nro_cotizacion));}



        $detalle =Cotizacion::select(DB::raw('ROW_NUMBER() OVER(ORDER BY NRO_COTIZACION DESC) AS ITEM'),'*')
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->where('REGIONAL','LIKE','%'.$regional.'%')
            ->where('MARCA','LIKE','%'.$marca.'%')
            ->where('SUCURSAL','LIKE','%'.$sucursal.'%')
            ->where('MODELO','LIKE','%'.$modelo.'%')
            ->where('MASTER','LIKE','%'.$master.'%')
            ->where('CHASIS','LIKE','%'.$chassis.'%')
            ->where('VENDEDOR','LIKE','%'.$vendedor.'%')
            ->where('NRO_COTIZACION','LIKE','%'.$nro_cotizacion.'%')
            ->get(); 

         
        return view('cotizaciones.lista_detalle') 
        ->with('detalle',$detalle)

        ->with('v_aux',$v_aux)
        ->with('title',$title)
        ->with('f_ini',$f_ini)
        ->with('f_fin',$f_fin)
        ->with('mes',$mes)
        ->with('regional',$regional)
        ->with('marca',$marca)
        ->with('sucursal',$sucursal)
        ->with('modelo',$modelo)
        ->with('master',$master)
        ->with('chassis',$chassis)
        ->with('vendedor',$vendedor)
        ->with('nro_cotizacion',$nro_cotizacion)

        ->with('año_actual',$año_actual)
        ->with('inicio',$inicio)
        ->with('final',$final)
        
        ->with('desc_mes',$desc_mes)
        ;
    }
}