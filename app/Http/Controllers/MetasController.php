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

        $ubica =Metas::select('REGIONAL')
        ->groupBy('REGIONAL')
        ->orderBy('REGIONAL','ASC')
        ->get();

        $peri =Metas::select('periodo')
        ->groupBy('periodo')
        ->orderBy('periodo','ASC')
        ->get();
      
        $TOTALES =Metas::select(DB::raw('
            REGIONAL,
            SUM(meta_cotizaciones) AS meta_cotizaciones,
            SUM(meta_test_drive) AS meta_test_drive,
            SUM(meta_reservas) AS meta_reservas,
            SUM(meta_facturas) AS meta_facturados,
            SUM(nro_vendedores) AS vendedores,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_cotizaciones c where c.REGIONAL = REGIONAL )as real_cotizaciones,
            (SELECT ROUND((COUNT(c.CHASIS))*0.3,0) as Expr1 from  v_cotizaciones c where c.REGIONAL = REGIONAL )as real_test_drive,
            (SELECT COUNT(c.CHASIS)*1.1 as Expr1 from  v_facturados c where c.REGIONAL = REGIONAL )as real_reservas,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_facturados c where c.REGIONAL = REGIONAL )as real_facturados
            '))

        ->where('REGIONAL','LA PAZ')
        ->groupBy('REGIONAL')
        ->first();

        // $SUCURSALES =Metas::select(DB::raw('metas.REGIONAL,metas.SUCURSAL,SUM(metas.META_UNIDADES) as META_UNIDADES,SUM(metas.META_MONTOS) as META_MONTOS ,(SELECT COUNT(f.CHASIS)as Expr1 from v_facturados f where f.REGIONAL = metas.REGIONAL and metas.SUCURSAL = f.SUCURSAL)as REAL_UNIDADES, (SELECT SUM (F.BOLIVIANOS)as Expr2 from v_facturados f where f.REGIONAL = metas.REGIONAL and metas.SUCURSAL = f.SUCURSAL )AS REAL_MONTO '))
            
        //     ->where ('REGIONAL','LA PAZ')
        //     ->groupBy('REGIONAL','SUCURSAL')
        //     ->orderBy('META_UNIDADES', 'desc')
        //     ->get();      
          
        return view('reportes.metas.index') 
              
        ->with('TOTALES',$TOTALES)
        // ->with('SUCURSALES',$SUCURSALES)
        ->with('ubica',$ubica)
        ->with('peri',$peri)
        
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA' )as real_cotizaciones,
            (SELECT ROUND((COUNT(c.CHASIS))*0.3,0) as Expr1 from  v_cotizaciones c where c.REGIONAL = metas.REGIONAL AND c.MARCA ='TOYOTA')as real_test_drive,
            (SELECT COUNT(c.CHASIS)*1.1 as Expr1 from  v_facturados c where c.REGIONAL = metas.REGIONAL AND c.MARCA ='TOYOTA')as real_reservas,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_facturados c where c.REG_ASIGNADA = metas.REGIONAL AND c.MARCA ='TOYOTA')as real_facturados
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
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_cotizaciones c where c.REG_ASIGNADA = metas.REGIONAL AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA')as real_cotizaciones,
            (SELECT ROUND((COUNT(c.CHASIS))*0.3,0) as Expr1 from  v_cotizaciones c where c.REGIONAL = metas.REGIONAL )as real_test_drive,
            (SELECT COUNT(c.CHASIS)*1.1 as Expr1 from  v_facturados c where c.REGIONAL = metas.REGIONAL )as real_reservas,
            (SELECT COUNT(c.CHASIS)as Expr1 from  v_facturados c where c.REG_ASIGNADA = metas.REGIONAL  AND metas.SUCURSAL = c.SUC_ASIGNADA AND c.MARCA ='TOYOTA')as real_facturados
            "))
            ->where ('REGIONAL','LA PAZ')
            ->groupBy('REGIONAL','SUCURSAL')
            ->get();      
          
        return view('reportes.todo_metas.index') 
        ->with('TOTALES',$TOTALES)
        ->with('SUCURSALES',$SUCURSALES)
        ->with('ubica',$ubica)
        ->with('peri',$peri)
        ->with('marcas',$marcas)
        ;
     
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
