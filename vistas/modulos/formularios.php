<?php


if($_SESSION["perfil"] == "coordinador"){

  echo '<script>

    window.location = "formularios";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" name="form_docs" id="form_docs">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <section class="content-header" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">

          <h1 style="font-size:36px">Formulario Documentos</h1>

          <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-list-ol"></i>Menu Documentos</a></li>

            <li><a href="documentos"><i class="fa fa-plus"></i>Plantilla Tablas</a></li>

          </ol>

        </section>

      <!-- </form> -->

      <div class="modal-content">

        <!-- <form role="form" method="post" enctype="multipart/form-data" > -->

          <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA EL NOMBRE-->

              <div class="form-group row">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-file-text"></i></span>

                    <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="nuevoNombre" id="nuevoNombre" placeholder="Nombre del documento" id="nuevoNombre" required>

                  </div>

                </div>



                <!-- ENTRADA PARA LA VERSION DOCUMENTO -->

                <div class="col-xs-3">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-pencil-square-o"></i></span>

                    <input type="number" class="form-control input-lg" style="border-radius: 5px;" name="nuevaVersion" min="1" placeholder="# Versión" id="nuevaVersion" required>

                  </div>

                </div>

                <!-- ENTRADA PARA CODIGO CONCATENADO-->

                <div class="col-xs-3">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-barcode"></i></span>

                    <input class="form-control input-lg" value="<?php $Object = new DateTime();
                    $DateAndTime = $Object->format("Ymdms"); echo "$DateAndTime"; ?>" style="border-radius: 5px;"
                     name="nuevoCodigo" id="nuevoCodigo" readonly>

                  </div>

                </div>

              </div>

              <!-- ENTRADA PARA EL MACROPROCESO-->

              <div class="form-group row">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-object-group"></i></span>

                    <select class="form-control input-lg" id="nuevoMacro" name="nuevoMacro" style="border-radius: 5px;" required>

                      <option value=""> Seleccione un Macroproceso...</option>

                      <?php

                      $item = null;
                      $valor = null;

                      $roles = ControladorRoles::ctrMostrarRoles($item, $valor);

                      foreach ($roles as $key => $value) {

                        if (is_null($value["menu_id"])) {

                          echo '<option value="' . $value["id"] . '">' . $value["rol"] . '</option>';
                        }
                      }
                      ?>

                    </select>

                  </div>

                </div>

                <!-- ENTRADA PARA EL PROCESO-->

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-object-ungroup"></i></span>

                    <select class="form-control input-lg" id="nuevoProceso" name="nuevoProceso" style="border-radius: 5px;" required>

                      <option name="selProceso">Seleccione un Proceso...</option>

                      <?php

                      $item = null;
                      $valor = null;
                      $sel_macro = 5;

                      $roles = ControladorRoles::ctrMostrarRoles($item, $valor);

                      foreach ($roles as $key => $value) {

                        if (($value["menu_id"]) == $sel_macro) {

                          echo '<option value="' . $value["menu_id"] . '">' . $value["rol"] . '</option>';
                        }
                      }

                      ?>

                    </select>

                  </div>

                </div>

              </div>

              <!-- ENTRADA PARA EL GRUPO -->

              <div class="form-group row">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-folder-open-o"></i></span>

                    <select class="form-control input-lg" name="nuevoGrupo" id="nuevoGrupo" style="border-radius: 5px;" required>

                      <option value="Vendedor">Seleccione un Grupo...</option>

                      <option value="Procedimientos, instructivos, formatos, etc">Procedimientos, instructivos, formatos, etc</option>

                      <option value="TS, HOS, URG, UCIN, ETC, SST">TS, HOS, URG, UCIN, ETC, SST</option>

                      <option value="RMPN, REPOC, ETC">RMPN, REPOC, ETC</option>

                    </select>

                  </div>

                </div>

                <!-- ENTRADA PARA EL FECHA DE ELABORACION -->

                <div class="col-xs-6">
                        
                        <div class="input-group date dp-date">
          
                          <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-calendar"></i></span> 
                        
                          <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="nuevoFecingreso" placeholder="Fecha Ingreso" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>
          
                          </div>
          
                      </div>

              </div>

              <!-- ENTRADA PARA SUBIR EL DOCUMENTO -->
              <br>

              <br>

              <div class="form-group">

                <div class="input-group">

                  <div class="panel">--Subir Documento--</div>

                  <input type="file" class="nuevoDocumento" name="nuevoDocumento" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                  text/plain, application/pdf, image/*">

                  <p class="help-block" style="color: rgb(0 123 255); font-size:12px">Tipo de Archivo: <b>WORD, EXCEL, PDF, PPT, JPGE, PNG</b></p>

                </div>

              </div>

            </div>

          </div>

          <input type="" name="idUsuario" value="<?php echo $_SESSION["id"]; ?>" id="idUsuario">
          <input type="" name="idRoles" value="<?php echo $_SESSION["roles"]; ?>" id="idRoles">
          <input type="" name="nuevaRuta" value="vista/documentos">


          <!--=====================================
        PIE DEL MODAL
        ======================================-->

          <div class="modal-footer">

            <button type="submit" class="btn btn-info" style="margin-right:10px">Guardar Documento</button>

          </div>
          <?php

          $crearFormulario = new ControladorFormularios();
          $crearFormulario -> ctrCrearFormulario();

          ?>
          </div>    

        </form>

      </div>

    </div>

    <!-- <br> -->

  </section>

</div>