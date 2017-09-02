<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cotizacion;
use App\Reserva;
use App\Factura;
use Carbon\Carbon;
use DB;

class ResumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $inicio_año=Carbon::now('America/La_Paz')->startOfYear()->toDateString();    //inicio de año
            $hoy_aux = Carbon::now('America/La_Paz')->format('d/m/Y');// la base exige este formato.. SQL SERVER :(
            $hoy = Carbon::now('America/La_Paz')->toDateString(); // hoy
            $año_actual = Carbon::now('America/La_Paz') -> year; //año actual.


            //============================= =======================

            $total_cotizaciones =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio_año,$hoy])
            ->count();

            $cotizaciones = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
            ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
            ->get()->toArray();

            $cotizaciones_por_marca =Cotizacion::select('MARCA',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->groupBy('MARCA')
            ->orderBy('COTIZACIONES', 'desc')
            ->get()->toArray();

            $cotizaciones_por_reg =Cotizacion::select('REGIONAL',DB::raw("COUNT(*) AS COTIZACIONES "))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->groupBy('REGIONAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get()->toArray(); 

            //============================= =======================

            $total_reservas =Reserva::whereBetween('FECHA_RESERVA',[$inicio_año,$hoy])
            ->count();

            $reservas = Reserva::select( DB::raw("month(FECHA_RESERVA) as MES , COUNT (*) as RESERVADOS"))
            ->where('FECHA_RESERVA','>',$inicio_año)
            ->groupBy(DB::raw('month(FECHA_RESERVA)'))
            ->orderBy(DB::raw('month(FECHA_RESERVA)'))
            ->get()->toArray();

            $reservas_por_marca =Reserva::select('MARCA',DB::raw('COUNT(*) AS RESERVADOS'))
            ->where('FECHA_RESERVA','>',$inicio_año)
            ->groupBy('MARCA')
            ->orderBy('RESERVADOS', 'desc')
            ->get()->toArray();

            $reservas_por_reg =Reserva::select('REGIONAL',DB::raw('COUNT(*) AS RESERVADOS'))
            ->where('FECHA_RESERVA','>',$inicio_año)
            ->groupBy('REGIONAL')
            ->orderBy('RESERVADOS', 'desc')
            ->get()->toArray();

            //============================= =======================

            $total_facturas = Factura::whereBetween('FECHA_FACTURA',[$inicio_año,$hoy])
            ->count();

            $facturas = Factura::select( DB::raw("month(FECHA_FACTURA) as MES , COUNT (*) as FACTURADOS"))
            ->where('FECHA_FACTURA','>',$inicio_año)
            ->groupBy(DB::raw('month(FECHA_FACTURA)'))
            ->orderBy(DB::raw('month(FECHA_FACTURA)'))
            ->get()->toArray();

            $facturas_por_marca =Factura::select('MARCA',DB::raw('COUNT(*) AS FACTURADOS'))
            ->where('FECHA_FACTURA','>',$inicio_año)
            ->groupBy('MARCA')
            ->orderBy('FACTURADOS', 'desc')
            ->get()->toArray();

            $facturas_por_reg =Factura::select('REG_ASIGNADA',DB::raw('COUNT(*) AS FACTURADOS'))
            ->where('FECHA_FACTURA','>',$inicio_año)
            ->groupBy('REG_ASIGNADA')
            ->orderBy('FACTURADOS', 'desc')
            ->get()->toArray();   

            //============================= =======================

            return view('reportes.resumen.index')      

            ->with('cotizaciones',$cotizaciones)
            ->with('total_cotizaciones',$total_cotizaciones)          
            ->with('cotizaciones_por_marca',$cotizaciones_por_marca)          
            ->with('cotizaciones_por_reg',$cotizaciones_por_reg)  

            ->with('reservas',$reservas)
            ->with('total_reservas',$total_reservas)
            ->with('reservas_por_marca',$reservas_por_marca)
            ->with('reservas_por_reg',$reservas_por_reg)

            ->with('facturas',$facturas)
            ->with('total_facturas',$total_facturas)
            ->with('facturas_por_marca',$facturas_por_marca)
            ->with('facturas_por_reg',$facturas_por_reg)
            
            ->with('año_actual',$año_actual)
            ->with('hoy',$hoy)
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
