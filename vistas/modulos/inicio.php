<div class="content-wrapper">

  <section class="content-header">
    


<div class="modal-content">

  <form role="form" method="post" enctype="multipart/form-data">

    <!--=====================================
    CABEZA DEL MODAL
    ======================================-->

    <div class="modal-header">

      <h1>Menu Documentos </h1>

    </div>

    <!--=====================================
    CUERPO DEL MODAL
    ======================================-->

    <div class="modal-body">

      <div class="box-body">

        <!-- ENTRADA PARA EL MACRO PROCESO -->
        
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-object-group"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevoMacroProceso" placeholder="Seleccione el Macroproceso" required>

          </div>

        </div>

        <!-- ENTRADA PARA EL PROCESO -->

         <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-object-ungroup"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevoProceso" placeholder="Seleccione el Proceso" id="nuevoUsuario" required>

          </div>

        </div>

        <!-- ENTRADA PARA LA GRUPO -->

         <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-tag"></i></span> 

            <input type="password" class="form-control input-lg" name="nuevoGrupo" placeholder="Ingresar el Grupo" required>

          </div>

        </div>

      
        
      </div>

    </div>

    <!--=====================================
    PIE DEL MODAL
    ======================================-->

    <div class="modal-footer">

      <button type="submit" class="btn btn-primary">Buscar usuario</button>

    </div>

    <?php

      $crearUsuario = new ControladorDocumentos();
      $crearUsuario -> ctrCrearDocumento();

    ?>

  </form>

</div>

 

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->