@extends('layouts.main')

@section('style')
@endsection

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Empresas / <small>AGENDA CRITICA</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Actividades</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a href="#" class="green btn_nuevo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Agregar nuevo"><i class="fa fa-plus fa-lg green animated tada infinite"></i></a>
              </li>
              
              <li><a>|</a>
              </li>
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Opciones 1</a>
                  </li>
                  <li><a href="#">Opciones 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            {{-- <p>Simple table with project listing with progress and editing options</p> --}}

            <table class="table table-striped projects">
              <thead>
                <tr>
                  <th style="width: 1%">#</th>
                  <th style="width: 25%">Tema</th>
                  <th style="width: 10%">Area</th>
                  <th style="width: 15%">Empresa</th>
                  <th style="width: 1%">Criticidad</th>
                  <th style="width: 10%">Responasbles</th>
                  <th style="width: 1%">Plazo</th>
                  <th style="width: 12%">Estado</th>
                  <th style="width: 12%">Contingencia</th>
                  <th style="width: 5%; text-align: right;">#Opciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>PAGO AFP</strong></a>
                    <br />
                    <small>Creado el 8/12/2017</small>
                  </td>
                  <td>
                    <span class="label label-default">ADM</span>
                    <span class="label label-default">LEGAL</span>
                  </td>
                  <td>
                    <span class="label label-primary">CONSARQ</span>
                  </td>
                  <td>
                    <span class="label label-success">Baja</span>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li style="padding-left: 0px; padding-right: 0px;">
                          <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alejandro Ballon"></a>
                      </li>
                      
                    </ul>
                  </td>
                  <td>
                    <a>13/12/2017</a>
                  </td>
                  <td class="project_progress">
                    <div class="progress progress_sm">
                      <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="100"></div>
                    </div>
                    <small>100% (TERMINADO)</small><br />
                    <small>Ultima actividad: 9/12/2017</small>
                  </td>
                  <td>
                    <small>detalle contingencia</small>
                  </td>
                  <td class=" pull-right">
                    <div class="btn-group">
                      <a href="{{ route('empresas.agendaDetalle') }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Abrir" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i></a>
                      <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>HORAS EXTRA</strong></a>
                    <br />
                    <small>Creado el 11/12/2017</small>
                  </td>
                  <td>
                    <span class="label label-default">RRHH</span>
                    <span class="label label-default">LEGAL</span>
                  </td>
                  <td>
                    <span class="label label-primary">TOYOSA</span>
                    <span class="label label-primary">TOYOTA</span>
                    <span class="label label-primary">CROWN</span>
                  </td>
                  <td>
                    <span class="label label-danger">Alta</span>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li style="padding-left: 0px; padding-right: 0px;">
                          <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bernardo Akamine"></a>
                      </li>
                      <li style="padding-left: 0px; padding-right: 0px;">
                          <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sergio Jimenez"></a>
                      </li>
                    </ul>
                  </td>
                  <td>
                    <a>13/12/2017</a>
                  </td>
                  <td class="project_progress">
                    <div class="progress progress_sm">
                      <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="57"></div>
                    </div>
                    <small>57% (EN PROCESO)</small><br />
                    <small>Ultima actividad: 11/12/2017</small>
                  </td>
                  <td>
                    <small>detalle contingencia</small>
                  </td>
                  <td class=" pull-right">
                    <div class="btn-group">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Abrir" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i></a>
                      <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>POLITICA DE LIQUIDACIÓN DE STOCK DE REPUESTOS SIN MOVIMIENTO</strong></a>
                    <br />
                    <small>Creado el 12/12/2017</small>
                  </td>
                  <td>
                    <span class="label label-default">FINANZAS</span>
                    <span class="label label-default">MARKETING</span>
                  </td>
                  <td>
                    <span class="label label-primary">TOYOSA</span>
                  </td>
                  <td>
                    <span class="label label-warning">Media</span>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li style="padding-left: 0px; padding-right: 0px;">
                          <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alejandro Ballon"></a>
                      </li>
                      <li style="padding-left: 0px; padding-right: 0px;">
                          <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Miroslava Raljevic"></a>
                      </li>
                    </ul>
                  </td>
                  <td>
                    <a>15/12/2017</a>
                  </td>
                  <td class="project_progress">
                    <div class="progress progress_sm">
                      <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="10"></div>
                    </div>
                    <small>0% (SIN PROCESO)</small><br />
                    <small>Ultima actividad: sin actividad</small>
                  </td>
                  <td>
                    <small>detalle contingencia</small>
                  </td>
                  <td class=" pull-right">
                    <div class="btn-group">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Abrir" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i></a>
                      <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                    </div>
                  </td>
                </tr>


              </tbody>
            </table>
            <!-- end project list -->

            <div class="modal fade modal_add" id="Modal_nuevo" role="dialog" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content contenido_add">
                </div>
              </div>
            </div>

            <!-- end project list -->
      
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

@section('scripts')
<script>

  var btn_nuevo = $(".btn_nuevo");

  btn_nuevo.on("click",function(){
    frm_nuevo($(this));
  });

  var modal=$(".modal_add");
  var modalContent = $(".contenido_add");

  var frm_nuevo = function(objeto){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('empresas.agendaModalNuevo')}}",
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

</script> 
@endsection