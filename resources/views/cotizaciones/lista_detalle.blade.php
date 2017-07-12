@extends('layouts.main')

@section('content')


  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title">
          <h3>
            <a href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0'])}}">COTIZACIONES 2017 </a>
          </h3>
        </div>
         <div class="title_right"></div>
      </div>
      <div class="clearfix"></div>
      

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="title">
              <h2>COTIZACIONES <small>  </small></h2>

            </div>
          </div>
        </div>
       </div>
         <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_content animated fadeIn">
              <p class="text-muted font-13 m-b-30"></p>
              <div class="table-responsive" style="max-height: 410px; width: 100%; margin: 0; overflow-y: auto;">
                <table class="table table-striped jambo_table bulk_action">
                  <thead style="">
                    <tr>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     <th>CABECERA</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  @for($i = 1; $i<= 25; $i++)
                    <tr>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                     <td>sin dato</td>
                    </tr>
                    @endfor
                  </tbody>
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



</script>
@endsection