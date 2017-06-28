@extends('layouts.login')

@section('content')

              <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

              <h1>Inicio de sesión</h1>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                    <div >
                       
                        <input id="usuario" type="text" id="first-name" class="form-control" name="usuario" value="{{ old('usuario') }}" placeholder="Usuario" required autofocus>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        @if ($errors->has('usuario'))
                            <span class="help-block">
                                <strong>{{ $errors->first('usuario') }}</strong>
                            </span>
                        @endif
                    </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                    <div>
                       
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
              </div>

              <div>
                <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i> Ingresar
                </button>
                <button  class="btn btn-dark">
                             Cancelar <i class="fa fa-btn fa-sign-out"  ></i>
                        </button>
              </div>


              <div class="clearfix"></div>

              <div class="separator">
                

                <div class="clearfix"></div>
                <br />

                <div>
                <h1><i class="fa fa-cog fa-spin"></i> VENTAS E INVENTARIOS</h1>
                
                  <p>©2017 Todos los derechos reservados.TOYOSA S.A. </p>
                </div>
              </div>
            </form>                       
@endsection
