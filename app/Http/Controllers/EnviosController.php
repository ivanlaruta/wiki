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
use App\Responsable;
use App\Conductor;
use App\Transportadora;
use DB;
class EnviosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {       
        $env_aprob =Solicitud::where('estado', '>=', '3')->get();

       return view('distribuidor.envios.aprobados')
           
            ->with('env_aprob',$env_aprob)
        ;
    }
       

    public function envios_lista(Request $request,$id)
    {   
        if($id==0)
        {$envios =Envios_realizados::all();}
        else
        {$envios =Envios_realizados::where('id_solicitud','=',$id)->get();}

       return view('distribuidor.envios.envios_lista')
            ->with('envios',$envios)
        ;
    }

    public function detalle_envio(Request $request, $id)
    {         
        $envio =Envios_realizados::find($id);
        $idd=$id;
        $solicitud = Solicitud::find($envio->id_solicitud);
        $unidades = Reservas_chassis::select(DB::raw('ROW_NUMBER() OVER(ORDER BY id_detalle DESC) AS ITEM'),'*',DB::raw("CASE WHEN (SELECT movimiento from v_cod_barras c ,solicitudes s where reservas_chassis.chassis =  c.DATO_SCANEO and id_solicitud = reservas_chassis.id_solicitud and c.reg_destino = s.destino ) = 'SALIDA' THEN '1' ELSE '0' END AS salida_cb, CASE WHEN (SELECT movimiento from v_cod_barras c ,solicitudes s where reservas_chassis.chassis =  c.DATO_SCANEO and id_solicitud = reservas_chassis.id_solicitud and c.reg_destino = s.destino ) = 'INGRESO' THEN '1' ELSE '0' END AS llegada_cb"))
            ->where('id_envio','=',$id)->get();

        $resumen = Detalle_solicitud::select('cod_marca','cod_modelo','cod_master','anio','col_ext','col_int', DB::raw("(select COUNT (r.chassis) from reservas_chassis r where r.id_envio = ".$id." AND r.id_detalle = detalle_solicitudes.id_detalle AND r.id_solicitud =detalle_solicitudes.id_solicitud) as cantidad"))
            ->get();

        $total =Reservas_chassis::where('id_envio',$id)
        ->count();
        
       return view('distribuidor.envios.detalle_envio')
            ->with('envio',$envio)
            ->with('unidades',$unidades)
            ->with('solicitud',$solicitud)
            ->with('resumen',$resumen)
            ->with('total',$total)
            ->with('idd',$idd)
        ;
    }

    public function enviar(Request $request,$id)
    {
        date_default_timezone_set('America/La_Paz');
        $time = time();
        $now =date("Y-m-d", $time);

        DB::update("update reservas_chassis set estado = '3' , fecha_envio = '".$now."' ,fecha_estimada_arribo ='".$request->f_env."' where id_solicitud = '".$id."'");
           
        $cant_env = DB::select( DB::raw("select id_solicitud,id_detalle, COUNT (chassis) as cantidad_enviada from reservas_chassis where estado = '3' and id_solicitud = '".$id."' GROUP BY id_solicitud,id_detalle ORDER BY id_detalle ASC"));

        foreach ($cant_env as $cant) { 

            DB::update("update detalle_solicitudes set cantidad_enviada = ".$cant->cantidad_enviada."  where id_detalle = '".$cant->id_detalle."' and id_solicitud = '".$id."'");
        }

           $env =Solicitud::find($id);
           $env->estado = '5';
           $env -> fecha_envio = $now;
           $env -> fecha_entrega_estimada = $request->f_env;
           $env->save();

        return redirect()->route('envios.index');
    }

    public function envio_parcial(Request $request,$id)
    {
        $env =Solicitud::find($id);

        $det = Detalle_solicitud::select(DB::raw("*,cantidad_aprobada - cantidad_enviada as sin_env"))
        ->where('id_solicitud','=',$id)
        ->get();

        $trans =Transportadora::orderBy('id','ASC')->pluck('nombre','id');

        $resp = Responsable::orderBy('paterno','ASC')
                    ->select('id', 'nombre','paterno')
                    ->get();

        $cond = Conductor::orderBy('paterno','ASC')
                    ->select('id', 'nombre','paterno')
                    ->get();

        return view('distribuidor.envios.hoja_envio_parcial')
         ->with('det',$det)
         ->with('id',$id)
         ->with('env',$env)
         ->with('resp',$resp)
         ->with('cond',$cond)
         ->with('trans',$trans)
         ;
    }

    public function enviar_parcial(Request $request)
    {
        
        date_default_timezone_set('America/La_Paz');
        $time = time();
        $now =date("Y-m-d", $time);

        $env =Solicitud::find($request->id);
        
        $det =$request->id_detalle;
        $unidades = Reservas_chassis::
                      where('id_solicitud','=',$request->id)
                    ->where('id_detalle','=',$request->id_detalle)
                    ->where('estado','<','3')
                    ->paginate($request->cant);

        DB::update("update reservas_chassis set estado_envio = '0' where id_detalle = '".$request->id_detalle."' and id_solicitud = '".$request->id."'");      

        foreach($unidades as $add)
        {
            DB::update("update reservas_chassis set estado_envio = '1' where id_detalle = '".$request->id_detalle."' and id_solicitud = '".$request->id."' and chassis = '".$add->chassis."'");
        }

        $enviados = Reservas_chassis::
            where('id_solicitud','=',$request->id)
            ->where('id_detalle','=',$request->id_detalle)
            ->where('estado','=','3')
            ->count();

        DB::update("update detalle_solicitudes set cantidad_a_enviar ='".$request->cant."' where id_detalle = '".$request->id_detalle."' and id_solicitud = '".$request->id."'");
  
            return redirect()->route('envios.envio_parcial', ['id' =>$request->id]);
    }


    public function guardar_parcial(Request $request)
    {
        
        date_default_timezone_set('America/La_Paz');
        $time = time();
        $now =date("Y-m-d", $time);

        $env =Solicitud::find($request->id);
       
        $unidades = Reservas_chassis::
                      where('id_solicitud','=',$request->id)
                    ->where('estado','<','3')
                    ->where('estado_envio','=','1')
                    ->get();

        $nuevo_env = new Envios_realizados();
        $nuevo_env -> id_solicitud = $request->id;
        $nuevo_env -> fecha_envio = $now;
        $nuevo_env -> fecha_estimada_arribo = $request->f_env;
        $nuevo_env -> responsable = $request->resp;
        $nuevo_env -> transportadora = $request->transp;
        $nuevo_env -> placa = $request->placa;
        $nuevo_env -> conductor = $request->conductor;
        $nuevo_env -> observaciones = $request->observaciones;
        $nuevo_env -> origen = $env->origen;
        $nuevo_env -> destino = $env->destino;
        $nuevo_env -> save();

        foreach($unidades as $add)
        {
            DB::update("update reservas_chassis set estado = '3' ,estado_envio = '2' , fecha_envio = '".$now."' ,fecha_estimada_arribo ='".$request->f_env."' , id_envio = ".$nuevo_env ->id_envio." where id_solicitud = '".$request->id."' and chassis = '".$add->chassis."'");
        }

        $enviados = Reservas_chassis::select('id_solicitud','id_detalle',DB::raw('(select COUNT (chassis) FROM reservas_chassis rr where estado = 3 AND reservas_chassis.id_solicitud = rr.id_solicitud AND reservas_chassis.id_detalle = rr.id_detalle)as enviados'))
            ->where('id_solicitud','=',$request->id)
            ->where('estado','=','3')
            ->groupBy('id_solicitud','id_detalle')
            ->get();

        foreach($enviados as $envi)
        {
             DB::update("update detalle_solicitudes set fecha_envio = '".$now."' ,cantidad_enviada ='".$envi->enviados."',cantidad_a_enviar = 0  where id_detalle = '".$envi->id_detalle."' and id_solicitud = '".$envi->id_solicitud."'");
        }

        $aprr = Detalle_solicitud::
            where('id_solicitud','=',$request->id)
            ->sum('cantidad_aprobada');

        $envv = Detalle_solicitud::
            where('id_solicitud','=',$request->id)
            ->sum('cantidad_enviada');
        
        $env =Solicitud::find($request->id);

        if ($aprr == $envv)
        {
            $env->estado = '5';
        }
        else
        {
            $env->estado = '4';
        }
        
        $env -> fecha_envio = $now;
        $env->save();

            return redirect()->route('envios.detalle_envio', ['id' =>$nuevo_env ->id_envio]);
    }
    public function modal_parcial(Request $request)
    {
        $env =Solicitud::find($request->id);
        $id = $request->id;
        $det = Detalle_solicitud::where('id_solicitud','=',$request->id)
        ->where('id_detalle','=',$request->id_detalle)
        ->first();

        
        


        return view('distribuidor.envios.modal_parcial')
         ->with('det',$det)
         ->with('id',$id)
         ->with('env',$env)
         ;
    }


    //   public function modal_parcial(Request $request,$id,$id2)
    // {

    //     $env =Solicitud::find($id);
        
    //     $det = Detalle_solicitud::where('id_solicitud','=',$id)
    //     ->where('id_detalle','=',$id2)
    //     ->first();
    //     return view('distribuidor.envios.enviar_parcial')
    //      ->with('det',$det)
    //      ->with('id',$id)
    //      ->with('env',$env);
    // }
    

    public function detalle_all(Request $request,$id,$id2)
    {   
        $env =Solicitud::find($id);

        if($id2  <> '0')
        {
            $det_all = Reservas_chassis::select(DB::raw('ROW_NUMBER() OVER(ORDER BY id_detalle DESC) AS ITEM'),'*')
             ->where('id_solicitud','=',$id)
             ->where('id_detalle','=',$id2)
             ->get();

        }
        else
        {
             $det_all = Reservas_chassis::select(DB::raw('ROW_NUMBER() OVER(ORDER BY id_detalle DESC) AS ITEM'),'*')
             ->where('id_solicitud','=',$id)
             
             ->get();
        }
        
        return view('distribuidor.envios.detalle_all')
            ->with('det_all',$det_all)
            ->with('id',$id)
            ->with('env',$env)
            ;
    }

    public function detalle(Request $request,$id)
    {
        $env =Solicitud::find($id);

        $det_all = Detalle_solicitud::where('id_solicitud','=',$id)->get();

        $det = Detalle_solicitud::where('id_solicitud','=',$id)->get();

        $trans =Transportadora::orderBy('id','ASC')->pluck('nombre','id');

        $resp = Responsable::orderBy('paterno','ASC')
                    ->select('id', 'nombre','paterno')
                    ->get();

        $cond = Conductor::orderBy('paterno','ASC')
                    ->select('id', 'nombre','paterno')
                    ->get();
        
            return view('distribuidor.envios.detalle')
            ->with('env',$env)
            ->with('request',$request)
            ->with('det',$det)
            ->with('det_all',$det_all)

            ->with('id',$id)
             
             ->with('resp',$resp)
             ->with('cond',$cond)
             ->with('trans',$trans)
            ;

    }
}
