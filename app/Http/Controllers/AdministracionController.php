<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Trf_Sucursal;
use App\Trf_Parametrica;

use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Auth;

class AdministracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_sucursales()
    {
        $detalle =Trf_Sucursal::select(DB::raw('ROW_NUMBER() OVER(ORDER BY id DESC) AS ITEM'),'*')->get(); 
        // dd($detalle);
        return view('administracion.sucursales.index')->with('detalle',$detalle) ;
    }

    public function index_users()
    {
        $detalle =User::all();
        return view('administracion.users.index')->with('detalle',$detalle) ;
    }

    public function index_parametrica()
    {
        $detalle =Trf_Parametrica::all();
        return view('administracion.parametricas.index')->with('detalle',$detalle) ;
    }

     public function index()
    {
        //
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
