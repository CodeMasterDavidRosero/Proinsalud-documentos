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

       foreach ($documentos as $key => $value){
         
          echo ' <tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["codigo"].'</td>
                  <td>'.$value["version"].'</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["fecha_elaboracion"].'</td>
                  <td>'.$value["fecha_actualizacion"].'</td>
                  <td>'.$value["fecha_ultima_revision"].'</td>
                  <td>'.$value["fecha_publicacion"].'</td>
                  <td>'.$value["macroproceso"].'</td>
                  <td>'.$value["proceso"].'</td>
                  <td>'.$value["grupo"].'</td>
                  <td>'.$value["usuario"].'</td>
                  <td>'.$value["url"].'</td>';
                  
                                    
                  echo '<td>
                      
                  <div class="btn-group">
                        
                      <button class="btn btn-success btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-download"></i></button>

                      <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" usuario="'.$value["usuario"].'"><i class="fa fa-times"></i></button>

                      <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>

                      <button class="btn btn-primary btnEliminarUsuario" idUsuario="'.$value["id"].'" usuario="'.$value["usuario"].'"><i class="fa fa-eye"></i></button>

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

<!--=====================================
MODAL EDITAR USUARIO
======================================-->

<div id="modalEditarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

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

                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="" readonly>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">

                <input type="hidden" id="passwordActual" name="passwordActual">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="editarPerfil">
                  
                  <option value="" id="editarPerfil"></option>

                  <option value="Administrador">Administrador</option>

                  <option value="Especial">Especial</option>

                  <option value="Vendedor">Vendedor</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="editarFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

              <input type="hidden" name="fotoActual" id="fotoActual">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar usuario</button>

        </div>

     <?php

          $editarUsuario = new ControladorDocumentos();
          $editarUsuario -> ctrEditarDocumento();

        ?> 

      </form>

    </div>

  </div>

</div>
<br>

</div>




