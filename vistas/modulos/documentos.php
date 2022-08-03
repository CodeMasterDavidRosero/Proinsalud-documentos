<?php

if ($_SESSION["perfil"] == "" || $_SESSION["perfil"] == "") {

  echo '<script>

    window.location = "inicio";

  </script>';

  return;
}

?>

<div class="content-wrapper">

  <section class="content-header">

    <form role="form" method="post" enctype="multipart/form-data">

      <section class="content-header" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">

        <h1 style="font-size:30px">Administrar Documentos</h1>

        <ol class="breadcrumb">

          <li><a href="inicio"><i class="fa fa-list-ol"></i>Menu Documentos</a></li>
          <li><a href="formularios"><i class="fa fa-plus"></i>Plantilla Formularios</a></li>

        </ol>

      </section>

    </form>

    <div class="modal-content">

      <section class="content">

        <div class="box">

          <div class="box-body">

            <table class="table table-bordered table-striped dt-responsive tablas" style="border-radius:5px; width: 100%">

              <thead>

                <tr>

                  <th style="width:10px">#</th>
                  <th>Código</th>
                  <th>Versión</th>
                  <th>Nombre</th>
                  <th>Fecha Elaboración</th>
                  <th>Fecha Actualización</th>
                  <th>Ultima Revisión</th>
                  <th>Fecha Publicación</th>
                  <th>Macroproceso</th>
                  <th>Proceso</th>
                  <th>Grupo</th>
                  <th>Usuario</th>
                  <th>URL</th>
                  <th style="width: 100%;">Acciones</th>

                </tr>

              </thead>

              <tbody>

                <?php

                $item = null;
                $valor = null;

                $documentos = ControladorDocumentos::ctrMostrarDocumentos($item, $valor);

                foreach ($documentos as $key => $value) {

                  echo ' <tr>
                  <td>' . ($key + 1) . '</td>
                  <td>' . $value["codigo"] . '</td>
                  <td>ver-' . $value["version"] . '</td>
                  <td>' . $value["nombre"] . '</td>
                  <td>' . $value["fecha_elaboracion"] . '</td>
                  <td>' . $value["fecha_actualizacion"] . '</td>
                  <td>' . $value["fecha_ultima_revision"] . '</td>
                  <td>' . $value["fecha_publicacion"] . '</td>';

                  $itemMacro = "id";
                  $valorMacro = $value["macroproceso"];
                  $respuestaMacro = ControladorMacros::ctrMostrarMacros($itemMacro, $valorMacro);
                  echo '<td>' . $respuestaMacro["nombre_macro"] . '</td>';

                  $itemProceso = "menu_id";
                  $valorProceso = $value["proceso"];
                  $respuestaProceso = ControladorProcesos::ctrMostrarProcesos($itemProceso, $valorProceso);
                  echo '<td>' . $respuestaProceso["nombre_proceso"] . '</td>';

                  $itemGrupo = "menu_id";
                  $valorGrupo = $value["grupo"];
                  $respuestaGrupo = ControladorCarpetas::ctrMostrarCarpetas($itemGrupo, $valorGrupo);
                  echo '<td>' . $respuestaGrupo["nombre_carpeta"] . '</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["usuario"];
                  $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);
                  echo '<td>' . $respuestaUsuario["nombre"] . '</td>
                 
                  <td>' . $value["url"] . '</td>';

                  echo '<td>
                      
                  <div class="btn-group">

                    <button class="btn btn-primary btnAbrirDocumento" idDocumento="' . $value["id"] . '" data-toggle="modal" data-target="#modalVisualizarDocumentos"><i class="fa fa-eye"></i></button>
                    
                    <button class="btn btn-warning btnEditarDocumento" idDocumento="' . $value["id"] . '" data-toggle="modal" data-target="#modalEditarDocumentos"><i class="fa fa-pencil"></i></button>
                  
                    <button class="btn btn-danger btnEliminarDocumento" idDocumento="' . $value["id"] . '" usuario="' . $value["nombre"] . '"><i class="fa fa-trash"></i></button>

                    </div>  

                  </td>

                </tr>';
                }

                ?>

              </tbody>

            </table>

          </div>

        </div>

      </section>

    </div>

  </section>

</div>

<?php
$borrarDocumento = new ControladorDocumentos();
$borrarDocumento->ctrBorrarDocumento();
?>

<!--=====================================
MODAL VISUALIZADOR DE DOCUMENTOS
======================================-->

<div id="modalVisualizarDocumentos" class="modal fade" role="dialog">

  <div class="modal-dialog" style="width: 90%;">

    <div class="modal-content" style="border-radius: 5px;">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

        <div class="modal-header" style="background: #ffc107; color:Black; border-top-left-radius: 5px; border-top-right-radius: 5px;">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar personal</h4>

        </div>

        <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

        <div class="modal-body">

          <div class="box-body">





          </div>

        </div>

        <!--=====================================
            PIE DEL MODAL
            ======================================-->

        <div class="modal-footer" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" class="btn btn-success"><i class="fa fa-download"></i> Descargar</button>

        </div>

        <?php

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
EDITAR REGISTRO DE DOCUMENTOS
======================================-->

<div id="modalEditarDocumentos" class="modal fade" role="dialog">

  <div class="modal-dialog" style="width: 80%;">

    <div class="modal-content" style="border-radius: 5px;">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

        <div class="modal-header" style="background: #ffc107; color:Black; border-top-left-radius: 5px; border-top-right-radius: 5px;">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Registro de Documento</h4>

        </div>

        <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

        <div class="modal-body">

          <div class="box-body">

          <!-- ENTRADA PARA CODIGO CONCATENADO-->

            <div class="form-group row">

              <div class="col-xs-3">

                <div class="input-group">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-barcode"></i></span>

                  <input class="form-control input-lg" value="<?php $Object = new DateTime();
                                                              $DateAndTime = $Object->format("Ymdms");
                                                              echo "$DateAndTime"; ?>" style="border-radius: 5px;" name="nuevoCodigo" id="nuevoCodigo" readonly>

                </div>

              </div>

            </div>

            <!-- ENTRADA PARA EL NOMBRE-->

            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-file-text"></i></span>

                  <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="nuevoNombre" id="nuevoNombre" placeholder="Nombre del documento" id="nuevoNombre" required>

                </div>

              </div>



              <!-- ENTRADA PARA LA VERSION DOCUMENTO -->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-pencil-square-o"></i></span>

                  <input type="number" class="form-control input-lg" style="border-radius: 5px;" name="nuevaVersion" min="1" placeholder="# Versión" id="nuevaVersion" required>

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
                    $sel_macro = $_SESSION["roles"];


                    $macros = ControladorMacros::ctrMostrarMacros($item, $valor);

                    foreach ($macros as $key => $value) {

                      if (($value["id"]) == $sel_macro) {

                        echo '<option value="' . $value["id"] . '">' . $value["nombre_macro"] . '</option>';
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
                    $sel_proce = $_SESSION["roles"];

                    $proce = ControladorProcesos::ctrMostrarProcesos($item, $valor);

                    foreach ($proce as $key => $value) {

                      if (($value["menu_id"]) == $sel_proce) {

                        echo '<option value="' . $value["menu_id"] . '">' . $value["nombre_proceso"] . '</option>';
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

                    <?php

                    $item = null;
                    $valor = null;
                    $sel_carpeta = $_SESSION["roles"];

                    $carpes = ControladorCarpetas::ctrMostrarCarpetas($item, $valor);

                    foreach ($carpes as $key => $value) {

                      if (($value["menu_id"]) == $sel_carpeta) {

                        echo '<option value="' . $value["menu_id"] . '">' . $value["nombre_carpeta"] . '</option>';
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

                  <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="nuevoFecingreso" placeholder="Fecha de creación" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

                </div>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR EL DOCUMENTO -->
            <br>

            <br>

            <div class="form-group">

              <div class="input-group">

                <div class="panel">--Subir Documento--</div>
                <p class="help-block" style="font-size:10px">Tamaño Máximo: <b>20 MB</b></p>

                <input type="file" class="rutaDocumento" name="rutaDocumento">

                <p class="help-block" style="color: rgb(0 123 255); font-size:12px">Tipo de Archivo: <b>WORD, EXCEL, PDF, PPT, JPGE, PNG</b></p>


              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" class="btn btn-info">Modificar Registro</button>

        </div>

        <?php

        ?>

      </form>

    </div>

  </div>

</div>