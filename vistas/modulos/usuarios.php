<?php

if ($_SESSION["perfil"] == "Coordinador" || $_SESSION["perfil"] == "") {

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

          <h1 style="font-size:36px">Administrar Personal</h1>

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

              <button class="btn btn-info" data-toggle="modal" data-target="#modalAgregarUsuario">

                Agregar Personal

              </button>

            </div>

            <div class="box-body">

              <table class="table table-bordered table-striped dt-responsive tablas" style="border-radius:5px;">

                <thead>

                  <tr>

                    <th style="width:10px">#</th>
                    <th>Nombres</th>
                    <th>Usuario</th>
                    <th>Perfil</th>
                    <th>Rol</th>
                    <th>Cumpleaños</th>
                    <th>Documento</th>
                    <th>Telefono</th>
                    <th>Contrato</th>
                    <th>Foto</th>
                    <th>Estado</th>
                    <th>Último Acceso</th>
                    <th>Acciones</th>

                  </tr>

                </thead>

                <tbody>

                  <?php

                  $item = null;
                  $valor = null;

                  $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                  foreach ($usuarios as $key => $value) {

                    echo ' <tr>
                  <td>' . ($key + 1) . '</td>
                  <td>' . $value["nombre"] . '</td>
                  <td>' . $value["usuario"] . '</td>
                  <td>' . $value["perfil"] . '</td>';

                    $itemRol = "id";
                    $valorRol = $value["roles"];

                    $respuestaRoles = ControladorMacros::ctrMostrarMacros($itemRol, $valorRol);

                    echo '  <td>' . $respuestaRoles["nombre_macro"] . '</td>                  
                  
                  
                  <td>' . $value["fechanac"] . '</td>
                  <td>' . $value["tipodoc"] . " " . $value["numident"] . '</td>
                  <td>' . $value["telefono"] . '</td>
                  <td>' . $value["contrato"] . '</td>

                  ';

                    if ($value["foto"] != "") {

                      echo '<td><img src="' . $value["foto"] . '" style="border:0px" class="img-thumbnail" width="50px"></td>';
                    } else {

                      echo '<td><img src="vistas/img/usuarios/default/default.png" class="img-thumbnail" width="40px"></td>';
                    }


                    if ($value["estado"] != 0) {

                      echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="' . $value["id"] . '" estadoUsuario="0">Activado</button></td>';
                    } else {

                      echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="' . $value["id"] . '" estadoUsuario="1">Desactivado</button></td>';
                    }

                    echo '<td>' . $value["ultimo_login"] . '</td>
                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-warning btnEditarUsuario" idUsuario="' . $value["id"] . '" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>

                      <button class="btn btn-danger btnEliminarUsuario" idUsuario="' . $value["id"] . '" fotoUsuario="' . $value["foto"] . '" usuario="' . $value["usuario"] . '"><i class="fa fa-times"></i></button>

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

      

    </div>

    <br>

    </section>

</div>



<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">

  <div class="modal-dialog">

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

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="nuevoNombre" placeholder="Ingresar Nombres y Apellidos" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL NICK USUARIO -->

            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-address-card-o"></i></span>

                  <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="nuevoUsuario" placeholder="Nombre de Acceso" id="nuevoUsuario" required>

                </div>

              </div>

              <!-- ENTRADA PARA EL TIPO DOCUMENTO -->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-pencil-square-o"></i></span>

                  <select class="form-control input-lg" name="nuevoTipodoc" style="border-radius: 5px;" required>

                    <option value="">Tipo de Documento</option>

                    <option value="NIT">NIT</option>

                    <option value="C.C.">C.C.</option>

                    <option value="RUT">RUT</option>

                    <option value="NUIP">NUIP</option>

                    <option value="C.E">C.E.</option>

                  </select>

                </div>

              </div>

            </div>

            <!-- ENTRADA PARA EL NUMERO DE IDENTIFICACION -->
            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-list-alt"></i></span>

                  <input type="number" min="0" class="form-control input-lg" style="border-radius: 5px;" name="nuevoNumident" placeholder="Número Documento" id="nuevoNumident" required>

                </div>

              </div>

              <!-- ENTRADA PARA EL NUMERO DE TELEFONO -->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-phone"></i></span>

                  <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="nuevoTelefono" placeholder="Teléfono" data-inputmask="'mask':'(999)-999-9999'" data-mask required>

                </div>

              </div>

            </div>

            <!-- ENTRADA PARA EL NUMERO DE CUMPLEAÑOS -->
            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group date dp-date">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-birthday-cake"></i></span>

                  <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="nuevoFechanac" placeholder="Cumpleaños" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

                </div>

              </div>


              <!-- ENTRADA PARA EL TIPO DE CONTRATO -->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-tags"></i></span>

                  <select class="form-control input-lg" name="nuevoContrato" style="border-radius: 5px;" required>

                    <option value="">Tipo de Contrato</option>

                    <option value="Laboral">Horal-Laboral</option>

                    <option value="O.P.S.">O.P.S.</option>

                    <option value="Horas">Por Horas</option>

                    <option value="indefinido">Indefinido</option>

                  </select>

                </div>

              </div>

            </div>

            <!-- ENTRADA PARA EL FECHA DE INGRESO -->
            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group date dp-date">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-calendar"></i></span>

                  <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="nuevoFecingreso" placeholder="Fecha Ingreso" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

                </div>

              </div>

              <!-- ENTRADA PARA LA CONTRASEÑA -->

              <div class="col-xs-6">

                <div class="form-group">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-lock"></i></span>

                    <input type="password" class="form-control input-lg" style="border-radius: 5px;" name="nuevoPassword" placeholder="Ingresar contraseña" required>

                  </div>

                </div>

              </div>

              <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

              <div class="form-group">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-user-o"></i></span>

                    <select class="form-control input-lg" name="nuevoPerfil" style="border-radius: 5px;" required>

                      <option value="">Selecionar Perfil</option>

                      <option value="SuperAdmin">SuperAdmin</option>

                      <option value="Administrador">Administrador</option>

                      <option value="Coordinador">Coordinador</option>

                    </select>

                  </div>

                </div>

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-user-o"></i></span>

                    <select class="form-control input-lg" name="nuevoRol" style="border-radius: 5px;" required>

                      <option value="" id="editarRol">Selecionar Rol</option>

                      <option value="12">Administración</option>

                      <option value="1">Direccionamiento Estratégico</option>

                      <option value="2">Sistemas de Gestión</option>

                      <option value="3">Gestión Jurídica y Asuntos Empresariales</option>

                      <option value="4">Docencia y Servicio</option>

                      <option value="5">Gestión de Servicios de Aseguramiento</option>

                      <option value="6">Gestión Financiera</option>

                      <option value="7">Gestión de Recursos de la Información</option>

                      <option value="8">Gestión de Recursos Físicos</option>

                      <option value="9">Gestión de Recursos Humanos</option>

                      <option value="10">Procesos Asistenciales</option>

                      <option value="11">Procesos de Apoyo</option>

                    </select>

                  </div>

                </div>

              </div>

            </div>


            <!-- ENTRADA PARA SUBIR FOTO -->


            <div class="form-group">

              <div class="input-group">

                <div class="panel">Subir Foto</div>

                <input type="file" class="nuevaFoto" name="nuevaFoto">

                <p class="help-block" style="color: #007bff">Archivos permitidos: JPGE, JPG, PNG</p>

                <img src="vistas/img/usuarios/default/default.png" class="img-thumbnail previsualizar" width="100px" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-info">Guardar usuario</button>

        </div>

        <?php

        $crearUsuario = new ControladorUsuarios();
        $crearUsuario->ctrCrearUsuario();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR USUARIO
======================================-->

<div id="modalEditarUsuario" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content" style="border-radius: 5px;">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background: #ffc107; color:Black; border-top-left-radius: 5px; border-top-right-radius: 5px;">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar usuario</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" style="border-radius: 5px;" id="editarNombre" name="editarNombre">

              </div>

            </div>

            <!-- ENTRADA PARA EL NICK USUARIO -->

            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg" style="border-radius: 5px;" id="editarUsuario" name="editarUsuario">

                </div>

              </div>

              <!-- ENTRADA PARA EL TIPO DOCUMENTO -->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-users"></i></span>

                  <select class="form-control input-lg" style="border-radius: 5px;" name="editarTipodoc">

                    <option value="" id="editarTipodoc">Tipo de Documento</option>

                    <option value="NIT">NIT</option>

                    <option value="C.C.">C.C.</option>

                    <option value="RUT">RUT</option>

                    <option value="NUIP">NUIP</option>

                    <option value="C.E.">C.E.</option>

                  </select>

                </div>

              </div>

            </div>

            <!-- ENTRADA PARA EL NUMERO DE IDENTIFICACION -->
            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="number" class="form-control input-lg" style="border-radius: 5px;" name="editarNumident" id="editarNumident">

                </div>

              </div>

              <!-- ENTRADA PARA EL NUMERO DE TELEFONO -->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-users"></i></span>

                  <input type="text" class="form-control input-lg" id="editarTelefono" style="border-radius: 5px;" name="editarTelefono" data-inputmask="'mask':'999-999-9999'" data-mask required>

                </div>

              </div>

            </div>

            <!-- ENTRADA PARA EL NUMERO DE CUMPLEAÑOS -->
            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group date dp-date">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg" name="editarFechanac" style="border-radius: 5px;" id="editarFechanac" placeholder="Cumpleaños" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>

                </div>

              </div>

              <!-- ENTRADA PARA EL TIPO DE CONTRATO -->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-users"></i></span>

                  <select class="form-control input-lg" style="border-radius: 5px;" name="editarContrato">

                    <option value="" id="editarContrato">Tipo de Contrato</option>

                    <option value="Laboral">Horal-Laboral</option>

                    <option value="O.P.S.">O.P.S.</option>

                    <option value="Horas">Por Horas</option>

                    <option value="indefinido">Indefinido</option>

                  </select>

                </div>

              </div>

            </div>

            <!-- ENTRADA PARA FECHA DE INGRESO -->
            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group date dp-date">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg" style="border-radius:5px" name="editarFecingreso" id="editarFecingreso" placeholder="Fecha Ingreso" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>

                </div>

              </div>

              <!-- ENTRADA PARA LA CONTRASEÑA -->

              <div class="col-xs-6">

                <div class="form-group">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                    <input type="password" class="form-control input-lg" style="border-radius:5px" name="editarPassword" placeholder="Nueva contraseña">

                    <input type="hidden" id="passwordActual" name="passwordActual">

                  </div>

                </div>

              </div>

              <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

              <div class="form-group">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-users"></i></span>

                    <select class="form-control input-lg" style="border-radius:5px" name="editarPerfil">

                      <option value="" id="editarPerfil">Selecionar Perfil</option>

                      <option value="SuperAdmin">SuperAdmin</option>

                      <option value="Administrador">Administrador</option>

                      <option value="Coordinador">Coordinador</option>

                    </select>

                  </div>

                </div>

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-users"></i></span>

                    <select class="form-control input-lg" style="border-radius:5px" name="editarRol" required min=1>

                      <option value="" id="editarRol">Selecionar Rol</option>

                      <option value="1">Administración</option>

                      <option value="2">Direccionamiento Estratégico</option>

                      <option value="3">Sistemas de Gestión</option>

                      <option value="4">Gestión Jurídica y Asuntos Empresariales</option>

                      <option value="5">Docencia y Servicio</option>

                      <option value="6">Gestión de Servicios de Aseguramiento</option>

                      <option value="7">Gestión Financiera</option>

                      <option value="8">Gestión de Recursos de la Información</option>

                      <option value="9">Gestión de Recursos Físicos</option>

                      <option value="10">Gestión de Recursos Humanos</option>

                      <option value="11">Procesos Asistenciales</option>

                      <option value="12">Procesos de Apoyo</option>

                    </select>

                  </div>

                </div>

              </div>

            </div>


            <!-- ENTRADA PARA FOTO -->


            <div class="form-group">

              <div class="input-group">

                <div class="panel">Subir Foto</div>

                <input type="file" class="nuevaFoto" name="editarFoto">

                <p class="help-block" style="color: #007bff">Archivos permitidos: JPGE, JPG, PNG</p>

                <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizarEditar" width="100px">

                <input type="hidden" name="fotoActual" id="fotoActual">

              </div>

            </div>

          </div>

        </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-info">Modificar usuario</button>

        </div>

        <?php

        $editarUsuario = new ControladorUsuarios();
        $editarUsuario->ctrEditarUsuario();

        ?>

      </form>

    </div>

  </div>

</div>
</div>

<?php

$borrarUsuario = new ControladorUsuarios();
$borrarUsuario->ctrBorrarUsuario();

?>