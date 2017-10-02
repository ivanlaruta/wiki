@extends('layouts.main')

@section('content')

<style type="text/css">


</style>

<div class="right_col" role="main">
  <div class="">
    
    <div class="row">
            <div class="page-title">
              <div class="title_left">
                <h3>Administracion</h3>
              </div>
            </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="col-xs-2" style="padding-right: 0px;">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="#home" data-toggle="tab">Vehiculos</a>
                        </li>
                        <li><a href="#modelos" data-toggle="tab">Modelos</a>
                        </li>
                        <li><a href="#masters" data-toggle="tab">Masters</a>
                        </li>
                        <li><a href="#colores" data-toggle="tab">Colores</a>
                        </li>
                        <li><a href="#ubica" data-toggle="tab">Ubicaciones</a>
                        </li>
                        <li><a href="#parametrica" data-toggle="tab">Parametrizacion</a>
                        </li>
                        
                      </ul>
                    </div>

                    <div class="col-xs-10" style="background: white;">
                      <!-- Tab panes -->
                      <div class="tab-content">

                        <div class="tab-pane active" id="home">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="lead">Lista de vehiculos usados.</p>
                          </div>
                          <div class="col-md-2 pull-right">
                           
                                {{-- <a data-toggle="modal" href="#Modal_nuevo" class="btn btn-success btn-sm btn_nuevo" data-toggle="tooltip" data-placement="bottom" title="Agregar nueva unidad" ><i class="fa fa-plus"></i> Nuevo</a> --}}

                                <a  href="#" class="btn btn-success btn-sm btn_nuevo" data-toggle="tooltip" data-placement="bottom" title="Agregar nueva unidad" ><i class="fa fa-plus"></i> Nuevo</a>

                                {{-- <a href="#" class=" btn btn-danger btn-round btn-xs btnEnviar animated shake" id_detalle = '{{ $dets -> id_detalle}}' id = '{{$id}}' data-toggle="tooltip" data-placement="bottom" title="Generar envio parcial"><i class="fa fa-sign-out"></i></a> --}}
                            
                          </div>
                        </div>
                          
                          
                          <div class="table-responsive">
                            <table id="datatable_vehiculos" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Chasis</th>
                                  <th>Año</th>
                                  <th>Marca</th>
                                  <th>Modelo</th>
                                  <th>Color</th>
                                  <th>Precio</th>
                                  <th>Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>MR2KT9F38F1117892</td>
                                  <td>2013</td>
                                  <td>TOYOTA</td>
                                  <td>RAV 4</td>
                                  <td>Negro</td>
                                  <td>$12,000</td>
                                  <td align="center">
                                  <div class="btn-group" role="group" >
                                    <a data-toggle="modal" href="#myModal" class="btn btn-info btn-xs">
                                      <span class="fa fa-eye"></span> 
                                    </a>
                                    <a href="#" class="btn btn-warning btn-xs">
                                      <span class="fa fa-edit"></span> 
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs">
                                      <span class="fa fa-trash"></span> 
                                    </a>
                                    </div>
                                  </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                  <div class="modal-dialog">
                                  
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Datos completos de unidad</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>Aqui toos los datos.</p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                    
                                  </div>
                                </div>

                              </tbody>
                            </table>
                          </div>


    <div class="modal fade mi_modal" id="Modal_nuevo" role="dialog" >
      <div class="modal-dialog modal-lg">
      
        <!-- Modal content-->
        <div class="modal-content contenido">
          
        </div>
        
      </div>
    </div>


                        </div>

                        <div class="tab-pane" id="modelos">Profile Tab.</div>
                        <div class="tab-pane" id="masters">Messages Tab.</div>
                        <div class="tab-pane" id="colores">Settings Tab.</div>
                        <div class="tab-pane" id="ubica">Messages Tab.</div>
                        <div class="tab-pane" id="parametrica">Settings Tab.</div>
                      </div>
                    </div>

                    <div class="clearfix"></div>

                  </div>

    </div>

  </div>
</div>

@endsection

@section('scripts')




<script type="text/javascript">
  
 $(document).ready(function() {


// $(".btn_nuevo").click(function() {
//      $('#wizard1').smartWizard();
// });



var btn_nuevo = $(".btn_nuevo");
btn_nuevo.on("click",function(){
  // alert($(this).attr('id'));
  frm_nuevo($(this));
});

var modalContent = $(".contenido");
var modal=$(".mi_modal");

var frm_nuevo = function(objeto){ 
  $.ajax({
    type: "GET",
    cache: false,
    dataType: "html",
    url: "{{ route('usados.modal_nuevo')}}",
   
    // beforeSend: function(xhr)
    // {
    //   NProgress.start();
    // },
    success: function(dataResult)
    {
      console.log(dataResult);
      modalContent.empty().html(dataResult);                        
      modal.modal('show');

      NProgress.done();
    },
    error: function(jqXHR, exception)
    {
      var msg = '';
      if (jqXHR.status === 0) {
          msg = 'Not connect.\n Verify Network.';
      } else if (jqXHR.status == 404) {
          msg = 'Requested page not found. [404]';
      } else if (jqXHR.status == 500) {
          msg = 'Internal Server Error [500].';
      } else if (exception === 'parsererror') {
          msg = 'Requested JSON parse failed.';
      } else if (exception === 'timeout') {
          msg = 'Time out error.';
      } else if (exception === 'abort') {
          msg = 'Ajax request aborted.';
      } else {
          msg = 'Uncaught Error.\n' + jqXHR.responseText;
      }

      alert(msg);
      NProgress.done();
    }
  });
}


  $('#datatable_vehiculos').DataTable( { "language": {
            
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
              },
        }
       
    } );

} );

</script>
@endsection