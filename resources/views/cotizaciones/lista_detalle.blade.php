@extends('layouts.main')

@section('content')


  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title">
          <h3>
        <a href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}">COTIZACIONES {{$año_actual}} </a>  

        @if( $title == 'mes_regional' || $title == 'mes' || $title == 'diarias' || $title == 'mes_marca')
        <a href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'mes','mes'=>$mes,'regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / {{$desc_mes}} </a>  
        @endif 

        @if($title == 'diarias') 
        / @if($v_aux <> '%'){{$v_aux}}@endif {{date('d',strtotime($inicio))}}  
        @endif 

        @if($title == 'marca' || $title == 'marca_mes' || $title == 'marca_regional'|| $title == 'marca_modelo') 
        <a href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'marca','mes'=>'0','regional'=>'0','marca'=>($marca),'sucursal'=>'0','modelo'=>'0'])}}"> 
          / {{$marca}}  </a>

          @endif 

          @if( $title == 'semanal' || $title == 'ult_15_dias' ) 
          / {{date('d/m/Y',strtotime($inicio))}} - {{date('d/m/Y',strtotime($final))}} 
          @endif 

          @if( $title == 'regional' || $title == 'regional_mes'|| $title == 'regional_sucursal' ||  $title == 'regional_marca' )
          <a href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'regional','mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / {{$regional}} </a>  
          @endif 

          @if( $title == 'regional_mes') 
          / {{$desc_mes}}  
          @endif

          @if( $title == 'mes_regional') 
          / {{$regional}}  
          @endif 

          @if( $title == 'mes_marca') 
          / {{$marca}}  
          @endif 

          @if( $title == 'regional_sucursal') 
          / {{$sucursal}}  
          @endif 
          @if( $title == 'regional_marca') 
          / {{$marca}}  
          @endif 
          @if( $title == 'marca_mes' ) 
          / {{$desc_mes}}  
          @endif 
          @if( $title == 'marca_regional' ) 
          / {{$regional}}  
          @endif 
          @if( $title == 'marca_modelo' ) 
          / {{$modelo}}  
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
                     <th>MARCA</th>
                     <th>MODELO</th>
                     <th>MASTER</th>
                     <th>AÑO</th>
                     <th>COLOR</th>
                     <th>CHASIS</th>
                     <th>PRECIO</th>
                     <th>MODALIDAD</th>
                     <th>TIPO CLIENTE</th>
                     <th>NIT</th>
                     <th>CLIENTE</th>
                     <th>VENDEDOR</th>

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
                     <td>{{$det->MARCA}}</td>
                     <td>{{$det->MODELO}}</td>
                     <td>{{$det->MASTER}}</td>
                     <td>{{$det->Año}}</td>
                     <td>{{$det->color}}</td>
                     <td>{{$det->CHASIS}}</td>
                     <td>{{$det->PRECIO_TOTAL}}</td>
                     <td>{{$det->modalidad}}</td>
                     <td>{{$det->TIPO_CLIENTE}}</td>
                     <td>{{$det->NIT}}</td>
                     <td>{{$det->CLIENTE}}</td>
                     <td>{{strtoupper($det->VENDEDOR)}}</td>                     
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