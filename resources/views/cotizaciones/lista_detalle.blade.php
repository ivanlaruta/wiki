@extends('layouts.main')

@section('content')


  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title">
          <h3>
         {{--  link cotizaciones --}}
        <a href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}">COTIZACIONES {{$año_actual}} </a>  
        
         {{--  link ULT 15 DIAS --}}

        @if( $title ==  'det_15_regional' ||  $title ==  'det_15_marca' || $title ==  'det_15_vendedor'|| $title ==  'det_15_dia'  )
        <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>$ult_15,'f_fin'=>$hoy,'title'=>'ult_15_dias','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / ULTIMOS 15 DIAS</a>  
        @endif 
         {{--  link semanal --}}

        @if( $title ==  'det_semanal_dia' || $title ==  'det_semanal_regional'  || $title ==  'det_semanal_marca'  || $title ==  'det_semanal_vendedor'  )
        <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>$inicio_sem,'f_fin'=>$hoy,'title'=>'semanal','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / ESTA SEMANA </a>  
        @endif 

         {{--  link MES --}}

        @if( $title ==  'det_diarias_regional' || $title ==  'det_diarias_marca' ||$title ==  'det_diarias_vendedor'  ||$title ==  'det_mes_regional_dia'  ||$title ==  'det_mes_regional_sucursal' ||$title ==  'det_mes_regional_marca' ||$title ==  'det_mes_regional_vendedor' ||$title ==  'det_mes_marca_modelo' || $title == 'det_mes_marca_dia'|| $title == 'det_mes_marca_regional'|| $title == 'det_mes_marca_modelo'|| $title == 'det_mes_marca_vendedor' || $title == 'det_mes_vendedor' )
        <a href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'mes','mes'=>$mes,'regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / {{$desc_mes}} </a>  
        @endif 

        {{--  link DIARIOS --}}

        @if($title == 'det_diarias_regional' || $title ==  'det_diarias_marca' || $title ==  'det_diarias_vendedor'  ) 
       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>$inicio,'f_fin'=>$inicio,'title'=>'diarias','mes'=>$mes,'regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / @if($v_aux <> '%'){{$v_aux}}@endif {{date('d',strtotime($inicio))}}   </a>
        @endif 

        {{--  link MES_REGIONAL --}}
        @if($title == 'det_mes_regional_dia'|| $title == 'det_mes_regional_sucursal'|| $title == 'det_mes_regional_marca' || $title == 'det_mes_regional_vendedor'  ) 
       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'mes_regional','mes'=>$mes,'regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> /  {{$regional}}   </a>
        @endif 

      {{--  link MES_MARCA --}}
        @if($title == 'det_mes_marca_dia'|| $title == 'det_mes_marca_regional'|| $title == 'det_mes_marca_modelo'|| $title == 'det_mes_marca_vendedor'  ) 
       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'mes_marca','mes'=>$mes,'regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$marca}}   </a>
        @endif 



      {{--  link REGIONAL --}}
        @if($title == 'det_regional_mes_dia' || $title == 'det_regional_mes_sucursal'|| $title == 'det_regional_mes_marca'|| $title == 'det_regional_mes_vendedor'|| $title == 'det_regional_sucursal_mes' || $title == 'det_regional_sucursal_marca' || $title == 'det_regional_sucursal_vendedor'|| $title == 'det_regional_vendedor' || $title == 'det_regional_marca_mes'|| $title == 'det_regional_marca_vendedor' || $title == 'det_regional_marca_sucursal'|| $title == 'det_regional_marca_modelo' ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional','mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> /  {{$regional}}   </a>
        @endif 



      {{--  link REGIONAL marca.. --}}
        @if($title == 'det_regional_marca_mes' || $title == 'det_regional_marca_vendedor'|| $title == 'det_regional_marca_sucursal'|| $title == 'det_regional_marca_modelo' ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional_marca','mes'=>$mes,'regional'=>$regional,'marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$marca}}   </a>
        @endif 

   {{--  link REGIONAL sucursal.. --}}
        @if($title == 'det_regional_sucursal_mes' || $title == 'det_regional_sucursal_marca' || $title == 'det_regional_sucursal_vendedor' ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional_sucursal','mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=> $sucursal,'modelo'=>'0'])}}"> /  {{$sucursal}}   </a>
        @endif 


      {{--  link REGIONAL MES.. --}}
        @if($title == 'det_regional_mes_dia' || $title == 'det_regional_mes_sucursal'|| $title == 'det_regional_mes_marca'|| $title == 'det_regional_mes_vendedor') 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional_mes','mes'=>$mes,'regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> /  {{$desc_mes}}   </a>
        @endif 



      {{--  link marca --}}
        @if($title == 'det_marca_mes_dia' || $title == 'det_marca_mes_regional' || $title == 'det_marca_mes_modelo' || $title == 'det_marca_mes_vendedor'|| $title == 'det_marca_regional_mes'|| $title == 'det_marca_regional_sucursal'|| $title == 'det_marca_regional_modelo'|| $title == 'det_marca_regional_vendedor' || $title == 'det_marca_vendedor'|| $title == 'det_marca_modelo_mes'|| $title == 'det_marca_modelo_regional' || $title == 'det_marca_modelo_vendedor'|| $title == 'det_marca_modelo_master' ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'marca','mes'=>'0','regional'=>'0','marca'=>rtrim(($marca)),'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$marca}}   </a>
        @endif 

  {{--  link marca mes --}}
         @if($title == 'det_marca_mes_dia' || $title == 'det_marca_mes_regional'  || $title == 'det_marca_mes_modelo'|| $title == 'det_marca_mes_vendedor' ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'marca_mes','mes'=>$mes,'regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$desc_mes}}   </a>
        @endif 

  {{--  link marca regional --}}
         @if($title == 'det_marca_regional_mes' || $title == 'det_marca_regional_sucursal'  || $title == 'det_marca_regional_modelo'|| $title == 'det_marca_regional_vendedor' ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional_marca','mes'=>'0','regional'=>$regional,'marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$regional}}   </a>
        @endif 

  {{--  link marca modelo --}}
         @if($title == 'det_marca_modelo_mes' || $title == 'det_marca_modelo_regional' || $title == 'det_marca_modelo_vendedor' || $title == 'det_marca_modelo_master'  ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'marca_modelo','mes'=>'0','regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=> $modelo ])}}"> /  {{$modelo}}   </a>
        @endif 

      {{--  linkS FINLES --}}

         @if($title == 'det_mes_vendedor'  || $title == 'det_mes_marca_vendedor'  || $title == 'det_mes_regional_vendedor' ||  $title == 'det_diarias_vendedor' ||  $title == 'det_vendedor' ||  $title ==  'det_semanal_vendedor' || $title ==  'det_15_vendedor' || $title ==  'det_regional_mes_vendedor'|| $title ==  'det_regional_sucursal_vendedor'|| $title ==  'det_regional_vendedor' || $title ==  'det_regional_marca_vendedor' || $title ==  'det_marca_mes_vendedor' || $title ==  'det_marca_regional_vendedor'|| $title ==  'det_marca_vendedor' || $title ==  'det_marca_modelo_vendedor' ) 
        / {{$vendedor}}  
        @endif 

         @if($title == 'det_mes_marca_regional'|| $title == 'det_diarias_regional'|| $title == 'det_semanal_regional' || $title ==  'det_15_regional'|| $title ==  'det_marca_mes_regional'|| $title ==  'det_marca_modelo_regional') 
        / {{$regional}}  
        @endif 

        @if( $title == 'det_diarias_marca' || $title == 'det_mes_regional_marca' || $title ==  'det_semanal_marca' || $title ==  'det_15_marca' || $title ==  'det_regional_mes_marca' || $title == 'det_regional_sucursal_marca' ) 
        /  {{$marca}}
        @endif 

         @if($title == 'det_mes_marca_dia' || $title == 'det_mes_regional_dia' || $title == 'det_semanal_dia'|| $title ==  'det_15_dia' || $title ==  'det_regional_mes_dia' ||$title == 'det_marca_mes_dia'  ) 
        /  @if($v_aux <> '%'){{$v_aux}}@endif {{date('d',strtotime($inicio))}}
        @endif 

         @if($title == 'det_mes_marca_modelo' || $title == 'det_regional_marca_modelo' || $title == 'det_marca_mes_modelo'  || $title == 'det_marca_regional_modelo'  ) 
        /  {{$modelo}}
        @endif 

         @if($title == 'det_mes_regional_sucursal' || $title == 'det_regional_mes_sucursal'|| $title == 'det_regional_marca_sucursal' || $title == 'det_marca_regional_sucursal' ) 
        /  {{$sucursal}}
        @endif 

         @if($title == 'det_regional_sucursal_mes' ||  $title == 'det_regional_marca_mes'  ||  $title == 'det_marca_regional_mes' ||  $title == 'det_marca_modelo_mes'  ) 
        /  {{$desc_mes}}
        @endif 
         @if($title == 'det_marca_modelo_master'   ) 
        /  {{$master}}
        @endif 

        </h3>
        </div>
         <div class="title_right"></div>
      </div>
      <div class="clearfix"></div>
      

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="title">
              <h2>COTIZACIONES <small>  </small></h2>

            </div>
          </div>
        </div>
       </div>
         <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_content animated fadeIn">
              <p class="text-muted font-13 m-b-30"></p>
              <div class="table-responsive" {{-- style="max-height: 450px; width: 100%; margin: 0; overflow-y: auto; --}}">
                <table class="table table-striped jambo_table bulk_action">
                  <thead style="">
                    <tr>
                     <th></th>
                     <th>NRO COTIZACION</th>
                     <th>FECHA</th>
                     <th>REGIONAL</th>
                     <th>SUCURSAL</th>
                     <th>VENDEDOR</th>
                     <th>TIPO CLIENTE</th>
                     <th>NIT</th>
                     <th>CLIENTE</th>
                     <th>MARCA</th>
                     <th>MODELO</th>
                     <th>MASTER</th>
                     <th>AÑO</th>
                     <th>COLOR</th>
                     <th>CHASIS</th>
                     <th>PRECIO</th>
                     <th>MODALIDAD</th>
                     
                     

                    </tr>
                  </thead>
                  <tbody>
                  @foreach($detalle as $det)
                    <tr>
                     <td>{{$det->ITEM}}</td>
                     <td>{{$det->NRO_COTIZACION}}</td>
                     <td>{{$det->FECHA_COTIZACION}}</td>
                     <td>{{$det->REGIONAL}}</td>
                     <td>{{$det->SUCURSAL}}</td>
                     <td>{{strtoupper($det->VENDEDOR)}}</td>  
                     <td>{{$det->TIPO_CLIENTE}}</td>
                     <td>{{$det->NIT}}</td>
                     <td>{{$det->CLIENTE}}</td>
                     <td>{{$det->MARCA}}</td>
                     <td>{{$det->MODELO}}</td>
                     <td>{{$det->MASTER}}</td>
                     <td>{{$det->Año}}</td>
                     <td>{{$det->color}}</td>
                     <td>{{$det->CHASIS}}</td>
                     <td>{{$det->PRECIO_TOTAL}}</td>
                     <td>{{$det->modalidad}}</td>
                     
                                        
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            </div>
         
       

    </div>
  </div>       


@endsection
@section('scripts')

<script type="text/javascript">



</script>
@endsection