@extends('layouts.main')

@section('content')



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
                        <li><a href="#marcas" data-toggle="tab">Marcas</a>
                        </li>
                        <li><a href="#modelos" data-toggle="tab">Modelos</a>
                        </li>
                        <li><a href="#masters" data-toggle="tab">Masters</a>
                        </li>
                        <li><a href="#colores" data-toggle="tab">Colores</a>
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
                              <div class="modal-content contenido">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="marcas">
                          <div class="row">
                            <div class="col-md-10">
                              <p class="lead">Lista de marcas.</p>
                            </div>
                            <div class="col-md-2 pull-right">
                                  <a  href="#" class="btn btn-success btn-sm btn_nuevo_marca" data-toggle="tooltip" data-placement="bottom" title="Agregar nueva marca" ><i class="fa fa-plus"></i> Nuevo</a>
                            </div>
                          </div>
                          <div class="table-responsive">
                            <table id="datatable_marcas" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Codigo</th>
                                  <th>Marca</th>
                                  <th>Estado</th>
                                  <th>Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>T</td>
                                  <td>TOYOTA</td>
                                  <td>ACTIVO</td>
                                  <td align="center">
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

                              </tbody>
                            </table>
                          </div>
                         <div class="modal fade mi_modal_marca" id="Modal_nuevo_marca" role="dialog" >
                            <div class="modal-dialog">
                              <div class="modal-content contenido_marca">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="modelos">
                          <div class="row">
                            <div class="col-md-10">
                              <p class="lead">Lista de Modelos.</p>
                            </div>
                            <div class="col-md-2 pull-right">
                                  <a  href="#" class="btn btn-success btn-sm btn_nuevo_modelo" data-toggle="tooltip" data-placement="bottom" title="Agregar nuevo modelo" ><i class="fa fa-plus"></i> Nuevo</a>
                            </div>
                          </div>
                          <div class="table-responsive">
                            <table id="datatable_modelos" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Codigo</th>
                                  <th>Modelo</th>
                                  <th>Estado</th>
                                  <th>Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>TGN126L-DTMXKF</td>
                                  <td>HILUX DC 2700 cc 4x4</td>
                                  <td>ACTIVO</td>
                                  <td align="center">
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
                              </tbody>
                            </table>
                          </div>
                         <div class="modal fade mi_modal_modelo" id="Modal_nuevo_modelo" role="dialog" >
                            <div class="modal-dialog">
                              <div class="modal-content contenido_modelo">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="masters">

                          <div class="row">
                            <div class="col-md-10">
                              <p class="lead">Lista de Masters.</p>
                            </div>
                            <div class="col-md-2 pull-right">
                                  <a  href="#" class="btn btn-success btn-sm btn_nuevo_master" data-toggle="tooltip" data-placement="bottom" title="Agregar nuevo master" ><i class="fa fa-plus"></i> Nuevo</a>
                            </div>
                          </div>
                          <div class="table-responsive">
                            <table id="datatable_masters" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Codigo</th>
                                  <th>Master</th>
                                  <th>Estado</th>
                                  <th>Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>27551-A0</td>
                                  <td>27551-A0</td>
                                  <td>ACTIVO</td>
                                  <td align="center">
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

                              </tbody>
                            </table>
                          </div>
                         <div class="modal fade mi_modal_master" id="Modal_nuevo_master" role="dialog" >
                            <div class="modal-dialog">
                              <div class="modal-content contenido_master">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="colores">
                          <div class="row">
                            <div class="col-md-10">
                              <p class="lead">Lista de Colores.</p>
                            </div>
                            <div class="col-md-2 pull-right">
                                  <a  href="#" class="btn btn-success btn-sm btn_nuevo_colores" data-toggle="tooltip" data-placement="bottom" title="Agregar nuevo color" ><i class="fa fa-plus"></i> Nuevo</a>
                            </div>
                          </div>
                          <div class="table-responsive">
                            <table id="datatable_colores" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Codigo</th>
                                  <th>Color</th>
                                  <th>Estado</th>
                                  <th>Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>010</td>
                                  <td>PLATA METAL</td>
                                  <td>ACTIVO</td>
                                  <td align="center">
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
                              </tbody>
                            </table>
                          </div>
                          <div class="modal fade mi_modal_colores" id="Modal_nuevo_colores" role="dialog" >
                            <div class="modal-dialog">
                              <div class="modal-content contenido_colores">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="parametrica">
                          <div class="row">
                            <div class="col-md-10">
                              <p class="lead">Lista de parametros</p>
                            </div>
                            <div class="col-md-2 pull-right">
                                <a  href="#" class="btn btn-success btn-sm btn_nuevo_parametrica" data-toggle="tooltip" data-placement="bottom" title="Agregar nuevo color" ><i class="fa fa-plus"></i> Nuevo</a>
                            </div>
                          </div>
                          <div class="table-responsive">
                            <table id="datatable_parametrica" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Tabla</th>
                                  <th>Campo</th>
                                  <th>Codigo</th>
                                  <th>Valor</th>
                                  <th>Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>TRACCION</td>
                                  <td>DESCRIPCION</td>
                                  <td>DOBLE</td>
                                  <td>ACTIVO</td>
                                  <td align="center">
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
                              </tbody>
                            </table>
                          </div>
                          <div class="modal fade mi_modal_parametrica" id="Modal_nuevo_parametrica" role="dialog" >
                            <div class="modal-dialog">
                              <div class="modal-content contenido_parametrica">
                              </div>
                            </div>
                          </div>
                        </div>
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

  var btn_nuevo = $(".btn_nuevo");
  btn_nuevo.on("click",function(){
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


  var btn_nuevo_marca = $(".btn_nuevo_marca");
  btn_nuevo_marca.on("click",function(){
    frm_nuevo_marca($(this));
  });

  var modalContent_marca = $(".contenido_marca");
  var modal_marca=$(".mi_modal_marca");

  var frm_nuevo_marca = function(objeto){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('usados.modal_nuevo_marca')}}",
     
      success: function(dataResult)
      {
        console.log(dataResult);
        modalContent_marca.empty().html(dataResult);                        
        modal_marca.modal('show');
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


  var btn_nuevo_modelo = $(".btn_nuevo_modelo");
  btn_nuevo_modelo.on("click",function(){
    frm_nuevo_modelo($(this));
  });

  var modalContent_modelo = $(".contenido_modelo");
  var modal_modelo=$(".mi_modal_modelo");

  var frm_nuevo_modelo = function(objeto){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('usados.modal_nuevo_modelo')}}",
     
      success: function(dataResult)
      {
        console.log(dataResult);
        modalContent_modelo.empty().html(dataResult);                        
        modal_modelo.modal('show');
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



  var btn_nuevo_master  = $(".btn_nuevo_master");
  btn_nuevo_master.on("click",function(){
    frm_nuevo_master($(this));
  });

  var modalContent_master = $(".contenido_master");
  var modal_master=$(".mi_modal_master");

  var frm_nuevo_master = function(objeto){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('usados.modal_nuevo_master')}}",
     
      success: function(dataResult)
      {
        console.log(dataResult);
        modalContent_master.empty().html(dataResult);                        
        modal_master.modal('show');
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


  var btn_nuevo_colores  = $(".btn_nuevo_colores");
  btn_nuevo_colores.on("click",function(){
    frm_nuevo_colores($(this));
  });

  var modalContent_colores = $(".contenido_colores");
  var modal_colores=$(".mi_modal_colores");

  var frm_nuevo_colores = function(objeto){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('usados.modal_nuevo_color')}}",
     
      success: function(dataResult)
      {
        console.log(dataResult);
        modalContent_colores.empty().html(dataResult);                        
        modal_colores.modal('show');
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


  var btn_nuevo_parametrica  = $(".btn_nuevo_parametrica");
  btn_nuevo_parametrica.on("click",function(){
    frm_nuevo_parametrica($(this));
  });

  var modalContent_parametrica = $(".contenido_parametrica");
  var modal_parametrica=$(".mi_modal_parametrica");

  var frm_nuevo_parametrica = function(objeto){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('usados.modal_nuevo_parametrica')}}",
     
      success: function(dataResult)
      {
        console.log(dataResult);
        modalContent_parametrica.empty().html(dataResult);                        
        modal_parametrica.modal('show');
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


  var esp = {
              
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
          };

    $('#datatable_vehiculos').DataTable( { "language": esp } );
    $('#datatable_marcas').DataTable( { "language": esp } );
    $('#datatable_modelos').DataTable( { "language": esp } );
    $('#datatable_masters').DataTable( { "language": esp } );
    $('#datatable_colores').DataTable( { "language": esp } );
    $('#datatable_parametrica').DataTable( { "language": esp } );

} );

</script>
@endsection