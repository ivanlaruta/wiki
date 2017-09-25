@extends('layouts.main')

@section('content')

<style type="text/css">


</style>

<div class="right_col" role="main">

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><a href="{{ route('usados.index')}}">VEHICULOS USADOS</a></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Datos de la unidad</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="product-image" >
                        <img style="width: 100%;" id="imgGaleria" src="{{ asset('images/1.jpg') }}"  />
                      </div>
                      <div class="product_gallery">
                        <a>
                          <img  src="{{ asset('images/1.jpg') }}" onclick="javascript:document.getElementById('imgGaleria').src='{{ asset('images/1.jpg') }}';" />
                        </a>
                        <a>
                          <img  src="{{ asset('images/2.png') }}" onclick="javascript:document.getElementById('imgGaleria').src='{{ asset('images/2.png') }}';" />
                        </a>
                        <a>
                          <img  src="{{ asset('images/3.jpg') }}" onclick="javascript:document.getElementById('imgGaleria').src='{{ asset('images/3.jpg') }}';" />
                        </a>
                        <a>
                          <img  src="{{ asset('images/4.jpg') }}" onclick="javascript:document.getElementById('imgGaleria').src='{{ asset('images/4.jpg') }}';" />
                        </a>
                      </div>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <div class="">
                          <h1 class="price">$ 35000</h1>
                      </div>

                    <!-- start accordion -->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style=" background: #2a3f54; color: #fff">
                          <h4 class="panel-title" >INFORMACION DEL VEHICULO</h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <div class="">
                              <ul class="to_do">
                                <li class="row">                          
                                    <div class="col-md-4"> <strong>CHASSIS:</strong></div>
                                    <div class="col-md-8"> 8AJFX8CDXJ1967261</div>
                                </li>
                                <li class="row">                          
                                    <div class="col-md-4"> <strong>MODELO:</strong></div>
                                    <div class="col-md-8"> HILUX TASA DC 2.700 4X4</div>                            
                                </li>
                                <li class="row">                          
                                    <div class="col-md-4"> <strong>MASTER:</strong></div>
                                    <div class="col-md-8"> 66211-B0(EM) HILUX TASA INTERMEDIO DC 2.700 4X4</div>
                                </li>
                                <li class="row">                          
                                    <div class="col-md-4"> <strong>COLOR:</strong></div>
                                    <div class="col-md-8"> 040 SUPER BLANCO 2</div>
                                </li>
                                <li class="row">                          
                                    <div class="col-md-4"> <strong>AÑO:</strong></div>
                                    <div class="col-md-8"> 2018</div>
                                </li>  
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingDos" data-toggle="collapse" data-parent="#accordion" href="#collapseDos" aria-expanded="false" aria-controls="collapseDos" style=" background: #2a3f54; color: #fff">
                          <h4 class="panel-title">CHASIS Y SUSPENSION</h4>
                        </a>
                        <div id="collapseDos" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingDos">
                          <div class="panel-body">
                            <ul class="to_do">
                              <li class="row">                          
                                  <div class="col-md-7"> <strong>TIPO TRACCION:</strong></div>
                                  <div class="col-md-5">  </div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-7"> <strong>TRACCION:</strong></div>
                                  <div class="col-md-5"> 4X4</div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-7"> <strong>CANTIDAD DE PUERTAS:</strong></div>
                                  <div class="col-md-5"> 4</div>                            
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTres" data-toggle="collapse" data-parent="#accordion" href="#collapseTres" aria-expanded="false" aria-controls="collapseTres" style=" background: #2a3f54; color: #fff">
                          <h4 class="panel-title">SEGURIDAD</h4>
                        </a>
                        <div id="collapseTres" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTres">
                          <div class="panel-body">
                            <ul class="to_do">
                              <li class="row">                          
                                  <div class="col-md-8"> <strong>SISTEMA DE FRENOS:</strong></div>
                                  <div class="col-md-4"> ABS </div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-8"> <strong>AIRBAGS:</strong></div>
                                  <div class="col-md-4"> 0</div>                            
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingCuatro" data-toggle="collapse" data-parent="#accordion" href="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro" style=" background: #2a3f54; color: #fff">
                          <h4 class="panel-title">EQUIPAMIENTO</h4>
                        </a>
                        <div id="collapseCuatro" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCuatro">
                          <div class="panel-body">
                            <ul class="to_do">
                              <li class="row">                          
                                  <div class="col-md-6"> <strong>TECHO SOLAR:</strong></div>
                                  <div class="col-md-6">   </div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-6"> <strong>AROS:</strong></div>
                                  <div class="col-md-6"> 17 ACERO</div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-6"> <strong>AIRE ACONDICIONADO:</strong></div>
                                  <div class="col-md-6"> SI</div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-6"> <strong>MATERIAL DE ASIENTOS:</strong></div>
                                  <div class="col-md-6"> TELA</div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-6"> <strong>FAROS ANTINIEBLA:</strong></div>
                                  <div class="col-md-6"> </div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-6"> <strong>DVD:</strong></div>
                                  <div class="col-md-6"> </div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-6"> <strong>RADIO:</strong></div>
                                  <div class="col-md-6"> AM/FM/CD/MP3+USB</div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-6"> <strong>PISOS:</strong></div>
                                  <div class="col-md-6"> </div>                            
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingCinco" data-toggle="collapse" data-parent="#accordion" href="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco" style=" background: #2a3f54; color: #fff">
                          <h4 class="panel-title">DIMENSIONES, PESO, CAPACIDADES</h4>
                        </a>
                        <div id="collapseCinco" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCinco">
                          <div class="panel-body">
                            <ul class="to_do">
                              <li class="row">                          
                                  <div class="col-md-7"> <strong>TOTAL LONGITUD mm:</strong></div>
                                  <div class="col-md-5"> 5350</div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-7"> <strong>TOTAL ANCHO mm:</strong></div>
                                  <div class="col-md-5"> 1800</div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-7"> <strong>TOTAL ALTURA mm:</strong></div>
                                  <div class="col-md-5"> SI</div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-7"> <strong>MATERIAL DE ASIENTOS:</strong></div>
                                  <div class="col-md-5"> 18.15</div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-7"> <strong>CAPACIDAD DE CARGA:</strong></div>
                                  <div class="col-md-5"> 0</div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-7"> <strong>CAPACIDAD DE DEPOSITO DE COMBUSTIBLE lts:</strong></div>
                                  <div class="col-md-5"> 80</div>                            
                              </li>
                              <li class="row">                          
                                  <div class="col-md-7"> <strong>CAPACIDAD DE ASIENTOS:</strong></div>
                                  <div class="col-md-5"> 0</div>                            
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingSeis" data-toggle="collapse" data-parent="#accordion" href="#collapseSeis" aria-expanded="false" aria-controls="collapseSeis" style=" background: #2a3f54; color: #fff">
                          <h4 class="panel-title">OBSERVACIONES</h4>
                        </a>
                        <div id="collapseSeis" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeis">
                          <div class="panel-body">
                            <div class="">
                              <p>Esta unidad fue utilizada para test drive.</p>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!-- end of accordion -->
                    </div>
                    <div class="col-md-12">       
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('scripts')




<script type="text/javascript">
  
  
</script>
@endsection