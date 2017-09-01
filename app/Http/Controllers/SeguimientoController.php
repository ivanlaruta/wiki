<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\V_stock_todo;
use App\Cotizacion;
use App\Reserva;
use App\Factura;

class SeguimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $chassis=$request->chassis;

        if(is_null($chassis))
        {
            $resultado ='0';
        }
        else
        {
            $resultado =DB::select( DB::raw("
                select 
                ROW_NUMBER() OVER(ORDER BY qw.chassis DESC) AS ITEM, 
                qw.chassis AS CHASSIS,
                (select COUNT (c.chasis) as expr1 from gtauto.dbo.Cotizador c where c.chasis = qw.chassis) as COTIZACION,
                (select COUNT (r.chassis) as expr1 from gtauto.dbo.cpf_resvehokm R where r.chassis = qw.chassis and r.cod_docum='rvehokma' and r.nro_contrato='1' and r.cod_estado='R') as RESERVA,
                (select COUNT (co.chassis) as expr1 from gtauto.dbo.cpf_vtasokm co where co.chassis = qw.chassis) as CONTRATO,
                (select COUNT (f.chassis) as expr1 from gtauto.dbo.cpf_facturas f where f.chassis = qw.chassis) as FACTURA,
                (select COUNT (n.chassis) as expr1 from gtauto.dbo.cpf_notaentrega n where n.chassis = qw.chassis) as ENTREGA,
                RTRIM(b.descripcion) AS MODELOS, 
                RTRIM(m.nom_marca) AS MARCA,
                RTRIM(b.nom_modelo) AS MODELO,
                RTRIM(c.nom_master) AS MASTER
                from gtauto.dbo.ct_vehiculos qw

                left join gtauto.dbo.ct_modelos AS b ON qw.cod_modelo = b.cod_modelo 
                left join gtauto.dbo.ct_masters AS c ON qw.cod_master = c.cod_master 
                left join gtauto.dbo.ct_marca AS m ON qw.cod_marca = m.cod_marca
                left join gtauto.dbo.cpp_mantit AS oo ON qw.cod_tit = oo.cod_tit
                where qw.chassis like '%".$chassis."%' ORDER BY ITEM"));

            if(empty($resultado))
            {
                return redirect()->route('seguimiento.index')->with('mensaje_error',"Ingreso un chassis no valido");
            }
        }

        return view('reportes.seguimiento.index')
        ->with('resultado',$resultado)
        ->with('request',$request)
        ->with('chassis',$chassis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $id = str_replace("_", "/", $id);
        $id=ltrim(rtrim($id));

        $datos_unidad = V_stock_todo::where('CHASIS','LIKE', '%'.$id.'%')->first();

        $cotizacion = Cotizacion::where('CHASIS','LIKE', '%'.$id.'%')->get();

        $reserva =Reserva::where('CHASIS','LIKE', '%'.$id.'%')->first();

        $contrato =DB::select( DB::raw("select S.*,V.nom_vendedor from gtauto.dbo.cpf_vtasokm S JOIN gtauto.dbo.ct_vendedores AS V ON V.cod_vendedor = S.cod_vendedor where chassis LIKE '%".$id."%'"));

        $factura =Factura::where('CHASIS', $id)->first();

        $entrega =DB::select( DB::raw("select * from gtauto.dbo.cpf_notaentrega where chassis LIKE '%".$id."%'"));

        $produccion = DB::select( DB::raw("select * from  gtauto.dbo.ct_vehiculos where chassis LIKE '%".$id."%'"));

        $envio = DB::select( DB::raw("
        select a.*,u.*,o.*,b.*
        from  gtauto.dbo.cpp_stock0km as a 
        left join gtauto.dbo.ct_ubicaciones as u ON a.cod_depdestino = u.cod_ubicacion 
        left join gtauto.dbo.ct_origen as o ON a.cod_deporigen = o.cod_origen
        left join gtauto.dbo.ct_buques as b ON a.cod_buque = b.cod_buque
        where chassis LIKE '%".$id."%'
         "));

        $movimientos = DB::table('gtauto.dbo.VIS_REPORTE_SA_STOCKOM_HISTORIAL_UBICACION')
        ->select('Ubicacion_Ant','ubicacion_Act','SYSTIME')        
        ->where('estado','ACTUALIZADO')
        ->where('chassis',$id)
        ->orderBy('SYSTIME' )
        ->get();



        return view('reportes.seguimiento.detalle')
        ->with('id',$id)
        ->with('datos_unidad',$datos_unidad)
        ->with('cotizacion',$cotizacion)
        ->with('reserva',$reserva)
        ->with('contrato',$contrato)
        ->with('factura',$factura)
        ->with('entrega',$entrega)
        ->with('produccion',$produccion)
        ->with('envio',$envio)
        ->with('movimientos',$movimientos);
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
