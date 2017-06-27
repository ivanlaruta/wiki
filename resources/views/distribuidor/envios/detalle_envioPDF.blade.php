
@extends('layouts.reporte')
@section('content')
  
      <div>
        <div class="tituloRep">
          NOTA DE ENVIO N° {{$envio->id_envio}}
        </div>
        <div class="filtro">
          DERIVADO DE LA SOLICITUD N° {{$envio->id_solicitud}}
        </div>
        <div class="filtro">
          APROBADO EL {{date('d-m-Y',strtotime($solicitud->fecha_aprobado))}}
        </div>
      </div>

<hr style="color: #000;background-color: #000; height: 2px;">

<div class="row">
  <div class="col-4">
    <label>FECHA ENVIO: </label><label class="text-det"> {{date('d-m-Y',strtotime($envio->fecha_envio))}}</label>
    </div>
  <div class="col-4">
    <label>FECHA EST. ARRIBO: </label><label class="text-det"> {{date('d-m-Y',strtotime($envio->fecha_estimada_arribo))}}</label>
  </div>
  <div class="col-4">
    
  </div>
</div>

<div class="row">
  <div class="col-4">
    <label>ORIGEN: </label><label class="text-det">{{$envio->origen}}</label>
  </div>
  <div class="col-4">
    <label>DESTINO: </label><label class="text-det">{{$envio->destino}}</label>
  </div>
  <div class="col-4">
    <label>RESPONSABLE: </label><label class="text-det">{{$envio->responsable1->nombre}} {{$envio->responsable1->paterno}}</label>
  </div>
</div>
<div class="row">
  <div class="col-4">
    <label>TRANSPORTADORA:  </label><label class="text-det">{{$envio->transportadora1->nombre}}</label>
  </div>
  <div class="col-4">
    <label>CONDUCTOR:  </label><label class="text-det">{{$envio->conductor1->nombre}} {{$envio->conductor1->paterno}}</label>
  </div>
  <div class="col-4">
    <label>PLACA:  </label><label class="text-det">{{$envio->placa}}</label>
  </div>
</div>

<div class="row">
  
  <div class="col-12">
    <label>OBSERVACION:  </label><label class="text-det">{{$envio->observaciones}}</label>   
  </div>
</div>

<hr style="color: #000;background-color: #000; height: 2px;">
 
<div class="row">
 <label> LISTA DE UNIDADES: </label> <br>
<div class="table-responsive" align="center">
      <table class="table ">
       
        <thead>
          <tr>
             <th>#</th>
                <th>MARCA</th>
                <th>MODELO</th>
                <th>MASTER</th>
                <th>AÑO</th>
                <th>COLOR EXTERIOR</th>
                <th>COLOR INTERIOR</th>
                <th>CHASSIS</th>
                <th>SALIDA CB</th>
          </tr>
        </thead>
        <tbody>
          @foreach($unidades as $uni)
         <tr> 
              <td>{{ $uni -> ITEM }}</td>
              <td>{{ $uni -> vehiculo -> MARCA  }}</td>
              <td>{{ $uni -> vehiculo -> COD_MODELO }} -- {{ $uni -> vehiculo -> MODELO  }}</td>
              <td>{{ $uni -> vehiculo -> COD_MASTER }} -- {{ $uni -> vehiculo -> MASTER  }}</td>
              <td>{{ $uni -> vehiculo -> ANIO_MOD }}</td>
              <td>{{ $uni -> vehiculo -> COLOR_EXTERNO  }}</td>
              <td>{{ $uni -> vehiculo -> COLOR_INTERNO  }}</td>
              <td>{{ $uni -> chassis }}</td>
                          
            <td>
            @if($uni -> salida_cb == 1) 
              SI
            @else
              NO
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
<hr style="border: 1px dashed black;" />
<br>
<br>
<hr style="color: #000;background-color: #000; height: 2px;">
<div class="row">
 <label> LISTA RESUMEN: </label> <br>
<div class="table-responsive" align="center">

      <table>
        <thead>
          <tr>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>MASTER</th>
            <th>AÑO</th>
            <th>COLOR EXTERIOR</th>
            <th>CANTIDAD</th>
          </tr>
        </thead>
        <tbody>
          @foreach($resumen as $res)
            @if ($res -> cantidad <> 0)
            <tr> 
              <td>{{$res->marca->MARCA}}</td>
              <td>{{$res->cod_modelo}} -- {{ $res -> modelo -> MODELO}}</td>
              <td>{{$res->cod_master}} -- {{ $res -> master -> MASTER}}</td>
              <td>{{$res -> anio }}</td>
              <td>{{$res -> col_ext }}</td>
              <td>{{$res -> cantidad}}</td>
            </tr>
            @endif
          @endforeach
        </tbody>
      </table>
      <br>

      <hr style="border: 1px dashed black;" />
      <H5 style=" text-align: right; ">Total Unidades: {{$total}}</H5>
  </div>
</div>

<hr style="color: #000;background-color: #000; height: 2px;">
    <br>
    <br>

    <hr  width="20%" align="center""/>
    <h5>ENVIO CONFORME</h5></label> 
    <h5>{{$envio->responsable1->nombre}} {{$envio->responsable1->paterno}}</h5></label>
    <h5>CI: {{$envio->responsable1->ci}} {{$envio->responsable1->ex}}</h5></label>

    

@endsection
