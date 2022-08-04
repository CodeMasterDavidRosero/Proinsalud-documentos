<div class="content-wrapper">

  <section class="content-header">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
    CABEZA DEL MODAL
    ======================================-->


        <section class="content-header" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">

          <h1 style="font-size:36px;">Menú Documentos</h1>

          <ol class="breadcrumb">

            <li><a href="documentos"><i class="fa fa-file-text"></i>Plantilla Tablas</a></li>

            <li><a href="formularios"><i class="fa fa-plus"></i>Plantilla Formularios</a></li>

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

              <!-- ENTRADA PARA EL MACROPROCESO -->

              <div class="form-group">

                <div class="input-group col-xs-12">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-object-group"></i></span>

                  <select class="form-control input-lg" name="SelMacro" id="SelMacro" style="border-radius: 5px;">

                    <option value="" id="">--Seleccionar Macroproceso--</option>

                    <?php

                    if (($_SESSION["perfil"]) == "SuperAdmin") {

                      $itemS = null;
                      $valorS = null;

                      $macros = ControladorMacros::ctrMostrarMacros($itemS, $valorS);

                      foreach ($macros as $key => $value) {

                        echo '<option value="' . $value["id"] . '">' . $value["nombre_macro"] . '</option>';
                      }
                    } else {

                      $item = null;
                      $valor = null;
                      $sel_macro = $_SESSION["roles"];


                      $macros = ControladorMacros::ctrMostrarMacros($item, $valor);

                      foreach ($macros as $key => $value) {

                        if (($value["id"]) == $sel_macro) {

                          echo '<option value="' . $value["id"] . '">' . $value["nombre_macro"] . '</option>';
                        }
                      }
                    }

                    ?>

                  </select>

                  <input type="hidden" name="idUsuario" value="<?php echo $_SESSION["id"]; ?>" id="idUsuario">
                  <input type="hidden" name="idRol" value="<?php echo $_SESSION["roles"]; ?>" id="idRol">
                  
                </div>

              </div>

              <!-- ENTRADA PARA EL PROCESO -->

              <div class="form-group">

                <div class="input-group col-xs-12">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-object-ungroup"></i></span>

                  <select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;">

                    <option name="selProceso">--Seleccione un Proceso--</option>

                    <?php             

                    if (($_SESSION["perfil"]) == "SuperAdmin") {

                      $itemS = null;
                      $valorS = null;
                      $proce = ControladorProcesos::ctrMostrarProcesos($item, $valor);

                      foreach ($proce as $key => $value) {

                          echo '<option value="' . $value["menu_id"] . '">' . $value["nombre_proceso"] . '</option>';
                      }
                    } else {

                      $item = null;
                      $valor = null;
                      $sel_proce = $_SESSION["roles"];

                      $proce = ControladorProcesos::ctrMostrarProcesos($item, $valor);

                      foreach ($proce as $key => $value) {

                        if (($value["menu_id"]) == $sel_proce) {

                          echo '<option value="' . $value["menu_id"] . '">' . $value["nombre_proceso"] . '</option>';
                        }
                      }
                    }

                    ?>

                  </select>

                </div>

              </div>

              <!-- ENTRADA PARA EL GRUPO -->

              <div class="form-group">

                <div class="input-group col-xs-12">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-folder-open-o"></i></span>

                  <select class="form-control input-lg" name="seleccionarDocumento" style="border-radius: 5px;">

                    <option value="">--Seleccione un Grupo--</option>

                    <?php
                    if (($_SESSION["perfil"]) == "SuperAdmin") {

                          echo '<option value="10">Procedimientos, instructivos, formatos, etc</option>
                                <option value="11">TS, HOS, URG, UCIN, ETC, SST</option>
                                <option value="12">RMPN, REPOC, ETC</option>';
                       
                    }else {

                    $item = null;
                    $valor = null;
                    $sel_carpeta = $_SESSION["roles"];

                    $carpes = ControladorCarpetas::ctrMostrarCarpetas($item, $valor);

                    foreach ($carpes as $key => $value) {

                      if (($value["menu_id"]) == $sel_carpeta) {

                        echo '<option value="' . $value["menu_id"] . '">' . $value["nombre_carpeta"] . '</option>';
                      }
                    }
                  }

                    ?>

                  </select>

                </div>

              </div>

            </div>

          </div>


          <!--=====================================
        PIE DEL MODAL
        ======================================-->

          <div class="modal-footer">

            <button type="button" class="btn btn-info" style="margin-right:10px"><a href="documentos">Filtrar Documentos</a></button>

          </div>

        </form>

      </div>

    </div>

    <br>

  </section>

</div>