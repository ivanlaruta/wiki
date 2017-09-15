@extends('layouts.main')

@section('content')

<style type="text/css">


</style>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><a href="{{ route('usados.index')}}">VEHICULOS USADOS</a></h3>
              </div>
             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <!-- form input knob -->
              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Filtros</h2>
                    
                      <div class="pull-right" >
                         <a href="#" class="btn btn-success btn-sm" >
                          <span class="fa fa-arrow-circle-right"  ></span> <small> BUSCAR</small>
                        </a>
                      </div>
                      <div class="clearfix" ></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-12">
                      <div class="row">
                        <p>TIPO DE VEHICULO</p>
                        <br>
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" checked="checked" /> INO
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" checked="checked" /> VEHICULOS
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" checked="checked" /> VOLVO
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" checked="checked" /> YAMAHA
                            </label>
                          </div>
                          {{-- <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" checked="checked" /> Disabled Checked
                            </label>
                          </div> --}}
                      </div>
                      <hr>
                      <div class="row">
                        <p>AÑO MODELO</p>
                        <br>
                          <div class="">
                            <label >
                              Entre : <input type="number" style="width: 90px;" value="2013" min="2013" max="2018" /> 
                              Y : <input type="number" style="width: 90px;" value="2018" min="2013" max="2018" /> 
                            </label>
                          </div>
                      </div>
                      <hr>
                      <div class="row">
                        <p>PRECIO ($us)</p>
                        <br>
                          <div class="">
                            <label >
                              Entre : <input type="number" style="width: 90px;" value="23000" min="23000" max="105000"/> 
                              Y : <input type="number" style="width: 90px;" value="105000" min="23000" max="105000"/> 
                            </label>
                          </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
           
              <div class="col-md-8">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Resultado de busqueda (105)</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @for ($i = 0; $i < 105; $i++)
                    <div class="col-md-3">
                      <div class="thumbnail" style="height: 200px;">
                        <div class="image view view-first">
                          {{-- <img src="/images/media.jpg"> --}}
                          {{-- <img src="{{ asset('images/1.jpg') }}" alt="image" style="width: 100%; display: block;"> --}}
                          <img style="width: 100%; " src="{{ asset('images/1.jpg') }}" alt="image" />
                          {{-- <img src="images/media.jpg" alt="image" style="width: 100%; display: block;" /> --}}
                        </div>
                        <div class="caption" align="center">
                          <p>Hilux 2016</p>
                          <a href="{{route('usados.create')}}">Ver detalle <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                    </div>
                    @endfor
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