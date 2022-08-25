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

        <div class="modal-content">

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

                                        <td colspan="3"></td>
                                        <td style="text-align: center;">Buscar: <input type="search" style="border-radius:5px; border: 1px solid #d2d6de; height:30px;"></td>
                                        <td colspan="4"></td>
                                        <td style="text-align: center;">Buscar: <input type="search" style="border-radius:5px; border: 1px solid #d2d6de; height:30px;"></td>
                                        <td></td>

                                        

                                    </tr>

                                    <tr>

                                        <th style="width:10px">#</th>
                                        <th>Código</th>
                                        <th>Ver</th>
                                        <th>Keywords</th>
                                        <th>Ciclo</th>
                                        <th>Nombre</th>
                                        <th>Fecha Elaboracíon</th>
                                        <th>Ultima Revisión</th>
                                        <th>Proceso</th>
                                        <!--<th>URL</th>-->
                                        <th style="width: 160px">Acciones</th>

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
                  <td>' . $value["version"] . '</td>
                  <td>' . $value["pclaves"] . '</td>
                  <td>' . $value["ciclo"] . '</td>
                  <td>' . $value["nombre"] . '</td>
                  <td>' . $value["fecha_actualizacion"] . '</td>
                  <td>' . $value["fecha_ultima_revision"] . '</td>';

                                        $itemProceso = "id";
                                        $valorProceso = $value["proceso"];
                                        $respuestaProceso = ControladorProcesos::ctrMostrarProcesos($itemProceso, $valorProceso);
                                        echo '<td>' . $respuestaProceso["nombre_proceso"] . '</td>';

                                        /*<td>'.$value["url"].'</td>';*/

                                        echo '<td align="center">
                      
                  <div class="btn-group">

                  <a class="btn btn-success" target="_black" href="' . $value["url"] . '">';
                                        echo '<i class="fa fa-download"></i></a>

                  <button class="btn btn-primary btnAbrirDocumento" idDocumento="' . $value["id"] . '" data-toggle="modal" data-target="#modalVisualizarDocumentos"><i class="fa fa-eye"></i></button>';

                                        if ($_SESSION["perfil"] == "SuperAdmin") {

                                            echo '<button class="btn btn-danger btnEliminarDocumento" idDocumento="' . $value["id"] . '" usuario="' . $value["nombre"] . '"><i class="fa fa-trash"></i></button>

                  <button class="btn btn-warning btnEditarDocumento" idDocumento="' . $value["id"] . '" data-toggle="modal" data-target="#modalEditarDocumentos"><i class="fa fa-pencil"></i></button>';
                                        }

                                        echo '</div>

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

        </div>

        <br>

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

    <div class="modal-dialog" style="width: 60%;">

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

                <div class="modal-fade">

                    <div class="box-body">

                        <embed class="visualizarDocumento" width="100%" height="400px" />

                    </div>

                </div>

                <!--=====================================
                PIE DEL MODAL
                ======================================-->

                <div class="modal-footer" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

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

                                    <input class="form-control input-lg" name="editarCodigo" style="border-radius: 5px;" id="editarCodigo">

                                </div>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL NOMBRE-->

                        <div class="form-group row">

                            <div class="col-xs-6">

                                <div class="input-group">

                                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-file-text"></i></span>

                                    <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="editarNombre" id="editarNombre" required>

                                </div>

                            </div>

                            <!-- ENTRADA PARA LA VERSION DOCUMENTO -->

                            <div class="col-xs-6">

                                <div class="input-group">

                                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-pencil-square-o"></i></span>

                                    <input type="number" class="form-control input-lg" style="border-radius: 5px;" name="editarVersion" min="1" id="editarVersion" required>

                                </div>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL MACROPROCESO-->

                        <div class="form-group row">

                            <div class="col-xs-6">

                                <div class="input-group">

                                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-object-group"></i></span>

                                    <select class="form-control input-lg" id="editarMacro" name="editarMacro" style="border-radius: 5px;" required>

                                        <option> </option>

                                        <?php

                                        $item = null;
                                        $valor = null;

                                        $macros = ControladorMacros::ctrMostrarMacros($item, $valor);

                                        foreach ($macros as $key => $value) {

                                            echo '<option value="' . $value["id"] . '">' . $value["nombre_macro"] . '</option>';
                                        }

                                        ?>

                                    </select>

                                </div>

                            </div>

                            <!-- ENTRADA PARA EL PROCESO-->

                            <div class="col-xs-6">

                                <div class="input-group">

                                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-object-ungroup"></i></span>

                                    <select class="form-control input-lg" id="editarProceso" name="editarProceso" style="border-radius: 5px;" required>

                                        <option> </option>

                                        <?php

                                        $item = null;
                                        $valor = null;

                                        $proce = ControladorProcesos::ctrMostrarProcesos($item, $valor);

                                        foreach ($proce as $key => $value) {

                                            echo '<option value="' . $value["menu_id"] . '">' . $value["nombre_proceso"] . '</option>';
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

                                    <select class="form-control input-lg" name="editarGrupo" id="editarGrupo" style="border-radius: 5px;" required>

                                        <option value="10">Procesos (SF, BPM, BPE, LAB, IMAG, CITAS)</option>

                                        <option value="11">TS, HOS, URG, UCIN, ETC, SST</option>

                                        <option value="12">RMPN, REPOC, ETC</option>

                                    </select>

                                </div>

                            </div>

                            <!-- ENTRADA PARA EL FECHA DE ELABORACION -->

                            <div class="col-xs-6">

                                <div class="input-group date dp-date">

                                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-calendar"></i></span>

                                    <input type="text" class="form-control input-lg" style="border-radius: 5px;" id="editarFecingreso" name="editarFecingreso" required>

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

                                <p class="help-block" style="color: rgb(0 123 255); font-size:12px">Tipo de Archivo:
                                    <b>WORD, EXCEL, PDF, PPT, JPGE, PNG</b>
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <br>

                <!--=====================================
                PIE DEL MODAL
                ======================================-->

                <div class="modal-footer" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="button" class="btn btn-info">Modificar Registro</button>

                </div>

            </form>

        </div>

    </div>

</div>

<!--=====================================
MODAL BUSQUEDA RÁPIDA
======================================-->

<div id="modalBusquedaRapida" class="modal fade" role="dialog">

    <div class="modal-dialog" style="width: 80%;">

        <div class="modal-content" style="border-radius: 5px;">

            <form role="form" method="post" enctype="multipart/form-data">

                <!--=====================================
                CABEZA DEL MODAL
                ======================================-->

                <div class="modal-header" style="background: #ffc107; color:Black; border-top-left-radius: 5px; border-top-right-radius: 5px;">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Busqueda Rápida de Documento</h4>

                </div>

                <!--=====================================
                CUERPO DEL MODAL
                ======================================-->

                <div class="modal-body">

                    <div class="box-body">

                        <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="editarNombre" id="editarNombre"
                        placeholder="Escriba nombre, codígo o palabras clave del documento que busca..." required>

                    </div>

                </div>

                <!--=====================================
                PIE DEL MODAL
                ======================================-->

                <div class="modal-footer" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="button" class="btn btn-info">Buscar</button>

                </div>

            </form>

        </div>

    </div>

</div>