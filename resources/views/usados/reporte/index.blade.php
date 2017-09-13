@extends('layouts.main')

@section('content')

<style type="text/css">


</style>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form advanced</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <!-- form input knob -->
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Filtros</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3">
                      <p>TIPO DE VEHICULO</p>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" class="flat"> Camioneta
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" class="flat"> vechiculo
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" class="flat"> camion
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" class="flat"> Motocicleta
                          </label>
                        </div>
                      </div>
                    </div>

                   <div class="col-md-3">
                      <p>AÑO MODELO</p>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" class="flat"> 2015
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" class="flat"> 2016
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" class="flat"> 2017
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" class="flat"> 2018
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <p>PRECIO</p>
                      <input type="text" id="example_id" name="example_name" value="" />
                    </div>
                    <div class="clearfix"></div>
                   
                    <hr>
                    <div class="col-md-12" align="center" style="align-content: center;">
                      <a href="#"><span class="btn btn-default"> BUSCAR</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Resultado de busqueda</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="table-responsive">
                        <table class=" table table-striped">
                          <tr>
                            <th>Tipo vehiculo</th>
                            <th>Año modelo</th>
                            <th>Precio</th>
                          </tr>
                          <tr>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                          </tr>
                          <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                          </tr>
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
  
  $('.select').select2();


$("#example_id").ionRangeSlider({
    type: "double",
    grid: true,
    min: 0,
    max: 1000,
    from: 0,
    to: 1000,
    prefix: "$ "
});
</script>
@endsection