<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borradores =Solicitud::where('estado', '=', '1')->count();
       
        $espera =Solicitud::where('estado', '=', '2')->count();
       
        $aprobados =Solicitud::where('estado', '>=', '3')->count();

        $sin_enviar =Solicitud::where('estado', '=', '3')->count();

        $envio_parcial =Solicitud::where('estado', '=', '4')->count();

        $enviados =Solicitud::where('estado', '=', '5')->count();

        $regulares =Solicitud::where('tipo', '=', 'REGULAR')->count();

        $extraordinarios =Solicitud::where('tipo', '=', 'EXTRAORDINARIO')->count();

       

        //return response()->json([ 'borradores' => $borradores, 'espera' => $espera, 'aprobados' => $aprobados]);

        return view('distribuidor.index')
         ->with('borradores',$borradores)
         ->with('espera',$espera)
         ->with('aprobados',$aprobados)
         ->with('sin_enviar',$sin_enviar)
         ->with('envio_parcial',$envio_parcial)
         ->with('enviados',$enviados)
         ->with('regulares',$regulares)
         ->with('extraordinarios',$extraordinarios)
        ;
    }

    public function rep_barras()
    {
               

        //return response()->json([ 'borradores' => $borradores, 'espera' => $espera, 'aprobados' => $aprobados]);

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
