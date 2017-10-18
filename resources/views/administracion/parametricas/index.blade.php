@extends('layouts.main')

@section('content')

  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Parametrizacion</h3>
        </div>
        <div class="pull-right" >
          <a  href="#" class="btn btn-success btn_nuevo " data-toggle="tooltip" data-placement="bottom" title="Agregar nueva parametrica" ><i class="fa fa-plus"></i> Nuevo</a>
        </div>
         <div class="title_right"></div>
      </div>
      <div class="clearfix"></div>
        
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_content animated fadeIn">
              {{-- <p class="text-muted font-13 m-b-30"></p> --}}
              <div class="table-responsive" {{-- style="max-height: 450px; width: 100%; margin: 0; overflow-y: auto; --}}">
                <table class="table table-striped jambo_table bulk_action" id="datatable1">
                  <thead>
                    <tr>
                     <th>ID</th>
                     <th>TABLA</th>
                     <th>CODIGO</th>
                     <th>DESCRIPCION</th>
                     <th>OPCIONES</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>ID</th>
                     <th>TABLA</th>
                     <th>CODIGO</th>
                     <th>DESCRIPCION</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($detalle as $det)
                    <tr>
                     <td>{{$det->id}}</td>
                     <td>{{$det->tabla}}</td>
                     <td>{{$det->codigo}}</td> 
                     <td>{{$det->descripcion}}</td> 
                     <td>
                       <div class="btn-group" role="group" >
                          <a href="#" class="btn btn-warning btn-xs">
                            <span class="fa fa-edit"></span> 
                          </a>
                          <a href="#" class="btn btn-danger btn-xs">
                            <span class="fa fa-trash"></span> 
                          </a>
                        </div>
                      </td>        
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




<script type="text/javascript">

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