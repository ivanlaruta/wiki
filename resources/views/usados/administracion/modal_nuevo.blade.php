<form id="form_nuevo" data-parsley-validate class="form-horizontal form-label-left">

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Nueva unidad</h4>
</div>
<div class="modal-body">
  
                    <p>Profavor complete la informacion de los formularios.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#" class="paso1 disabled">
                            <span class="step_no">1</span>
                            <span class="step_descr">Paso 1<br />
                                <small>Datos generales</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#" class="paso2 disabled">
                            <span class="step_no">2</span>
                            <span class="step_descr">Paso 2<br />
                                <small>Datos tecnico</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#" class="paso3 disabled">
                            <span class="step_no">3</span>
                            <span class="step_descr">Paso 3<br />
                                <small>Datos anterior cliente</small>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
    
          <div class="form-group generales">
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">CHASIS 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="CHASIS" name="CHASIS" required="required" class="form-control col-md-7 col-xs-12" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">AÑO 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="AÑO" name="AÑO" required="required" min="1990" max="2017" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">PRODUCCION 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="PRODUCCION" name="PRODUCCION" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">MARCA 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="MARCA" name="MARCA" required="required" class="form-control col-md-7 col-xs-12">
                  <option value="TOYOTA">TOYOTA</option>
                  <option value="YAMAHA">YAMAHA</option>
                  <option value="HINO">HINO</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">MODELO 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="MODELO" name="MODELO" required="required" class="form-control col-md-7 col-xs-12">
                  <option value="TOYOTA">RAV</option>
                  <option value="YAMAHA">HILUX</option>
                  <option value="HINO">COASTER</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">MASTER 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="MASTER" name="MASTER" required="required" class="form-control col-md-7 col-xs-12">
                  <option value="TOYOTA">RAV</option>
                  <option value="YAMAHA">HILUX</option>
                  <option value="HINO">COASTER</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">COLOR_EXTERIOR 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="COLOR_EXTERIOR" name="COLOR_EXTERIOR" required="required" class="form-control col-md-7 col-xs-12">
                  <option value="TOYOTA">BLANCO</option>
                  <option value="YAMAHA">NEGRO</option>
                  <option value="HINO">PLATA</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">COLOR_INTERIOR 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="COLOR_INTERIOR" name="COLOR_INTERIOR" required="required" class="form-control col-md-7 col-xs-12">
                  <option value="TOYOTA">BLANCO</option>
                  <option value="YAMAHA">NEGRO</option>
                  <option value="HINO">PLATA</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">UBICACION 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="UBICACION" name="UBICACION" required="required" class="form-control col-md-7 col-xs-12">
                  <option value="TOYOTA">OFICINA CENTRAL LA PAZ</option>
                  <option value="YAMAHA">CURVA DE HOLGIN LA PAZ</option>
                  <option value="HINO">AV BANZER SANTA CRUZ</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">TIPO_UNIDAD 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="TIPO_UNIDAD" name="TIPO_UNIDAD" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">PRECIO 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="PRECIO" name="PRECIO" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">IMAGEN 1 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" id="img1" name="img1" required="required" class="">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">IMAGEN 2
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" id="img2" name="img2" required="required" class="">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">IMAGEN 3 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" id="img3" name="img3" required="required" class="">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">IMAGEN 4 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" id="img4" name="img4" required="required" class="">
              </div>
            </div>
          </div>

  
          <div class="form-group tecnicos">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">COMBUSTIBLE 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <select id="COMBUSTIBLE" name="COMBUSTIBLE" required="required" class="form-control col-md-7 col-xs-12">
                  <option value="TOYOTA">GASOLINA</option>
                  <option value="YAMAHA">DIESEL</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">MOTOR 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="text" id="MOTOR" name="MOTOR" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">CILINDRADA 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="number" id="CILINDRADA" name="CILINDRADA" required="required" min="150" max="9000" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">SALIDA_MAX 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="number" id="SALIDA_MAX" name="SALIDA_MAX" required="required" min="150" max="9000" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">TORSION 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="number" id="TORSION" name="TORSION" required="required" min="150" max="9000" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">TRANSIMISION 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <select id="TRANSIMISION" name="TRANSIMISION" required="required" class="form-control col-md-7 col-xs-12">
                  <option value="TOYOTA">MANUAL</option>
                  <option value="YAMAHA">AUTOMATICO</option>
                  <option value="YAMAHA">MIXTO</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">TRACCION 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <select id="TRACCION" name="TRACCION" required="required" class="form-control col-md-7 col-xs-12">
                  <option value="TOYOTA">4 X 2</option>
                  <option value="YAMAHA">4 X 4</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">PUERTAS 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="number" id="PUERTAS" name="PUERTAS" required="required" min="0" max="5" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">FRENOS 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="text" id="FRENOS" name="FRENOS" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">AIRBAGS 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="text" id="AIRBAGS" name="AIRBAGS" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">TECHO_SOLAR 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <select id="TECHO_SOLAR" name="TECHO_SOLAR" required="required" class="form-control col-md-7 col-xs-12">
                  <option value="TOYOTA">SI</option>
                  <option value="YAMAHA">NO</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">AROS 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="number" id="AROS" name="AROS" required="required" min="5" max="30" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">AIRE ACONDICIONADO 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <select id="AIRE ACONDICIONADO" name="AIRE ACONDICIONADO" required="required" class="form-control col-md-7 col-xs-12">
                  <option value="TOYOTA">SI</option>
                  <option value="YAMAHA">NO</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">MATERIAL_ASIENTOS 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="text" id="MATERIAL_ASIENTOS" name="MATERIAL_ASIENTOS" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">FAROS 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="text" id="FAROS" name="FAROS" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">DVD 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="text" id="DVD" name="DVD" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">RADIO 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="text" id="RADIO" name="RADIO" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">PISOS 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="text" id="PISOS" name="PISOS" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">LONGITUD 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="number" id="LONGITUD" name="LONGITUD" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">ANCHO 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="number" id="AMCHO" name="AMCHO" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">ALTO 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="number" id="ALTO" name="ALTO" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">CARGA 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="number" id="CARGA" name="CARGA" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">CAP_COMBUSTIBLE 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="number" id="CAP_COMBUSTIBLE" name="CAP_COMBUSTIBLE" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">ASIENTOS 
              </label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="number" id="ASIENTOS" name="ASIENTOS" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>            
          </div>
          </div>


          <div class="form-group cliente">
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">CI 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="CI" name="CI" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">EX 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="EX" name="EX" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">NOMBRES
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="NOMBRE" name="NOMBRE" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">PATERNO 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="NOMBRE" name="NOMBRE" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">MATERNO 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="NOMBRE" name="NOMBRE" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">TELEFONO 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="NOMBRE" name="NOMBRE" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">DIRECCION 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="NOMBRE" name="NOMBRE" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">OBSERVACIONES 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="NOMBRE" name="NOMBRE" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
          </div>





        

</div>
<div class="modal-footer">
  <input type="submit" class="btn btn-success" value="Guardar">
  {{-- <button type="button" class="btn btn-success " >Guardar  <i class="fa fa-save"></i></button> --}}
  <button type="button" class="btn btn-primary anterior" ><i class="fa fa-arrow-circle-left"></i>  Anterior</button>
  <button type="button" class="btn btn-primary siguiente" >siguiente  <i class="fa fa-arrow-circle-right"></i></button>
</div>
</form>          
<script type="text/javascript">


// $(".tecnicos").hide();
// $(".cliente").hide();
// $(".anterior").attr("disabled","disabled");
// $(".paso1").removeClass( "disabled" ).addClass( "done" );


$(".paso1").on("click", function() {paso(1); step = 1;});
$(".paso2").on("click", function() {paso(2); step = 2;});
$(".paso3").on("click", function() {paso(3); step = 3;});

paso(1);

var step = 1;


$(".siguiente").on("click", function() {
    if(step == 1){
      paso(2);
      step =2;
    }
    else{
      if(step == 2){
      paso(3);
      step =3;
      }
    }
});

$(".anterior").on("click", function() {
    if(step == 2){
      paso(1);
      step =1;
    }
    else{
      if(step == 3){
        paso(2);
        step =2;
      }
    }
  });

function paso (step){
  if(step == 1){
      $(".generales").show();
      $(".tecnicos").hide();
      $(".cliente").hide();

      $(".paso1").removeClass( "disabled" ).addClass( "done" );
      $(".paso2").removeClass( "done" ).addClass( "disabled" );
      $(".paso3").removeClass( "done" ).addClass( "disabled" );

      $(".siguiente").removeAttr('disabled');
      $(".anterior").attr("disabled","disabled");
    }
  if(step == 2){
      $(".generales").hide();
      $(".tecnicos").show();
      $(".cliente").hide();

      $(".paso1").removeClass( "done" ).addClass( "disabled" );
      $(".paso2").removeClass( "disabled" ).addClass( "done" );
      $(".paso3").removeClass( "done" ).addClass( "disabled" );

      $(".siguiente").removeAttr('disabled');
      $(".anterior").removeAttr('disabled');
    }
  if(step == 3){
      $(".generales").hide();
      $(".tecnicos").hide();
      $(".cliente").show();

      $(".paso1").removeClass( "done" ).addClass( "disabled" );
      $(".paso2").removeClass( "done" ).addClass( "disabled" );
      $(".paso3").removeClass( "disabled" ).addClass( "done" );

      $(".siguiente").attr("disabled","disabled");
      $(".anterior").removeAttr('disabled');
    }
}


// $(".siguiente").on("click", function() {
//     if(step == 1){
//       $(".generales").hide();
//       $(".tecnicos").show();
//       $(".cliente").hide();
//       $(".anterior").removeAttr('disabled');
//       $(".paso2").removeClass( "disabled" ).addClass( "done" );
//       $(".paso1").removeClass( "done" ).addClass( "disabled" );
//       $(".paso3").removeClass( "done" ).addClass( "disabled" );
//       step =2;
//     }
//     else{
//       if(step == 2){
//       $(".generales").hide();
//       $(".tecnicos").hide();
//       $(".cliente").show();
//       $(".siguiente").attr("disabled","disabled");
//       $(".paso3").removeClass( "disabled" ).addClass( "done" );
//       $(".paso1").removeClass( "done" ).addClass( "disabled" );
//       $(".paso2").removeClass( "done" ).addClass( "disabled" );
//       step =3;
//       }
//     }
// });

// $(".anterior").on("click", function() {
//     if(step == 2){
//       $(".generales").show();
//       $(".tecnicos").hide();
//       $(".cliente").hide();
//       $(".anterior").attr("disabled","disabled");
//       $(".paso1").removeClass( "disabled" ).addClass( "done" );
//       $(".paso2").removeClass( "done" ).addClass( "disabled" );
//       $(".paso3").removeClass( "done" ).addClass( "disabled" );
//       step =1;
//     }
//     else{
//       if(step == 3){
//         $(".generales").hide();
//         $(".tecnicos").show();
//         $(".cliente").hide();
//         $(".siguiente").removeAttr('disabled');
//         $(".paso2").removeClass( "disabled" ).addClass( "done" );
//         $(".paso1").removeClass( "done" ).addClass( "disabled" );
//         $(".paso3").removeClass( "done" ).addClass( "disabled" );
//         step =2;
//       }
//     }
//   });


</script>

          