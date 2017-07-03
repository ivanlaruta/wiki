<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
  </button>
  <h4 class="modal-title" id="myModalLabel">Envio Parcial de unidades</h4>
</div>

{!! Form::open(array('route' => ['envios.enviar_parcial'], 'method' => 'get' , 'id'=>'loginForm')) !!}

<input id="id" name="id" type="hidden" value="{{$det->id_solicitud}}">
<input id="id_detalle" name="id_detalle" type="hidden" value="{{ $det->id_detalle }}">

<div class="modal-body">
	<div class=" row">
		<div class="col-md-12" >
			
			<div class="col-md-12">
				<div class="form-group">
				    <label class="control-label col-md-6" >Aprobados: </label>
				    <div class="col-md-6">
				    	{{$det->cantidad_aprobada}}
				    </div>
	 			</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
				    <label class="control-label col-md-6" >Enviados: </label>
				    <div class="col-md-6">
				    	{{$det->cantidad_enviada}}
				    </div>
	 			</div>
			</div>

			<div class="col-md-12">
				<div class="form-group">
				<hr>
				    <label class="control-label col-md-6" ><p class="text-danger">Restante:</p> </label>
				    <div class="col-md-6">
				    	<p class="text-danger">{{$det->cantidad_aprobada-$det->cantidad_enviada}}</p>
				    	
				    </div>
	 			</div>
			</div>
		</div>
	</div>
	<hr>
	<div class=" row">
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="form-group">
				    <label class="control-label col-md-6" >A enviar: </label>
				    <div class="col-md-6">
				    	{!! Form::number('cant',null,['class'=> 'form-control','min'=>'0' ,'max'=>$det->cantidad_aprobada-$det->cantidad_enviada,'required'])!!}
				    </div>
	 			</div>
	 		</div>
		</div>
	</div>
	<br>
	

<div class="modal-footer">
<div class="btn-group " role="group" aria-label="Basic">
	<a h href="#" onclick="window.location.reload(true);" class=" btn btn-default btn-round" data-dismiss="modal">CANCELAR  </a>

  <button type="submit" class="btn btn-success btn-round">ACEPTAR</button>
  
</div>

{{-- <div class="form-group">
    <div class="col-md-6 col-lg-offset-3">
	<div class="btn-group ">
		<a href="#" class=" btn btn-default btn-round" data-dismiss="modal">Cerrar</a>
		<a href="#"  class=" btn btn-success btn-round" onclick="$(this).closest('form').submit() ">Enviar</a>
		{!! Form::submit('registrar',['class'=>'btn btn-success  btn-round'])!!}
	</div>

	</div>
</div> --}}
</div>

{!! Form::close()!!}


<script type="text/javascript">

  var eta = $("#f_env");
  eta.daterangepicker({
    singleDatePicker:true,
    minDate: moment(),
    locale: {
            format: 'YYYY-MM-DD'
        }
  });

</script>