<div class="content-wrapper">

  <section class="content-header">

    <form role="form" method="post" enctype="multipart/form-data">

      <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

      <section class="content-header" style="border-top-left-radius: 5px; border-top-right-radius: 5px; margin-left: 100px; margin-right:100px;">

        <h1 style="font-size:36px;">Menú Documentos</h1>

        <ol class="breadcrumb">

          <li><a href="documentos"><i class="fa fa-file-text"></i>Plantilla Tablas</a></li>

          <li><a href="formularios"><i class="fa fa-plus"></i>Plantilla Formularios</a></li>

        </ol>

      </section>

    </form>

    <div class="modal-content" style="margin-left: 100px; margin-right:100px;">

      <form role="form" method="post" enctype="multipart/form-data">

        <br>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL MACROPROCESO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-object-group"></i></span>

                <select class="form-control input-lg" name="selMacro" id="selMacro" style="border-radius: 5px;" required>

                  <br>

                  <br>

                  <option value="" id="" selected disabled>--Seleccionar Proceso--</option>

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

                <input type="hidden" name="idUsuario" value="<?php echo $_SESSION["id"]; ?>" id="idUsuario">

                <input type="hidden" name="idRol" value="<?php echo $_SESSION["roles"]; ?>" id="idRol">

              </div>

            </div>

            <!-- ENTRADA PARA EL PROCESO DINAMICAMENTE-->

            <br>

            <br>

            <div class="input-group" style="width: 100%;">

              <div class=" input-group selProcesos" style="width: 100%;">

                <span class="input-group-addon" style="border-radius: 5px;" id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>

                <select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>

                  <option value="" selected disabled>--Selecionar un Subproceso--</option>

                </select>

              </div>
            
            </div>
          
          </div>

          <br>

          <!--=====================================
          PIE DEL MODAL
          ======================================-->

          <div class="modal-footer">

            <br>

            <button type="submit" class="btn btn-info"><a href="documentos">Filtrar Documentos</a></button>

          </div>
        
        </form>
        
        <br>
      
      </div>
    
    </div>
    
    <br>
  
  </section>

</div>