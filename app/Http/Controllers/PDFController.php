<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\V_ubicacion;
use App\Solicitud;
use App\Marca;
use App\Modelo;
use App\Master;
use App\Detalle;
use App\Detalle_Chassis;
use App\V_stock_gtauto;
use App\Detalle_solicitud;
use App\Reservas_chassis;
use App\Envios_realizados;
use DB;
use PDF;

class PDFController extends Controller
{
   public function getPDF(Request $request,$id)
    {
        $envio =Envios_realizados::find($id);
        $solicitud = Solicitud::find($envio->id_solicitud);
        $detalle = Detalle_solicitud::where('id_solicitud','=',$envio->id_solicitud)
        ->where('id_detalle','=',$envio->id_detalle)
        ->first();
       
        $unidades = Reservas_chassis::select(DB::raw('ROW_NUMBER() OVER(ORDER BY id_detalle DESC) AS ITEM'),'*',DB::raw("CASE WHEN (SELECT movimiento from v_cod_barras c ,solicitudes s where reservas_chassis.chassis =  c.DATO_SCANEO and id_solicitud = reservas_chassis.id_solicitud and c.reg_destino = s.destino ) = 'SALIDA' THEN '1' ELSE '0' END AS salida_cb, CASE WHEN (SELECT movimiento from v_cod_barras c ,solicitudes s where reservas_chassis.chassis =  c.DATO_SCANEO and id_solicitud = reservas_chassis.id_solicitud and c.reg_destino = s.destino ) = 'INGRESO' THEN '1' ELSE '0' END AS llegada_cb"))
            ->where('id_envio','=',$id)->get();

        $resumen = Detalle_solicitud::select('cod_marca','cod_modelo','cod_master','anio','col_ext','col_int', DB::raw("(select COUNT (r.chassis) from reservas_chassis r where r.id_envio = ".$id." AND r.id_detalle = detalle_solicitudes.id_detalle AND r.id_solicitud =detalle_solicitudes.id_solicitud) as cantidad"))
            ->get();

        $total =Reservas_chassis::where('id_envio',$id)
        ->count();

        $pdf=PDF::loadView('distribuidor.envios.detalle_envioPDF', compact('envio', 'unidades', 'solicitud', 'detalle','resumen','total'));
             // ['envio'=> $envio],
             // ['unidades'=> $unidades],
             // ['solicitud'=> $solicitud],
             // ['detalle'=> $detalle]
             // );

       //$pdf=PDF::loadView('distribuidor.envios.detalle_envioPDF');

        return $pdf-> stream('Develop.pdf');
    }
}