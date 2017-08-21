<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use App\Metas;
use Carbon\Carbon;
use DB;

class MetasController extends Controller
{
    
    public function index($periodo,$marca,$regional,$sucursal)
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

        if($marca == '0') { $marca ='TOYOTA';}
        if($regional == '0') { $regional ='LA PAZ';}
        if($periodo == '0') 
        {
            $mes_act = Carbon::now()->month;
            
            if ($mes_act>9 ){$periodo='2017-'.$mes_act;}
            else{$periodo='2017-0'.$mes_act;}
        }



        if ($periodo == '2017-01') { $desc_periodo='ENERO'; }
        if ($periodo == '2017-02') { $desc_periodo='FEBRERO'; }
        if ($periodo == '2017-03') { $desc_periodo='MARZO'; }
        if ($periodo == '2017-04') { $desc_periodo='ABRIL'; }
        if ($periodo == '2017-05') { $desc_periodo='MAYO'; }
        if ($periodo == '2017-06') { $desc_periodo='JUNIO'; }
        if ($periodo == '2017-07') { $desc_periodo='JULIO'; }
        if ($periodo == '2017-08') { $desc_periodo='AGOSTO'; }
        if ($periodo == '2017-09') { $desc_periodo='SEPTIEMBRE'; }
        if ($periodo == '2017-10'){ $desc_periodo=' OCTUBRE'; }
        if ($periodo == '2017-11') { $desc_periodo='NOVIEMBRE'; }
        if ($periodo == '2017-12') { $desc_periodo='DICIEMBRE'; }
        if ($periodo == 'ANUAL') { $desc_periodo=$año_actual; }
        if ($periodo == 'SEMESTRE_1') { $desc_periodo='PRIMER SEMESTRE'; }
        if ($periodo == 'SEMESTRE_2') { $desc_periodo='SEGUNDO SEMESTRE'; }

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


       if ($periodo <> 'ANUAL' && $periodo <> 'SEMESTRE_1' && $periodo <> 'SEMESTRE_2'  )
       {
            $mes_periodo = explode("-", $periodo);
            $mes = $mes_periodo[1];

            $fecha = $año_actual.'-'.$mes.'-01';
            $fecha_inicio = Carbon::parse($fecha)->toDateString();
            $aux = Carbon::parse($fecha);
            $fecha_final = $aux->endOfMonth()->toDateString();

            $TOTALES =Metas::select(DB::raw("
            REGIONAL,
            SUM(meta_cotizaciones) AS meta_cotizaciones,
            SUM(meta_test_drive) AS meta_test_drive,
            SUM(meta_reservas) AS meta_reservas,
            SUM(meta_facturas) AS meta_facturados,
            SUM(nro_vendedores) AS vendedores,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_cotizaciones,
            (SELECT ROUND((COUNT(c.CHASIS))*0.3,0) as Expr1 from  v_cotizaciones c where c.REGIONAL = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_test_drive,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_reservados c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_RESERVA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_reservas,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_facturados c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_FACTURA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_facturados
            "))

            ->where('REGIONAL',$regional)
            ->where('periodo', $periodo)
            ->groupBy('REGIONAL')
            ->first();


        $SUCURSALES =Metas::select(DB::raw("
            metas.REGIONAL,
            metas.SUCURSAL,
            SUM(metas.meta_cotizaciones) as meta_cotizaciones,
            SUM(metas.meta_test_drive) as meta_test_drive ,
            SUM(metas.meta_reservas) AS meta_reservas,
            SUM(metas.meta_facturas) AS meta_facturados,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA'AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_cotizaciones,

            (SELECT ROUND((COUNT(c.CHASIS))*0.3,0) as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND metas.SUCURSAL =c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_test_drive,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_reservados c where c.REG_ASIGNADA = metas.REGIONAL  AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_RESERVA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_reservas,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_facturados c where c.REG_ASIGNADA = metas.REGIONAL  AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_FACTURA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_facturados
            
            "))
            ->where ('REGIONAL',$regional)
            ->where('periodo', $periodo)
            ->groupBy('REGIONAL','SUCURSAL')
            ->get();      
          
        }

        if ($periodo == 'SEMESTRE_1')
        {
            $fecha_inicio = $año_actual.'-01-01';
            $fecha_final = $año_actual.'-06-30';

                        $TOTALES =Metas::select(DB::raw("
            REGIONAL,
            SUM(meta_cotizaciones) AS meta_cotizaciones,
            SUM(meta_test_drive) AS meta_test_drive,
            SUM(meta_reservas) AS meta_reservas,
            SUM(meta_facturas) AS meta_facturados,
            SUM(nro_vendedores) AS vendedores,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_cotizaciones,
            (SELECT ROUND((COUNT(c.CHASIS))*0.3,0) as Expr1 from  v_cotizaciones c where c.REGIONAL = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_test_drive,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_reservados c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_RESERVA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_reservas,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_facturados c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_FACTURA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_facturados
            "))

            ->where('REGIONAL',$regional)
            ->whereIn('periodo', ['2017-01','2017-07','2017-08','2017-09','2017-10','2017-11',])
            ->groupBy('REGIONAL')
            ->first();

            $SUCURSALES =Metas::select(DB::raw("
            metas.REGIONAL,
            metas.SUCURSAL,
            SUM(metas.meta_cotizaciones) as meta_cotizaciones,
            SUM(metas.meta_test_drive) as meta_test_drive ,
            SUM(metas.meta_reservas) AS meta_reservas,
            SUM(metas.meta_facturas) AS meta_facturados,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA'AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_cotizaciones,

            (SELECT ROUND((COUNT(c.CHASIS))*0.3,0) as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND metas.SUCURSAL =c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_test_drive,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_reservados c where c.REG_ASIGNADA = metas.REGIONAL  AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_RESERVA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_reservas,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_facturados c where c.REG_ASIGNADA = metas.REGIONAL  AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_FACTURA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_facturados
            
            "))
            ->where ('REGIONAL',$regional)
            ->whereIn('periodo', ['2017-01','2017-07','2017-08','2017-09','2017-10','2017-11',])
            ->groupBy('REGIONAL','SUCURSAL')
            ->get();      
          

        }

        if ($periodo == 'SEMESTRE_2')
        {
            $fecha_inicio = $año_actual.'-07-01';
            $fecha_final = $año_actual.'-12-31';

                        $TOTALES =Metas::select(DB::raw("
            REGIONAL,
            SUM(meta_cotizaciones) AS meta_cotizaciones,
            SUM(meta_test_drive) AS meta_test_drive,
            SUM(meta_reservas) AS meta_reservas,
            SUM(meta_facturas) AS meta_facturados,
            SUM(nro_vendedores) AS vendedores,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_cotizaciones,
            (SELECT ROUND((COUNT(c.CHASIS))*0.3,0) as Expr1 from  v_cotizaciones c where c.REGIONAL = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_test_drive,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_reservados c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_RESERVA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_reservas,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_facturados c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_FACTURA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_facturados
            "))

            ->where('REGIONAL',$regional)
            ->whereIn('periodo', ['2017-01','2017-02','2017-03','2017-04','2017-05','2017-06',])
            ->groupBy('REGIONAL')
            ->first();

            $SUCURSALES =Metas::select(DB::raw("
            metas.REGIONAL,
            metas.SUCURSAL,
            SUM(metas.meta_cotizaciones) as meta_cotizaciones,
            SUM(metas.meta_test_drive) as meta_test_drive ,
            SUM(metas.meta_reservas) AS meta_reservas,
            SUM(metas.meta_facturas) AS meta_facturados,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA'AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_cotizaciones,

            (SELECT ROUND((COUNT(c.CHASIS))*0.3,0) as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND metas.SUCURSAL =c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_test_drive,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_reservados c where c.REG_ASIGNADA = metas.REGIONAL  AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_RESERVA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_reservas,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_facturados c where c.REG_ASIGNADA = metas.REGIONAL  AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_FACTURA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_facturados
            
            "))
            ->where ('REGIONAL',$regional)
            ->whereIn('periodo', ['2017-01','2017-02','2017-03','2017-04','2017-05','2017-06',])
            ->groupBy('REGIONAL','SUCURSAL')
            ->get();      
          

        }

        if ($periodo == 'ANUAL')
        {
            $fecha_inicio = $año_actual.'-01-01';
            $fecha_final = $año_actual.'-12-31';

                        $TOTALES =Metas::select(DB::raw("
            REGIONAL,
            SUM(meta_cotizaciones) AS meta_cotizaciones,
            SUM(meta_test_drive) AS meta_test_drive,
            SUM(meta_reservas) AS meta_reservas,
            SUM(meta_facturas) AS meta_facturados,
            SUM(nro_vendedores) AS vendedores,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_cotizaciones,
            (SELECT ROUND((COUNT(c.CHASIS))*0.3,0) as Expr1 from  v_cotizaciones c where c.REGIONAL = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_test_drive,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_reservados c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_RESERVA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_reservas,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_facturados c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' AND FECHA_FACTURA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_facturados
            "))

            ->where('REGIONAL',$regional)

            ->groupBy('REGIONAL')
            ->first();

            $SUCURSALES =Metas::select(DB::raw("
            metas.REGIONAL,
            metas.SUCURSAL,
            SUM(metas.meta_cotizaciones) as meta_cotizaciones,
            SUM(metas.meta_test_drive) as meta_test_drive ,
            SUM(metas.meta_reservas) AS meta_reservas,
            SUM(metas.meta_facturas) AS meta_facturados,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA'AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_cotizaciones,

            (SELECT ROUND((COUNT(c.CHASIS))*0.3,0) as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND metas.SUCURSAL =c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_COTIZACION BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_test_drive,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_reservados c where c.REG_ASIGNADA = metas.REGIONAL  AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_RESERVA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_reservas,

            (SELECT COUNT(c.CHASIS)as Expr1 from  v_facturados c where c.REG_ASIGNADA = metas.REGIONAL  AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA' AND FECHA_FACTURA BETWEEN '".$fecha_inicio."' AND '".$fecha_final."')as real_facturados
            
            "))
            ->where ('REGIONAL',$regional)
            ->groupBy('REGIONAL','SUCURSAL')
            ->get();      
          

        } 

        // dd($fecha_inicio,$fecha_final);

        // dd($TOTALES);

        
        return view('reportes.metas.index') 
        ->with('TOTALES',$TOTALES)
        ->with('SUCURSALES',$SUCURSALES)
        ->with('ubica',$ubica)
        ->with('peri',$peri)
        ->with('marcas',$marcas)
        ->with('periodo',$periodo)
        ->with('marca',$marca)
        ->with('regional',$regional)
        ->with('sucursal',$sucursal)
        ->with('año_actual',$año_actual)
        ->with('fecha_inicio',$fecha_inicio)
        ->with('fecha_final',$fecha_final)
        ->with('desc_periodo',$desc_periodo)
        ;
     
    }


}
