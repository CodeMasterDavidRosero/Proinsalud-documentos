<?php

if($_SESSION["perfil"] == "Coordinador" || $_SESSION["perfil"] == ""){

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

                <tr style="align-content:center">

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
                  <th style="width:100px">Acciones</th>

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
                  <td>' . $value["fecha_publicacion"] . '</td>
                  <td>' . $value["macroproceso"] . '</td>
                  <td>' . $value["proceso"] . '</td>
                  <td>' . $value["grupo"] . '</td>
                  <td>' . $value["usuario"] . '</td>
                  <td>' . $value["url"] . '</td>';


                  echo '<td>
                      
                  <div class="btn-group">
                        
                      <button class="btn btn-success btndescargarDocumento" idDocumento="' . $value["id"] . '" data-toggle="modal" data-target="#modalDescargarDocumento"><i class="fa fa-download"></i></button>

                      <button class="btn btn-danger btnEliminarDocumento" idDocumento="' . $value["id"] . '" usuario="' . $value["usuario"] . '"><i class="fa fa-times"></i></button>

                      <button class="btn btn-warning btnEditarDocumento" idDocumento="' . $value["id"] . '" data-toggle="modal" data-target="#modalEditarDocumento"><i class="fa fa-pencil"></i></button>

                      <button class="btn btn-primary btnAbrirDocumento" idDocumento="' . $value["id"] . '" data-toggle="modal" data-target="#modalAbriDocumento"><i class="fa fa-eye"></i></button>

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