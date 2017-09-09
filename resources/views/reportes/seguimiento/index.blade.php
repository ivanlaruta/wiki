@extends('layouts.main')

@section('content')

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>SEGUIMIENTO DE UNIDADES</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> <small>BUSQUEDA</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left">
                      <div class="form-group">
                        {!! Form::open (['route' => 'seguimiento.index','method' => 'GET'])!!}
                        <div class="col-lg-6 col-lg-offset-3">
                          <div class="input-group">
                            <input type="text" name="chassis" id="chassis" class="form-control" placeholder="Ingrese chassis" autofocus value={{$chassis}} >
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-primary">Buscar!</button>
                            </span>
                          </div>
                        </div>
                        {!! Form::close()!!}
                      </div>
                    </form>
                  </div>
                </div>
              </div>


              @if(!empty($chassis))
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> <small>RESULTADO DE LA BUSQUEDA</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="" class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>MARCA</th>
                          <th>MODELO</th>
                          <th>MASTER</th>
                          <th>CHASSIS</th>
                          <th>OPERACIONES</th>
                          <th>OPCIONES</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($resultado as $res)
                      <tr>
    
                        <td>{{$res->ITEM}}</td> 
                        <td>{{$res->MARCA}}</td> 
                        <td>{{$res->MODELO}}</td> 
                        <td>{{$res->MASTER}}</td> 
                        <td>{{$res->CHASSIS}}</td> 
                        <td>
                          @if($res->COTIZACION>0)
                            <span class="label label-primary">COTIZACION<i class="fa fa-check"></i></span>
                          @endif
                          @if($res->RESERVA>0)
                            <span class="label label-primary">RESERVA<i class="fa fa-check"></i></span>
                          @endif
                          @if($res->CONTRATO>0)
                            <span class="label label-primary">CONTRATO<i class="fa fa-check"></i></span>
                          @endif
                          
                          @if($res->ADENDA>0 && $res->CONTRATO==0 )
                          <span class="label label-primary">CONTRATO ANULADO<i class="fa fa-check"></i></span>
                            <span class="label label-primary">ADENDA<i class="fa fa-check"></i></span>
                          @endif
                          @if($res->FACTURA>0)
                            <span class="label label-primary">FACTURA<i class="fa fa-check"></i></span>
                          @endif
                          @if($res->ENTREGA>0)
                            <span class="label label-primary">NOTA DE ENTREGA<i class="fa fa-check"></i></span>
                          @endif
                        </td>

                        <td><a href="{{ route('seguimiento.show',['id'=>str_replace("/", "_", $res->CHASSIS)])}}" class="btn btn-round btn-success btn-sm"> Ver detalle</a></td> 
                                            
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              @endif

          </div>
        </div>
          <div class="clearfix"></div>
        </div>
        



@endsection

@section('scripts')

<script type="text/javascript">

</script>
@endsection