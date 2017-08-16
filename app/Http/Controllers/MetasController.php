<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use App\Metas;
use Carbon\Carbon;
use DB;

class MetasController extends Controller
{
    
    public function create()
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


        $ubica =Metas::select('REGIONAL')
        ->groupBy('REGIONAL')
        ->orderBy('REGIONAL','ASC')
        ->get();

        $peri =Metas::select('periodo')
        ->groupBy('periodo')
        ->orderBy('periodo','ASC')
        ->get();

        $marcas =Factura::select('MARCA')
        ->groupBy('MARCA')
        ->orderBy('MARCA','ASC')
        ->get();
      
        $TOTALES =Metas::select(DB::raw("
            REGIONAL,
            SUM(meta_cotizaciones) AS meta_cotizaciones,
            SUM(meta_test_drive) AS meta_test_drive,
            SUM(meta_reservas) AS meta_reservas,
            SUM(meta_facturas) AS meta_facturados,
            SUM(nro_vendedores) AS vendedores,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '2017/01/01' AND '2017/08/15')as real_cotizaciones,
            (SELECT ROUND((COUNT(c.CHASIS))*0.3,0) as Expr1 from  v_cotizaciones c where c.REGIONAL = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '2017/01/01' AND '2017/08/15')as real_test_drive,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_reservados c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_RESERVA BETWEEN '2017/01/01' AND '2017/08/15')as real_reservas,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_facturados c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_FACTURA BETWEEN '2017/01/01' AND '2017/08/15')as real_facturados
            "))

        ->where('REGIONAL','LA PAZ')
        ->groupBy('REGIONAL')
        ->first();

        $SUCURSALES =Metas::select(DB::raw("
            metas.REGIONAL,
            metas.SUCURSAL,
            SUM(metas.meta_cotizaciones) as meta_cotizaciones,
            SUM(metas.meta_test_drive) as meta_test_drive ,
            SUM(metas.meta_reservas) AS meta_reservas,
            SUM(metas.meta_facturas) AS meta_facturados,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA'AND FECHA_COTIZACION BETWEEN '2017/01/01' AND '2017/08/15')as real_cotizaciones,

            (SELECT ROUND((COUNT(c.CHASIS))*0.3,0) as Expr1 from  v_cotizaciones c where c.REGIONAL = metas.REGIONAL AND FECHA_COTIZACION BETWEEN '2017/01/01' AND '2017/08/15')as real_test_drive,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_reservados c where c.REG_ASIGNADA = metas.REGIONAL  AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_RESERVA BETWEEN '2017/01/01' AND '2017/08/15')as real_reservas,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_facturados c where c.REG_ASIGNADA = metas.REGIONAL  AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_FACTURA BETWEEN '2017/01/01' AND '2017/08/15')as real_facturados
            
            "))
            ->where ('REGIONAL','LA PAZ')
            ->groupBy('REGIONAL','SUCURSAL')
            ->get();      
          
        return view('reportes.metas.index') 
        ->with('TOTALES',$TOTALES)
        ->with('SUCURSALES',$SUCURSALES)
        ->with('ubica',$ubica)
        ->with('peri',$peri)
        ->with('marcas',$marcas)
        ;
     
    }


}
