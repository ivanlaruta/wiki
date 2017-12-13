{!! Form::open(array('class'=>'form-horizontal form-label-left')) !!}

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">NUEVA ACTIVIDAD.</h4> 
  </div>
  <div class="modal-body">
  <div class="row">
    <div class="form-horizontal form-label-left ">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <label>Tema:</label>
          <input type="text" class="form-control" id="tema" name="tema" required="required" autofocus="" placeholder="Tema">
        </div>
      </div>
    </div>
    <div class="form-horizontal form-label-left">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label>Area:</label>
          <select class="form-control selectArea" name="area[]" multiple="multiple" id="area" data-width="100%">
            <option value="a"> RRHH</option>
            <option value="a"> ADM</option>
            <option value="a"> LEGAL</option>
            <option value="a"> SISTEMAS</option>
            <option value="a"> MARKETING</option>
            <option value="a"> FINAZAS</option>
          </select>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label>Empresas:</label>
          <select class="form-control selectEmpresa" name="empresa[]" multiple="multiple" id="empresa" data-width="100%">
            <option value="a"> TOYOTA</option>
            <option value="a"> TOYOSA</option>
            <option value="a"> CROWN</option>
            <option value="a"> CONSARQ</option>
          </select>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label>Responsable:</label>
          <select class="form-control selectResponsable" name="responsable[]" multiple="multiple" id="responsable" data-width="100%">
            <option value="a"> Bernardo Akamine</option>
            <option value="a"> Carlos Soliz</option>
            <option value="a"> Alejandro Ballon</option>
            <option value="a"> Miroslava Raljevic</option>
            <option value="a"> Marcelo Teran</option>
            <option value="a"> Iuliia Bulat</option>
          </select>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label>Plazo:</label>
            <div class="col-md-12">
              <input type="text" name = "f_env" class="form-control has-feedback-left" id="f_env" aria-describedby="inputSuccess2Status2">
              <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
              <span id="inputSuccess2Status2" class="sr-only">(success)</span>
            </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label>Criticidad:</label>
          <select class="form-control select2" name="criticidad" id="criticidad" data-width="100%">
            <option value="a"> Poco Critico</option>
            <option value="a"> Medianamente Critico</option>
            <option value="a"> Muy Critico</option>
          </select>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label>Estado:</label>
          <select class="form-control select2" name="estado" id="estado" data-width="100%">
            <option value="a"> Sin realizar</option>
            <option value="a"> En proceso</option>
            <option value="a"> Finalizado</option>
          </select>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <label>Propuesta/ Comentario:</label>
          <textarea class="form-control" rows="2" ></textarea>
        </div>
      </div>

    </div>
</div>
</div>

<div class="modal-footer">
  <input type="submit" class="btn btn-success guardar show_all_records" id="show_all_records" value="Guardar">
</div>


{!! Form::close()!!}

<script type="text/javascript">
      $('.select2').select2();
      $('.selectArea').select2({placeholder: 'AREA'});
      $('.selectEmpresa').select2({placeholder: 'EMPRESA'});
      $('.selectResponsable').select2({placeholder: 'RESPONSABLE'});



var eta = $("#f_env");
  eta.daterangepicker({
    singleDatePicker:true,
    minDate: moment(),
    locale: {
            format: 'YYYY-MM-DD'
        }
  });

</script>

         