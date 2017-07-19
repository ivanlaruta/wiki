@extends('layouts.main')

@section('content')


  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title">
          <h3>

        <a href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}">COTIZACIONES {{date ("Y")}} </a>  / BUSQUEDA

        </h3>
        </div>
         <div class="title_right"></div>
      </div>
      <div class="clearfix"></div>
      

      {{-- <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="title">
              <h2>OPCIONES DE BUSQUEDA <small>  </small></h2>

            </div>
          </div>
        </div>
       </div> --}}
         <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_content animated fadeIn">

                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Seleccion <small> </small></h2>
                     
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div class="">
                        <ul class="to_do">
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Nro cotizacion </p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Fecha Cotizacion </p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Regional</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Sucursal</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Vendedor</p>
                          </li>
                           <li>
                            <p>
                              <input type="checkbox" class="flat"> Cliente</p>
                          </li>

                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Chassis </p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Master</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Modelo</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Marca</p>
                          </li>
                          
                         
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              
            

                <div class="col-md-8 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Opciones de busqueda <small> </small></h2>
                     
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nro cotizacion </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('nro_cotizacion', null,['class'=> 'form-control'])!!}
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Fecha</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" style="width: 100%" name="reservation" id="reservation" class="form-control" />
                        </div>
                      </div>
                   

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Regional </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('regional', null,['class'=> 'form-control'])!!}
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Sucursal </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('sucursal', null,['class'=> 'form-control'])!!}
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Vendedor </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('vendedor', null,['class'=> 'form-control'])!!}
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Cliente </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('cliente', null,['class'=> 'form-control'])!!}
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Chassis </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('chassis', null,['class'=> 'form-control'])!!}
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Master </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('master', null,['class'=> 'form-control'])!!}
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Modelo </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('modelo', null,['class'=> 'form-control'])!!}
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Marca </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('marca', null,['class'=> 'form-control'])!!}
                        </div>
                      </div>
                
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancelar</button>
                          
                          <button type="submit" class="btn btn-success">Buscar</button>
                        </div>
                      </div>

                    </form>
                  
                      
                    </div>
                  </div>
                </div>
              
            </div>
            </div>
            </div>
             </div>
  </div>       


@endsection
@section('scripts')

<!-- bcheck -->
<script src="{{asset('bower_components/gentelella/vendors/iCheck/icheck.min.js')}}"></script>

<!-- bootstrap-daterangepicker -->
<script src="{{asset('bower_components/gentelella/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('bower_components/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Ion.RangeSlider -->
<script src="{{asset('bower_components/gentelella/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>


<script type="text/javascript">

</script>
@endsection