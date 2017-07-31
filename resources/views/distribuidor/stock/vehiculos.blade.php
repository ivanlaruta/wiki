@extends('layouts.main')

@section('content')
        
<div class="right_col" role="main">
    <div class="page-title">
      <div class="title">
        <h3>
          <a href="{{ route('vehiculos.stock',['vista'=>'ver_dist','ciudad'=>'DISTRIBUIDOR','pais'=>'TODOS'])}}"> STOCK  </a> 
        </h3>
      </div>
    </div>
    <br>
  
<hr>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="table">
        <table class="table table-striped jambo_table bulk_action" id="datatable1">
          <thead>
            <tr> 
              
              <th></th>
              <th>MARCA</th>
              <th>COD_MASTER</th>
              <th>MASTER</th>
              <th>COD MODELO</th>
              <th>MODELO</th>
              <th>AÑO</th>
              <th>COLOR EXTERNO</th>
              <th>COLOR INTERNO</th>
              <th>CHASSIS</th>
              <th>COD UBICACION</th>
              <th>UBICACION</th>
              <th>REGIONAL</th>
              <th>ESTADO</th>
              <th>LIBERADO</th>
              <th>NACIONALIZADO</th>
              <th>PAIS</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($v as $vs)
            <tr>                
              
              <td>{{ $vs -> ITEM}}</td>
              <td>{{ $vs -> MARCA}}</td>
              <td>{{ $vs -> COD_MASTER}}</td>
              <td>{{ $vs -> MASTER}}</td>
              <td>{{ $vs -> COD_MODELO}}</td>
              <td>{{ $vs -> MODELO}}</td>
              <td>{{ $vs -> ANIO_MOD}}</td>
              <td>{{ $vs -> COLOR_EXTERNO}}</td>
              <td>{{ $vs -> COLOR_INTERNO}}</td>
              <td><strong>{{ $vs -> CHASIS}}</strong></td>
              <td>{{ $vs -> COD_UBICACION}}</td>
              <td>{{ $vs -> UBICACION}}</td>
              <td>{{ $vs -> nom_localidad}}</td>
              <td>{{ $vs -> ESTADO}}</td>
              <td>{{ $vs -> LIBERADO}}</td>
              <td>{{ $vs -> NACIONALIZADO}}</td>
              <td>{{ $vs -> PAIS}}</td>
              
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

              
@endsection

@section('scripts')
<script>

    $(document).ready(function() {
         //alert('1');
        $('#datatable1').DataTable({
          
             "language": {
            
              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
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
              }

        },
            

        });
    });

</script> 
@endsection
