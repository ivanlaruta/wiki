@extends('layouts.main')

@section('content')


  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title">
          <h3>
         {{--  link contratos --}}
        <a href="{{ route('contratos.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}">CONTRATOS {{$año_actual}} </a>  
        
         {{--  link ULT 15 DIAS --}}

        @if( $title ==  'busqueda')
        <a href="{{route('contratos.busqueda')}}"> / BUSQUEDA AVANZADA</a>  /RESULTADO DE BUSQUEDA
        @endif 
         @if( $title ==  'det_15_regional' ||  $title ==  'det_15_marca' || $title ==  'det_15_vendedor'|| $title ==  'det_15_dia'  )
        <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>$ult_15,'f_fin'=>$hoy,'title'=>'ult_15_dias','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / ULTIMOS 15 DIAS</a>  
        @endif 
         {{--  link semanal --}}

        @if( $title ==  'det_semanal_dia' || $title ==  'det_semanal_regional'  || $title ==  'det_semanal_marca'  || $title ==  'det_semanal_vendedor'  )
        <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>$inicio_sem,'f_fin'=>$hoy,'title'=>'semanal','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / ESTA SEMANA </a>  
        @endif 

         {{--  link MES --}}

        @if( $title ==  'det_diarias_regional' || $title ==  'det_diarias_marca' ||$title ==  'det_diarias_vendedor'  ||$title ==  'det_mes_regional_dia'  ||$title ==  'det_mes_regional_sucursal' ||$title ==  'det_mes_regional_marca' ||$title ==  'det_mes_regional_vendedor' ||$title ==  'det_mes_marca_modelo' || $title == 'det_mes_marca_dia'|| $title == 'det_mes_marca_regional'|| $title == 'det_mes_marca_modelo'|| $title == 'det_mes_marca_vendedor' || $title == 'det_mes_vendedor' )
        <a href="{{ route('contratos.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'mes','mes'=>$mes,'regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / {{$desc_mes}} </a>  
        @endif 

        {{--  link DIARIOS --}}

        @if($title == 'det_diarias_regional' || $title ==  'det_diarias_marca' || $title ==  'det_diarias_vendedor'  ) 
       <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>$inicio,'f_fin'=>$inicio,'title'=>'diarias','mes'=>$mes,'regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / @if($v_aux <> '%'){{$v_aux}}@endif {{date('d',strtotime($inicio))}}   </a>
        @endif 

        {{--  link MES_REGIONAL --}}
        @if($title == 'det_mes_regional_dia'|| $title == 'det_mes_regional_sucursal'|| $title == 'det_mes_regional_marca' || $title == 'det_mes_regional_vendedor'  ) 
       <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'mes_regional','mes'=>$mes,'regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> /  {{$regional}}   </a>
        @endif 

      {{--  link MES_MARCA --}}
        @if($title == 'det_mes_marca_dia'|| $title == 'det_mes_marca_regional'|| $title == 'det_mes_marca_modelo'|| $title == 'det_mes_marca_vendedor'  ) 
       <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'mes_marca','mes'=>$mes,'regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$marca}}   </a>
        @endif 



      {{--  link REGIONAL --}}
        @if($title == 'det_regional_mes_dia' || $title == 'det_regional_mes_sucursal'|| $title == 'det_regional_mes_marca'|| $title == 'det_regional_mes_vendedor'|| $title == 'det_regional_sucursal_mes' || $title == 'det_regional_sucursal_marca' || $title == 'det_regional_sucursal_vendedor'|| $title == 'det_regional_vendedor' || $title == 'det_regional_marca_mes'|| $title == 'det_regional_marca_vendedor' || $title == 'det_regional_marca_sucursal'|| $title == 'det_regional_marca_modelo' ) 

       <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional','mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> /  {{$regional}}   </a>
        @endif 



      {{--  link REGIONAL marca.. --}}
        @if($title == 'det_regional_marca_mes' || $title == 'det_regional_marca_vendedor'|| $title == 'det_regional_marca_sucursal'|| $title == 'det_regional_marca_modelo' ) 

       <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional_marca','mes'=>$mes,'regional'=>$regional,'marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$marca}}   </a>
        @endif 

   {{--  link REGIONAL sucursal.. --}}
        @if($title == 'det_regional_sucursal_mes' || $title == 'det_regional_sucursal_marca' || $title == 'det_regional_sucursal_vendedor' ) 

       <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional_sucursal','mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=> $sucursal,'modelo'=>'0'])}}"> /  {{$sucursal}}   </a>
        @endif 


      {{--  link REGIONAL MES.. --}}
        @if($title == 'det_regional_mes_dia' || $title == 'det_regional_mes_sucursal'|| $title == 'det_regional_mes_marca'|| $title == 'det_regional_mes_vendedor') 

       <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional_mes','mes'=>$mes,'regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> /  {{$desc_mes}}   </a>
        @endif 



      {{--  link marca --}}
        @if($title == 'det_marca_mes_dia' || $title == 'det_marca_mes_regional' || $title == 'det_marca_mes_modelo' || $title == 'det_marca_mes_vendedor'|| $title == 'det_marca_regional_mes'|| $title == 'det_marca_regional_sucursal'|| $title == 'det_marca_regional_modelo'|| $title == 'det_marca_regional_vendedor' || $title == 'det_marca_vendedor'|| $title == 'det_marca_modelo_mes'|| $title == 'det_marca_modelo_regional' || $title == 'det_marca_modelo_vendedor'|| $title == 'det_marca_modelo_master' ) 

       <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'marca','mes'=>'0','regional'=>'0','marca'=>rtrim(($marca)),'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$marca}}   </a>
        @endif 

  {{--  link marca mes --}}
         @if($title == 'det_marca_mes_dia' || $title == 'det_marca_mes_regional'  || $title == 'det_marca_mes_modelo'|| $title == 'det_marca_mes_vendedor' ) 

       <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'marca_mes','mes'=>$mes,'regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$desc_mes}}   </a>
        @endif 

  {{--  link marca regional --}}
         @if($title == 'det_marca_regional_mes' || $title == 'det_marca_regional_sucursal'  || $title == 'det_marca_regional_modelo'|| $title == 'det_marca_regional_vendedor' ) 

       <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional_marca','mes'=>'0','regional'=>$regional,'marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$regional}}   </a>
        @endif 

  {{--  link marca modelo --}}
         @if($title == 'det_marca_modelo_mes' || $title == 'det_marca_modelo_regional' || $title == 'det_marca_modelo_vendedor' || $title == 'det_marca_modelo_master'  ) 

       <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'marca_modelo','mes'=>'0','regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=> $modelo ])}}"> /  {{$modelo}}   </a>
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
  
        
              {{-- Enlace para indicadores de ver detalle..... --}}
        @if( $title == 'det_mes_regional' || $title == 'det_mes' || $title == 'det_diarias' || $title == 'det_mes_marca')
        <a href="{{ route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'mes','mes'=>$mes,'regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / {{$desc_mes}} </a>  
        @endif 

        @if($title == 'det_diarias') 
        / @if($v_aux <> '0'){{$v_aux}}@endif {{date('d',strtotime($inicio))}}  
        @endif 

        @if($title == 'det_marca' || $title == 'det_marca_mes' || $title == 'det_marca_regional'|| $title == 'det_marca_modelo') 
        <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'marca','mes'=>'0','regional'=>'0','marca'=>($marca),'sucursal'=>'0','modelo'=>'0'])}}"> 
          / {{$marca}}  </a>
          @endif 

          @if( $title == 'det_semanal' ) 
          / ESTA SEMANA{{-- {{date('d/m/Y',strtotime($inicio))}} - {{date('d/m/Y',strtotime($final))}} --}} 
          @endif 

          @if(  $title == 'det_ult_15_dias' ) 
          / ULTIMOS 15 DIAS{{-- {{date('d/m/Y',strtotime($inicio))}} - {{date('d/m/Y',strtotime($final))}} --}} 
          @endif 

          @if( $title == 'det_regional' || $title == 'det_regional_mes'|| $title == 'det_regional_sucursal' ||  $title == 'det_regional_marca' )
          <a href="{{route('contratos.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional','mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / {{$regional}} </a>  
          @endif 

          @if( $title == 'det_regional_mes' || $title == 'det_marca_mes') 
          / {{$desc_mes}}  
          @endif
          
          @if( $title == 'det_marca_regional' || $title == 'det_mes_regional' ) 
          / {{$regional}}  
          @endif 

          @if( $title == 'det_regional_marca' ||  $title == 'det_mes_marca') 
          / {{$marca}}  
          @endif 
          
          @if( $title == 'det_regional_sucursal') 
          / {{$sucursal}}  
          @endif 
                    
          @if( $title == 'det_marca_modelo' ) 
          / {{$modelo}}  
          @endif 


        </h3>
        </div>
         <div class="title_right"></div>
      </div>
      <div class="clearfix"></div>
        
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_content animated fadeIn">
              <p class="text-muted font-13 m-b-30"></p>
              <div class="table-responsive" {{-- style="max-height: 450px; width: 100%; margin: 0; overflow-y: auto; --}}">
                <table class="table table-striped jambo_table bulk_action" id="datatable1">
                  <thead>
                    <tr>
                     <tr>
                     <th></th> 
                     <th>NRO CONTRATO</th> 
                     <th>FECHA CONTRATO</th> 

                     <th>REGIONAL</th>
                     <th>SUCURSAL</th> 
                     <th>VENDEDOR</th>
                     <th>CLIENTE</th> 
                     <th>NIT</th>
                     <th>DIRECCION</th>
                     <th>TELEFONO</th>
                     <th>CELULAR</th>
                     
                     <th>MARCA</th> 
                     <th>COD MODELO</th>
                     <th>MODELO</th>  
                     <th>COD MASTER</th>
                     <th>MASTER</th> 
                     <th>AÑO</th> 
                     <th>CHASSIS</th> 
                     <th>UBICACION UNIDAD</th> 
                     
                     <th>PRECIO Bs</th>
                     <th>PRECIO Sus</th>
                     <th>ESTADO</th>
                     <th>REGIONAL ASIGNADA</th>
                     <th>SUCURSAL ASIGNADA</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    
                     <th></th> 
                     <th>NRO CONTRATO</th> 
                     <th>FECHA CONTRATO</th> 
                     <th>REGIONAL</th>
                     <th>SUCURSAL</th> 
                     <th>VENDEDOR</th>
                     <th>CLIENTE</th> 
                     <th>NIT</th>
                     <th>DIRECCION</th>
                     <th>TELEFONO</th>
                     <th>CELULAR</th>
                     <th>MARCA</th> 
                     <th>COD MODELO</th>
                     <th>MODELO</th>  
                     <th>COD MASTER</th>
                     <th>MASTER</th> 
                     <th>AÑO</th> 
                     <th>CHASSIS</th> 
                     <th>UBICACION UNIDAD</th> 
                     <th>PRECIO Bs</th>
                     <th>PRECIO Sus</th>
                     <th>ESTADO</th>
                     <th>REGIONAL ASIGNADA</th>
                     <th>SUCURSAL ASIGNADA</th>
                    </tr>
                  </tfoot>
                  
                  <tbody>
                  @foreach($detalle as $det)
                    <tr>
                     <td>{{$det->ITEM}}</td> 
                     <td>{{$det->NRO_CONTRATO}}</td> 
                      
                      <td><label class="text-success">{{date('d/m/Y',strtotime($det->FECHA_CONTRATO))}}</label></td>
                     
                      <td>{{$det->REGIONAL}}</td> 
                      <td>{{$det->SUCURSAL}}</td> 
                      <td>{{$det->VENDEDOR}}</td> 
                      <td>{{$det->CLIENTE}}</td> 
                      <td>{{$det->NIT}}</td> 
                      <td>{{$det->DIRECCION}}</td> 
                      <td>{{$det->telefono}}</td> 
                      <td>{{$det->CELULAR}}</td> 
                      <td>{{$det->MARCA}}</td>
                      <td>{{$det->COD_MODELO}}</td>
                      <td>{{$det->MODELO}}</td>
                      <td>{{$det->cod_master}}</td>
                      <td>{{$det->MASTER}}</td>
                      <td>{{$det->ANIO}}</td> 
                      <td><strong>{{$det->CHASIS}}</strong></td>
                      <td>{{$det->SUCURSAL_STOCK}}</td>
                       
                      
                      <td align="right"><label class="text-success">{{number_format($det->PRECIO,2, '.', ',')}}</label></td> 
                      <td align="right"><label class="text-primary">{{number_format($det->PRECIO,2, '.', ',')}}</label></td> 
                     
                      <td>{{$det->ESTADO}}</td> 
                      <td>{{$det->REG_ASIGNADA}}</td> 
                      <td>{{$det->SUC_ASIGNADA}}</td> 
                                        
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            </div>
           
         
       

    </div>
  </div>       


@endsection
@section('scripts')


<script>

$(document).ready(function() {
    $('#datatable1').DataTable( { "language": {
            
              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar en Todo:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              },
        },

        "bLengthChange" : false,
        
        
        // "dom": "Blfrtip",
        "dom": "Brti",
        
       "buttons": [ 'copy', 'excel'],

        // "lengthMenu": [[5,10, 25, 50, 100, -1], [5,10, 25, 50, 100, "TODO"]],
        "lengthMenu": [[-1], ["TODO"]],

        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select class ="filtro"><option value="">Todos...</option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );

             $('.filtro').select2();
        }
    } );

   $('.prueba').select2();

} );



</script> 
@endsection