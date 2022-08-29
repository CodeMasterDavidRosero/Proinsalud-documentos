<?php

if ($_SESSION["perfil"] == "coordinador") {

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

      </form>

      <div class="modal-content">

        <form role="form" method="post" enctype="multipart/form-data">

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

                    <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="nuevaVersion" min="1" placeholder="# Versión" id="nuevaVersion" required>

                  </div>

                </div>

                <!-- ENTRADA PARA CODIGO CONCATENADO-->

                <div class="col-xs-3">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-barcode"></i></span>

                    <input class="form-control input-lg" style="border-radius: 5px;" name="nuevoCodigo" id="nuevoCodigo" required>

                  </div>

                </div>

              </div>

              <!-- ENTRADA PARA EL MACROPROCESO-->

              <div class="form-group row">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-object-group"></i></span>

                    <select class="form-control input-lg" id="nuevoMacro" name="nuevoMacro" style="border-radius: 5px;" required>

                      <option value="" selected disabled>--Seleccione un Proceso--</option>

                      <?php

                      if (($_SESSION["perfil"]) == "SuperAdmin") {

                        $itemS = null;
                        $valorS = null;

                        $macros = ControladorMacros::ctrMostrarMacros($itemS, $valorS);

                        foreach ($macros as $key => $value) {

                          echo '<option value="' . $value["id"] . '">' . $value["nombre_macro"] . '</option>';
                        }
                      }

                      ?>

                    </select>

                  </div>

                </div>

                <!-- ENTRADA PARA EL PROCESO-->

                <div class="col-xs-6">

                  <div class="input-group" style="width: 100%;">

                    <div class=" input-group nuevoProcesos" style="width: 100%;">

                      <span class="input-group-addon" style="border-radius: 5px;" id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>

                      <select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>

                        <option value="" selected disabled>--Selecionar un Subproceso--</option>

                      </select>

                    </div>

                  </div>

                </div>

              </div>

              <!-- ENTRADA PARA EL GRUPO -->

              <div class="form-group row">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-folder-open-o"></i></span>

                    <select class="form-control input-lg" name="nuevoGrupo" id="nuevoGrupo" style="border-radius: 5px;" required>

                      <option value="" selected disabled>--Seleccione un Grupo--</option>

                      <?php

                      if (($_SESSION["perfil"]) == "SuperAdmin") {
                        
                        $item = null;
                        $valor = null;

                        $carpes = ControladorCarpetas::ctrMostrarCarpetas($item, $valor);

                        foreach ($carpes as $key => $value) {

                            echo '<option value="' . $value["id"] . '">' . $value["nombre_carpeta"] . '</option>';

                        }
                      }

                      ?>

                    </select>

                  </div>

                </div>

                <!-- ENTRADA PARA EL FECHA DE ELABORACION -->

                <div class="col-xs-6">

                  <div class="input-group date dp-date">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-calendar"></i></span>

                    <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="nuevoFecingreso" placeholder="--Fecha de Elaboración--" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

                  </div>

                </div>

              </div>

              <!-- ENTRADA PARA ETAPA DEL CICLO -->

              <div class="form-group row">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-repeat"></i></span>

                    <select class="form-control input-lg" name="nuevoCiclo" id="nuevoCiclo" style="border-radius: 5px;" required>

                      <option value="">--Seleccione la Etapa del Ciclo--</option>

                      <option value="Planear">Planear</option>

                      <option value="Hacer">Hacer</option>

                      <option value="Verificar">Verificar</option>

                      <option value="Actuar">Actuar</option>

                    </select>

                  </div>

                </div>

                <!-- Entrada de la última Fecha de Revisión -->

                <div class="col-xs-6">

                  <div class="input-group date dp-date">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-calendar"></i></span>

                    <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="nuevaFechaUltimaRev" placeholder="--Fecha de última Revisión--" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

                  </div>

                </div>

              </div>

              <!-- Entrada para Origen del documento -->

              <div class="form-group row">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-exchange"></i></span>

                    <select class="form-control input-lg" name="nuevoOrigen" id="nuevoOrigen" style="border-radius: 5px;" required>

                      <option value="">--Seleccione el Origen--</option>

                      <option value="1">I - Interno</option>

                      <option value="2">E - Externo</option>

                    </select>

                  </div>

                </div>

                <!--Entrada para la vista General -->

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-eye"></i></span>

                    <select class="form-control input-lg" name="nuevoVista" id="nuevoVista" style="border-radius: 5px;" required>

                      <option value="">¿Tiene Vista General?</option>

                      <option value="1">NO - Restingida</option>

                      <option value="2">SI - Invitados</option>

                    </select>

                  </div>

                </div>

              </div>

              <!--Entrada para las documentos relacionados -->

              <div class="form group row">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-link"></i></span>

                    <input class="form-control input-lg" placeholder="--Ingrese palabras clave--" name="nuevoPClaves" id="nuevoPClaves" style="border-radius: 5px;" required>                                        

                  </div>

                </div>

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-files-o"></i></span>

                    <input type="text" class="form-control input-lg" placeholder="Documentos Relacionados..." name="nuevoRelacionados" id="nuevoRelacionados" style="border-radius: 5px;" required></textarea>

                  </div>

                </div>
              
              </div>

            </div>

            <!-- ENTRADA PARA SUBIR EL DOCUMENTO -->

            <br>

            <br>

            <div class="form-group">

              <div class="col-xs-6">

                <div class="input-group">

                  

                  <h4>--Subir Documento--</h4>
                  
                  <input type="file" class="input-lg" name="rutaDocumento" style="padding-left:0px" required>
                  
                  <p class="help-block" style="font-size:12px">Tamaño Máximo: <b>20 MB</b></p>

                  <p class="help-block" style="color: rgb(0 123 255); font-size:12px">Tipo de Archivo: <b>WORD, EXCEL, PDF, PPT, JPGE, PNG</b></p>

                </div>

              </div>

            </div>

          </div>

          <input type="hidden" name="idUsuario" value="<?php echo $_SESSION["id"]; ?>" id="idUsuario">

          <input type="hidden" name="idMacros" value="<?php echo $_SESSION["nombre_macros"]; ?>" id="idMacros">

          <input type="hidden" name="nuevaRuta" value="vista/documentos/proinsalud/">

          <input type="hidden" name="nuevoProceso" id="nuevoProceso">

          <!--=====================================
          PIE DEL MODAL
          ======================================-->

          <div class="modal-footer">

            <button type="submit" class="btn btn-info" style="margin-right:10px">Guardar Documento</button>

          </div>

          <?php

          $crearFormulario = new ControladorFormularios();

          $crearFormulario->ctrCrearFormulario();

          ?>

        </form>

      </div>

    </div>

    <br>

  </section>

</div>