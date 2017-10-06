<form id="form_nuevo" data-parsley-validate class="form-horizontal form-label-left">

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Nueva Marca</h4>
</div>
<div class="modal-body">
  
            <p>Profavor complete la informacion del formulario.</p>
  
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">CODIGO 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="CODIGO" name="CODIGO" required="required" class="form-control col-md-7 col-xs-12" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">DESCRIPCION 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="DESCRIPCION" name="DESCRIPCION" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
           
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">ESTADO 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="ESTADO" name="ESTADO" required="required" class="form-control col-md-7 col-xs-12">
                  <option value="1">ACTIVO</option>
                  <option value="2">DESACTIVO</option>
                </select>
              </div>
            </div>      

</div>
<div class="modal-footer">
  <input type="submit" class="btn btn-success" value="Guardar">
</div>
</form>          

          