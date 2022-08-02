<div class="content-wrapper">

  <section class="content-header">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
    CABEZA DEL MODAL
    ======================================-->


        <section class="content-header" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">

          <h1 style="font-size:30px;">Menú Documentos</h1>

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

                    <option value="vacio" id="editarRol">--Seleccionar Macroproceso--</option>

                    <option value="mp2">Direccionamiento Estratégico</option>

                    <option value="mp3">Sistemas de Gestión</option>

                    <option value="mp4">Gestión Jurídica y Asuntos Empresariales</option>

                    <option value="mp5">Docencia y Servicio</option>

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


              <!-- ENTRADA PARA EL PROCESO -->

              <div class="form-group">

                <div class="input-group col-xs-12">

                  <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-object-ungroup"></i></span>

                  <select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;">

                  <option name="selProceso">Seleccione un Proceso...</option>

                      <?php

                      $item = null;
                      $valor = null;
                      $seleccion = 3;

                      $roles = ControladorRoles::ctrMostrarRoles($item, $valor);

                      foreach ($roles as $key => $value) {

                        if (($value["menu_id"]) == $seleccion) {

                          echo '<option value="' . $value["menu_id"] . '">' . $value["rol"] . '</option>';
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

                  <option value="Vendedor">Seleccione un Grupo...</option>

                  <option value="Procedimientos, instructivos, formatos, etc">Procedimientos, instructivos, formatos, etc</option>

                  <option value="TS, HOS, URG, UCIN, ETC, SST">TS, HOS, URG, UCIN, ETC, SST</option>

                  <option value="RMPN, REPOC, ETC">RMPN, REPOC, ETC</option>

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