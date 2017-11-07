<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trf_Encuesta;
use App\Trf_Motivo;
use App\Trf_Categoria;
use App\Trf_Modelo;
use App\Trf_Parametrica;
use App\Trf_Motivo_Categoria;
use App\Trf_Motivo_Encuesta;
use App\Trf_Sucursal_Encuesta;
use App\Trf_Sucursal;
use App\Vendedores;
use App\Trf_Cliente;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Auth;

class TraficoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formulario()
    {

        $suc=Auth::user()->sucursal2->nom_sucursal;
        $id_suc=Auth::user()->sucursal2->id;
        $encuesta=Trf_Encuesta::whereIn('id', DB::table('trf_sucursal_encuesta')->where('id_sucursal',$id_suc)->pluck('id_encuesta'))->first();
        if(sizeof($encuesta)>0)
        {
            $id_encuesta=$encuesta->id;
            $motivos =Trf_Motivo_Encuesta::where('id_encuesta',$id_encuesta)->orderBy('id','ASC')->get();
            $clientes = Trf_Cliente::all();
            $edades = Trf_Parametrica::where('tabla','rango_edades')->get();
            $motivo_Categoria=Trf_Motivo_Categoria::all();
            $modelos=Trf_Modelo::all();
            $vendedores=Vendedores::where('cod_ubicacion',$id_suc)->orderBy('nom_vendedor')->get();
            
            return view('trafico.formulario')
            ->with('encuesta',$encuesta)
            ->with('motivos',$motivos)
            ->with('clientes',$clientes)
            ->with('edades',$edades)
            ->with('motivo_Categoria',$motivo_Categoria)
            ->with('modelos',$modelos)
            ->with('vendedores',$vendedores);
        }
        else 
        {
            
            
            return view('trafico.formulario')
            ->with('encuesta',$encuesta)
            ;
        }
        
        // dd($vendedores);
        // dd($suc);
        // dd($id_suc);
        // dd($encuesta);
        // dd($id_encuesta);
        // dd($motivos);
        // dd($clientes);
        // dd($edades);
        // dd($motivo_Categoria);
        // dd($modelos);
        // dd($vendedores);
        
    }

    public function ver_encuestas(Request $request)
    {
        $id_e= $request->id_encuesta;

        $encuesta=Trf_Encuesta::find($id_e);
        $motivos=Trf_Motivo_Encuesta::where('id_encuesta',$id_e)->get();
        $sucursales=Trf_Sucursal_Encuesta::where('id_encuesta',$id_e)->get();
        $motivo_Categoria=Trf_Motivo_Categoria::all();
        $modelos=Trf_Modelo::all();

        return view('trafico.administracion.modal_ver_encuestas')
        ->with('encuesta',$encuesta) 
        ->with('motivos',$motivos) 
        ->with('sucursales',$sucursales) 
        ->with('motivo_Categoria',$motivo_Categoria) 
        ->with('modelos',$modelos) 
        ;        
    }

    public function modal_add_encuestas()
    {
        // dd(Auth::user()->sucursal2->nom_sucursal);
        $sucursales =Trf_Sucursal::whereNotIn('id', DB::table('trf_sucursal_encuesta')->pluck('id'))
        ->orderBy('id','ASC')
        ->get();

        $motivos =Trf_Motivo::orderBy('id','ASC')->get();

        return view('trafico.administracion.modal_add_encuestas')
        ->with('sucursales',$sucursales)
        ->with('motivos',$motivos) 
        ;
    }

    public function delete_encuesta(Request $request)
    {
        $id_encuesta=$request->id_encuesta;

        $encuesta = Trf_Encuesta::find($id_encuesta);
        $motivos_encuesta =Trf_Motivo_Encuesta::where('id_encuesta',$id_encuesta)->get();
        $sucursales_encuesta =Trf_Sucursal_Encuesta::where('id_encuesta',$id_encuesta)->get();

        foreach ($motivos_encuesta as $det) {
            $mot_enc=Trf_Motivo_Encuesta::find($det->id);
            $mot_enc->delete();
        }
        foreach ($sucursales_encuesta as $det2) {
            $suc_enc=Trf_Sucursal_Encuesta::find($det2->id);
            $suc_enc->delete();
        }

        $encuesta->delete();
        
        return redirect()->route('trafico.admin_index')->with('mensaje',"Eliminado exitosamente."); 
        

    }

    public function modal_add_motivo_encuesta()
    {
        // dd(Auth::user()->sucursal2->nom_sucursal);
        $encuestas =Trf_Encuesta::orderBy('id','ASC')->get();
        $motivos =Trf_Motivo::orderBy('id','ASC')->get();
        return view('trafico.administracion.modal_add_motivo_encuesta')
        ->with('encuestas',$encuestas) 
        ->with('motivos',$motivos) 
        ;
    }

    public function add_encuestas(Request $request)
    {
        // dd($request->all());
        $nueva_encuesta = new Trf_Encuesta();
        $nueva_encuesta -> descripcion = $request->DESCRIPCION;
        $nueva_encuesta -> observaciones = $request->OBSERVACIONES;
        $nueva_encuesta ->save();

        for ($i=0; $i < sizeof($request->motivos_lista); $i++) 
        {
            $nuevo_motivo_encuesta = new Trf_Motivo_Encuesta();
            $nuevo_motivo_encuesta -> id_encuesta = $nueva_encuesta ->id;
            $nuevo_motivo_encuesta -> id_motivo = $request->motivos_lista[$i];
            $nuevo_motivo_encuesta ->save();
        }

        for ($j=0; $j < sizeof($request->sucursales_lista); $j++) 
        {
            $nuevo_sucursal_encuesta = new Trf_Sucursal_Encuesta();
            $nuevo_sucursal_encuesta -> id_encuesta = $nueva_encuesta ->id;
            $nuevo_sucursal_encuesta -> id_sucursal = $request->sucursales_lista[$j];
            $nuevo_sucursal_encuesta ->save();
        }
        
        return redirect()->route('trafico.admin_index')->with('mensaje',"Creado exitosamente."); 
    }
    
    public function add_motivo_encuesta(Request $request)
    {
        $nuevo_motivo_encuesta = new Trf_Motivo_Encuesta();
        $nuevo_motivo_encuesta -> id_encuesta = $request->ENCUESTA;
        $nuevo_motivo_encuesta -> id_motivo = $request->MOTIVO;
        $nuevo_motivo_encuesta -> descripcion = $request->DESCRIPCION;
        $nuevo_motivo_encuesta ->save();

        return redirect()->route('trafico.admin_index')->with('mensaje',"Creado exitosamente."); 
    }
    
    public function admin_index()
    {
        // dd(Auth::user()->sucursal2->nom_sucursal);
        $encuestas =Trf_Encuesta::all(); 
        $motivos =Trf_Motivo::all(); 
        $categorias =Trf_Categoria::all(); 
        $modelos =Trf_Modelo::all();
        $parametricas =Trf_Parametrica::all();
        $motivos_categoria =Trf_Motivo_Categoria::all();
        $sucursales_encuesta =Trf_Sucursal_Encuesta::all();
        $motivos_encuesta =Trf_Motivo_Encuesta::all();

        return view('trafico.administracion.index')
        ->with('encuestas',$encuestas) 
        ->with('motivos',$motivos) 
        ->with('categorias',$categorias) 
        ->with('parametricas',$parametricas) 
        ->with('modelos',$modelos) 
        ->with('motivos_categoria',$motivos_categoria) 
        ->with('motivos_encuesta',$motivos_encuesta) 
        ->with('sucursales_encuesta',$sucursales_encuesta) 
        ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_visita(Request $request)
    {
        dd($request->all());
    }

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
