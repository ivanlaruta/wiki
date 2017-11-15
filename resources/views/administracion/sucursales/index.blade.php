@extends('layouts.main')

@section('content')

  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Sucursales</h3>
        </div>
        
         <div class="title_right"></div>
      </div>
      <div class="clearfix"></div>
        
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_content animated fadeIn"> 
              <div class="table-responsive" >
                <table class="table table-striped jambo_table bulk_action" id="datatable1">
                  <thead>
                    <tr>
                     <th>#</th>
                     <th>ID</th>
                     <th>NOMBRE</th>
                     <th>REGIONAL</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>#</th>
                     <th>ID</th>
                     <th>NOMBRE</th>
                     <th>REGIONAL</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($detalle as $det)
                    <tr>
                     <td>{{$det->ITEM}}</td>
                     <td>{{$det->id}}</td>
                     <td>{{$det->nom_sucursal}}</td>
                     <td>{{$det->regional}}</td> 
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