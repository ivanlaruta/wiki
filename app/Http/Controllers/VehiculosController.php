<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\V_stock_gtauto;
use App\V_ubicacion;
use Illuminate\Support\Facades\Auth;
use DB;
class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $v = V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->get();
        return view('distribuidor.stock.vehiculos')
            ->with('v',$v)
        ;
    }

    public function stock(Request $request,$vista,$ciudad,$pais)
    {
        // $ubica =V_stock_gtauto::select('nom_localidad')->whereIn('COD_MARCA', ['T','L','Y'])->groupBy('nom_localidad')->pluck('nom_localidad','nom_localidad');
       
        if(is_null($request->nom_localidad)) // LSITA - DISTRIBUIDOR
        {
            
        }
        else
        {
            $ciudad = $request->nom_localidad;
        }

        $ubica =V_stock_gtauto::select('nom_localidad')->whereIn('COD_MARCA', ['T','L','Y'])
        ->groupBy('nom_localidad')
        ->orderBy('nom_localidad','ASC')
        ->get();


        if($vista =='ver_dist') // LSITA - DISTRIBUIDOR
        {
            $total_t =V_stock_gtauto::where('COD_MARCA','T')->where('nom_localidad',$ciudad)->count();
            $total_l =V_stock_gtauto::where('COD_MARCA','L')->where('nom_localidad',$ciudad)->count();
            $total_y =V_stock_gtauto::where('COD_MARCA','Y')->where('nom_localidad',$ciudad)->count();

            $total =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('nom_localidad',$ciudad)->count();
            $total_bol =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('PAIS','BOLIVIA')->where('nom_localidad',$ciudad)->count();
            $total_tra =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('PAIS','EN TRANSITO')->where('nom_localidad',$ciudad)->count();
            $total_pro =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('PAIS','PRODUCCION')->where('nom_localidad',$ciudad)->count();
            $total_esp =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('PAIS','SC ESPECIAL')->where('nom_localidad',$ciudad)->count();

            $mod_T =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                ->where('COD_MARCA','T')
                ->groupBy('MODELOS','MARCA')
                ->orderBy('STOCK_REAL', 'DESC')
                ->where('nom_localidad',$ciudad)
                ->get();   

            $mod_L =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                ->where('COD_MARCA','L')
                ->groupBy('MODELOS','MARCA')
                ->orderBy('STOCK_REAL', 'DESC')
                ->where('nom_localidad',$ciudad)
                ->get();   

            $mod_Y =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                ->where('COD_MARCA','Y')
                ->groupBy('MODELOS','MARCA')
                ->orderBy('STOCK_REAL', 'DESC')
                ->where('nom_localidad',$ciudad)
                ->get();   
            
        }

        if($vista =='ver_reg') // LSITA - DISTRIBUIDOR
        {
            if($ciudad =='TODOS') // LSITA - DISTRIBUIDOR
            {
                 $total =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->count();
                    $total_bol =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('PAIS','BOLIVIA')->count();
                    $total_tra =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('PAIS','EN TRANSITO')->count();
                    $total_pro =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('PAIS','PRODUCCION')->count();
                    $total_esp =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('PAIS','SC ESPECIAL')->count();


                if($pais =='TODOS') // LSITA - DISTRIBUIDOR
                {    
                    $total_t =V_stock_gtauto::where('COD_MARCA','T')->count();
                    $total_l =V_stock_gtauto::where('COD_MARCA','L')->count();
                    $total_y =V_stock_gtauto::where('COD_MARCA','Y')->count();

                   

                    $mod_T =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','T')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        
                        ->get();   

                    $mod_L =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','L')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        
                        ->get();   

                    $mod_Y =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                        
                        ->where('COD_MARCA','Y')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        
                        ->get();  
                } 

                if($pais =='BOLIVIA') // LSITA - DISTRIBUIDOR
                {    
                    $total_t =V_stock_gtauto::where('COD_MARCA','T')->where('PAIS','BOLIVIA')->count();
                    $total_l =V_stock_gtauto::where('COD_MARCA','L')->where('PAIS','BOLIVIA')->count();
                    $total_y =V_stock_gtauto::where('COD_MARCA','Y')->where('PAIS','BOLIVIA')->count();

                    

                    $mod_T =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','T')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('PAIS','BOLIVIA')
                        ->get();   

                    $mod_L =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','L')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('PAIS','BOLIVIA')
                        ->get();   

                    $mod_Y =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                        
                        ->where('COD_MARCA','Y')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('PAIS','BOLIVIA')
                        ->get();  
                } 
            
                if($pais =='TRANSITO') // LSITA - DISTRIBUIDOR
                {    
                    $total_t =V_stock_gtauto::where('COD_MARCA','T')->where('PAIS','EN TRANSITO')->count();
                    $total_l =V_stock_gtauto::where('COD_MARCA','L')->where('PAIS','EN TRANSITO')->count();
                    $total_y =V_stock_gtauto::where('COD_MARCA','Y')->where('PAIS','EN TRANSITO')->count();

                    

                    $mod_T =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','T')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('PAIS','EN TRANSITO')
                        ->get();   

                    $mod_L =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','L')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('PAIS','EN TRANSITO')
                        ->get();   

                    $mod_Y =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                        
                        ->where('COD_MARCA','Y')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('PAIS','EN TRANSITO')
                        ->get();  
                } 
            
                if($pais =='PRODUCCION') // LSITA - DISTRIBUIDOR
                {    
                    $total_t =V_stock_gtauto::where('COD_MARCA','T')->where('PAIS','PRODUCCION')->count();
                    $total_l =V_stock_gtauto::where('COD_MARCA','L')->where('PAIS','PRODUCCION')->count();
                    $total_y =V_stock_gtauto::where('COD_MARCA','Y')->where('PAIS','PRODUCCION')->count();

                    

                    $mod_T =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','T')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('PAIS','PRODUCCION')
                        ->get();   

                    $mod_L =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','L')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('PAIS','PRODUCCION')
                        ->get();   

                    $mod_Y =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                        
                        ->where('COD_MARCA','Y')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('PAIS','PRODUCCION')
                        ->get();  
                } 
            
                if($pais =='SC_ESPECIAL') // LSITA - DISTRIBUIDOR
                {    
                    $total_t =V_stock_gtauto::where('COD_MARCA','T')->where('PAIS','SC ESPECIAL')->count();
                    $total_l =V_stock_gtauto::where('COD_MARCA','L')->where('PAIS','SC ESPECIAL')->count();
                    $total_y =V_stock_gtauto::where('COD_MARCA','Y')->where('PAIS','SC ESPECIAL')->count();

                    

                    $mod_T =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','T')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('PAIS','SC ESPECIAL')
                        ->get();   

                    $mod_L =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','L')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('PAIS','SC ESPECIAL')
                        ->get();   

                    $mod_Y =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                        
                        ->where('COD_MARCA','Y')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('PAIS','SC ESPECIAL')
                        ->get();  
                } 
            
        }
        else
        {
                $total =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('nom_localidad',$ciudad)->count();
                $total_bol =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('PAIS','BOLIVIA')->where('nom_localidad',$ciudad)->count();
                $total_tra =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('PAIS','EN TRANSITO')->where('nom_localidad',$ciudad)->count();
                    $total_pro =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('PAIS','PRODUCCION')->where('nom_localidad',$ciudad)->count();
                    $total_esp =V_stock_gtauto::whereIn('COD_MARCA', ['T','L','Y'])->where('PAIS','SC ESPECIAL')->where('nom_localidad',$ciudad)->count();


                if($pais =='TODOS') // LSITA - DISTRIBUIDOR
                {
                    $total_t =V_stock_gtauto::where('COD_MARCA','T')->where('nom_localidad',$ciudad)->count();
                    $total_l =V_stock_gtauto::where('COD_MARCA','L')->where('nom_localidad',$ciudad)->count();
                    $total_y =V_stock_gtauto::where('COD_MARCA','Y')->where('nom_localidad',$ciudad)->count();

                    

                    $mod_T =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','T')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->get();   

                    $mod_L =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','L')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->get();   

                    $mod_Y =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                        
                        ->where('COD_MARCA','Y')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->get();   
                }    

                if($pais =='BOLIVIA') // LSITA - DISTRIBUIDOR
                {
                    $total_t =V_stock_gtauto::where('COD_MARCA','T')->where('nom_localidad',$ciudad)->where('PAIS','BOLIVIA')->count();
                    $total_l =V_stock_gtauto::where('COD_MARCA','L')->where('nom_localidad',$ciudad)->where('PAIS','BOLIVIA')->count();
                    $total_y =V_stock_gtauto::where('COD_MARCA','Y')->where('nom_localidad',$ciudad)->where('PAIS','BOLIVIA')->count();

                    

                    $mod_T =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','T')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','BOLIVIA')
                        ->get();   

                    $mod_L =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','L')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','BOLIVIA')
                        ->get();   

                    $mod_Y =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                        
                        ->where('COD_MARCA','Y')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','BOLIVIA')
                        ->get();   
                }    

                if($pais =='TRANSITO') // LSITA - DISTRIBUIDOR
                {
                    $total_t =V_stock_gtauto::where('COD_MARCA','T')->where('nom_localidad',$ciudad)->where('PAIS','TRANSITO')->count();
                    $total_l =V_stock_gtauto::where('COD_MARCA','L')->where('nom_localidad',$ciudad)->where('PAIS','TRANSITO')->count();
                    $total_y =V_stock_gtauto::where('COD_MARCA','Y')->where('nom_localidad',$ciudad)->where('PAIS','TRANSITO')->count();

                    

                    $mod_T =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','T')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','TRANSITO')
                        ->get();   

                    $mod_L =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','L')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','TRANSITO')
                        ->get();   

                    $mod_Y =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                        
                        ->where('COD_MARCA','Y')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','TRANSITO')
                        ->get();   
                }    

                if($pais =='TRANSITO') // LSITA - DISTRIBUIDOR
                {
                    $total_t =V_stock_gtauto::where('COD_MARCA','T')->where('nom_localidad',$ciudad)->where('PAIS','EN TRANSITO')->count();
                    $total_l =V_stock_gtauto::where('COD_MARCA','L')->where('nom_localidad',$ciudad)->where('PAIS','EN TRANSITO')->count();
                    $total_y =V_stock_gtauto::where('COD_MARCA','Y')->where('nom_localidad',$ciudad)->where('PAIS','EN TRANSITO')->count();

                    

                    $mod_T =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','T')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','EN TRANSITO')
                        ->get();   

                    $mod_L =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','L')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','EN TRANSITO')
                        ->get();   

                    $mod_Y =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                        
                        ->where('COD_MARCA','Y')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','EN TRANSITO')
                        ->get();   
                } 

                if($pais =='PRODUCCION') // LSITA - DISTRIBUIDOR
                {
                    $total_t =V_stock_gtauto::where('COD_MARCA','T')->where('nom_localidad',$ciudad)->where('PAIS','PRODUCCION')->count();
                    $total_l =V_stock_gtauto::where('COD_MARCA','L')->where('nom_localidad',$ciudad)->where('PAIS','PRODUCCION')->count();
                    $total_y =V_stock_gtauto::where('COD_MARCA','Y')->where('nom_localidad',$ciudad)->where('PAIS','PRODUCCION')->count();

                    

                    $mod_T =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','T')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','PRODUCCION')
                        ->get();   

                    $mod_L =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','L')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','PRODUCCION')
                        ->get();   

                    $mod_Y =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                        
                        ->where('COD_MARCA','Y')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','PRODUCCION')
                        ->get();   
                }     
                if($pais =='SC_ESPECIAL') // LSITA - DISTRIBUIDOR
                {
                    $total_t =V_stock_gtauto::where('COD_MARCA','T')->where('nom_localidad',$ciudad)->where('PAIS','SC ESPECIAL')->count();
                    $total_l =V_stock_gtauto::where('COD_MARCA','L')->where('nom_localidad',$ciudad)->where('PAIS','SC ESPECIAL')->count();
                    $total_y =V_stock_gtauto::where('COD_MARCA','Y')->where('nom_localidad',$ciudad)->where('PAIS','SC ESPECIAL')->count();

                    

                    $mod_T =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','T')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','SC ESPECIAL')
                        ->get();   

                    $mod_L =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                       
                        ->where('COD_MARCA','L')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','SC ESPECIAL')
                        ->get();   

                    $mod_Y =V_stock_gtauto::select('MODELOS','MARCA',DB::raw('COUNT(MODELOS) AS STOCK_REAL'))
                        
                        ->where('COD_MARCA','Y')
                        ->groupBy('MODELOS','MARCA')
                        ->orderBy('STOCK_REAL', 'DESC')
                        ->where('nom_localidad',$ciudad)
                        ->where('PAIS','SC ESPECIAL')
                        ->get();   
                }    
            }
        }
        return view('distribuidor.stock.stock')
        ->with('pais',$pais)
            
            ->with('mod_T',$mod_T)
            ->with('mod_L',$mod_L)
            ->with('mod_Y',$mod_Y)
            ->with('ubica',$ubica)
            ->with('request',$request)
            ->with('total_t',$total_t)
            ->with('total_l',$total_l)
            ->with('total_y',$total_y)
            ->with('vista',$vista)

            ->with('total',$total)
            ->with('total_bol',$total_bol)
            ->with('total_tra',$total_tra)
            ->with('total_pro',$total_pro)
            ->with('total_esp',$total_esp)
            ->with('ciudad',$ciudad)
            ;       
    }
    
    public function modelos($modelos,$marca,$ciudad,$pais)
    {   
        if($pais == 'TODOS')
        {
            $pais='%';
        }
        //dd($modelos,$marca,$ciudad);
        if($ciudad=='TODOS')
        { 
            $total =V_stock_gtauto::where('MODELOS',$modelos)->where('PAIS','LIKE','%'.$pais.'%')->count();

            $mod =V_stock_gtauto::select('COD_MODELO','MODELO','MARCA',DB::raw('COUNT(MODELO) AS STOCK_REAL'))
               ->where('PAIS','LIKE','%'.$pais.'%')
                ->where('MODELOS',$modelos)
                ->groupBy('COD_MODELO','MODELO','MARCA')
                ->orderBy('STOCK_REAL', 'DESC')
                // ->where('nom_localidad',$ciudad)
                ->get(); 

        // $mod = DB::select( DB::raw("select m.COD_MODELO,m.MODELO,m.MARCA, COUNT(m.MODELO) as STOCK_REAL FROM v_stock_gtauto m WHERE m.estado = 'DISPONIBLE' AND m.MODELOS = '".$modelos."' GROUP BY m.COD_MODELO,m.MODELO ,M.MARCA ORDER BY m.MODELO ASC")); 
        }
        else
        {   
            $total =V_stock_gtauto::where('MODELOS',$modelos)->where('nom_localidad',$ciudad)->where('PAIS','LIKE','%'.$pais.'%')->count();

            $mod =V_stock_gtauto::select('COD_MODELO','MODELO','MARCA',DB::raw('COUNT(MODELO) AS STOCK_REAL'))
               ->where('PAIS','LIKE','%'.$pais.'%')
                ->where('MODELOS',$modelos)
                ->groupBy('COD_MODELO','MODELO','MARCA')
                ->orderBy('STOCK_REAL', 'DESC')
                ->where('nom_localidad',$ciudad)
                ->get(); 
        // $mod = DB::select( DB::raw("select m.COD_MODELO,m.MODELO,m.MARCA, COUNT(m.MODELO) as STOCK_REAL FROM v_stock_gtauto m WHERE m.estado = 'DISPONIBLE' AND m.MODELOS = '".$modelos."' AND m.nom_localidad='".$ciudad."' GROUP BY m.COD_MODELO,m.MODELO ,M.MARCA ORDER BY m.MODELO ASC")); 
        }
        if($pais == '%')
        {
            $pais='TODOS';
        }
       return view('distribuidor.stock.modelos')
       ->with('pais',$pais)
        ->with('marca',$marca)
        ->with('modelos',$modelos)
        ->with('mod',$mod)
        ->with('total',$total)
        
        ->with('ciudad',$ciudad);
    }

    public function master($modelo,$modelos,$marca,$ciudad,$pais)
    {   
        if($pais == 'TODOS')
        {
            $pais='%';
        }

        if($ciudad=='TODOS')
        { 

            $total =V_stock_gtauto::where('COD_MODELO',$modelo)->where('PAIS','LIKE','%'.$pais.'%')->count();

            $mas =V_stock_gtauto::select('COD_MASTER','MASTER','MODELOS','MARCA',DB::raw('COUNT(MASTER) AS STOCK_REAL'))
               ->where('PAIS','LIKE','%'.$pais.'%')
                ->where('COD_MODELO',$modelo)
                ->groupBy('COD_MASTER','MODELOS','MARCA','MASTER')
                ->orderBy('STOCK_REAL', 'DESC')
                // ->where('nom_localidad',$ciudad)
                ->get(); 


        // $mas = DB::select( DB::raw("select m.COD_MASTER,m.MASTER,m.MODELOS,m.MARCA, COUNT(m.MASTER)as STOCK_REAL  FROM v_stock_gtauto m  WHERE m.estado = 'DISPONIBLE'  AND m.COD_MODELO = '".$modelo."'  GROUP BY m.COD_MASTER,m.MODELOS,M.MARCA,M.MASTER ORDER BY m.MASTER ASC ")); 
                
        }
        else
        {
            $total =V_stock_gtauto::where('COD_MODELO',$modelo)->where('nom_localidad',$ciudad)->where('PAIS','LIKE','%'.$pais.'%')->count();

            $mas =V_stock_gtauto::select('COD_MASTER','MASTER','MODELOS','MARCA',DB::raw('COUNT(MASTER) AS STOCK_REAL'))
               ->where('PAIS','LIKE','%'.$pais.'%')
                ->where('COD_MODELO',$modelo)
                ->groupBy('COD_MASTER','MODELOS','MARCA','MASTER')
                ->orderBy('STOCK_REAL', 'DESC')
                ->where('nom_localidad',$ciudad)
                ->get(); 

            // $mas = DB::select( DB::raw("select s.stock_min, s.stock_asignado,m.COD_MASTER,m.MASTER,m.MODELOS,m.MARCA, COUNT(m.MASTER)as STOCK_REAL  FROM v_stock_gtauto m ,asignacion_stocks s WHERE m.estado = 'DISPONIBLE'  AND m.COD_MODELO = '".$modelo."' AND m.nom_localidad='".$ciudad."' AND  s.regional=m.nom_localidad AND m.COD_MASTER = s.cod_master GROUP BY m.COD_MASTER,m.MODELOS,M.MARCA,M.MASTER ,s.stock_min, s.stock_asignado ORDER BY m.MASTER ASC "));  
        }

        $modelo1 = V_stock_gtauto::select('MODELO')->where('COD_MODELO', '=', $modelo)->first();
if($pais == '%')
        {
            $pais='TODOS';
        }
       return view('distribuidor.stock.master')
       ->with('pais',$pais)
        ->with('marca',$marca)
        ->with('modelo',$modelo1)
        ->with('modelos',$modelos)
        ->with('ciudad',$ciudad)
        ->with('mas',$mas)
        ->with('total',$total);
    }

    public function det_vehiculos($master,$modelo,$modelos,$marca,$ciudad,$vista,$pais)
    {   
        if($master=='0') {$master='%';}
        if($modelo=='0') {$modelo='%';}
        if($modelos=='0') {$modelos='%';}
        if($marca=='0') {$marca='%';}
        
        if($vista=='0') {$vista='%';}
        

        if($pais == 'TODOS')
        {
            $pais='%';
        }
         $master= str_replace("_", "/", $master);
         $modelo= str_replace("_", "/", $modelo);

            if($ciudad=='TODOS')
            {
                $v = V_stock_gtauto::select(DB::raw('ROW_NUMBER() OVER(ORDER BY CHASIS ASC) AS ITEM'),'*')
                ->where('PAIS','LIKE','%'.$pais.'%')
                ->where('COD_MASTER','LIKE','%'.$master.'%')
                ->where('MARCA','LIKE','%'.$marca.'%')

                ->orderBy('CHASIS')
                ->get();
            }
            else
            {
                $v = V_stock_gtauto::select(DB::raw('ROW_NUMBER() OVER(ORDER BY CHASIS DESC) AS ITEM'),'*')
                ->where('PAIS','LIKE','%'.$pais.'%')
                ->where('COD_MASTER','LIKE','%'.$master.'%')
                ->where('nom_localidad', '=', $ciudad)
                ->orderBy('CHASIS')
                ->get();
            }

            $mast = V_stock_gtauto::select('MASTER')->where('COD_MASTER', '=', $master)->first();

            $modelo1 = V_stock_gtauto::select('COD_MODELO')->where('MODELO', '=', $modelo)->first();
            
        if($pais == '%')
        {
            $pais='TODOS';
        }



        if($master=='%') {$master='0';}
        if($modelo=='%') {$modelo='0';}
        if($modelos=='%') {$modelos='0';}
        if($marca=='%') {$marca='0';}
        if($ciudad=='%') {$ciudad='0';}
        if($vista=='%') {$vista='0';}
        if(is_null($modelo1)){$modelo1='0';}
        if(is_null($mast)){$mast='0';}


            return view('distribuidor.stock.det_vehiculos')
            ->with('pais',$pais)
            ->with('marca',$marca)
            ->with('modelo',$modelo)
            ->with('modelo1',$modelo1)
            ->with('modelos',$modelos)
            ->with('master',$master)
            ->with('mast',$mast)
            ->with('ciudad',$ciudad)
            ->with('v',$v)
            ->with('vista',$vista)
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
