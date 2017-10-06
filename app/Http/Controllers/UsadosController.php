<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usados.reporte.index');
    }

     public function index_admin()
    {
        return view('usados.administracion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usados.reporte.detalle');
    }

     public function modal_nuevo(Request $request)
    {
        return view('usados.administracion.modal_nuevo');
    }
     public function modal_nuevo_marca(Request $request)
    {
        return view('usados.administracion.modal_nuevo_marca');
    }
     public function modal_nuevo_modelo(Request $request)
    {
        return view('usados.administracion.modal_nuevo_modelo');
    }
     public function modal_nuevo_master(Request $request)
    {
        return view('usados.administracion.modal_nuevo_master');
    }
     public function modal_nuevo_color(Request $request)
    {
        return view('usados.administracion.modal_nuevo_color');
    }
     public function modal_nuevo_parametrica(Request $request)
    {
        return view('usados.administracion.modal_nuevo_parametrica');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
