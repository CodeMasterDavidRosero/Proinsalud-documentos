<div class="content-wrapper">

  <section class="content-header">
    
  <div class="modal-content">

  <form role="form" method="post" enctype="multipart/form-data">

    <!--=====================================
    CABEZA DEL MODAL
    ======================================-->


    <section class="content-header" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">

      <h1 style="font-size:36px">Menú Documentos</h1>
    
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

                  <select class="form-control input-lg" name="seleccionarMacroProceso" style="border-radius: 5px;">  

                    <option value="Vendedor"> Seleccione un Macroproceso...</option>
                                     
                    <option value="Vendedor">Macroproceso 1</option>

                    <option value="Vendedor">Macroproceso 2</option>

                    <option value="Vendedor">Macroproceso 3</option>
                  
                  </select>

              </div>

            </div>

            
            <!-- ENTRADA PARA EL PROCESO -->
            
            <div class="form-group">
              
              <div class="input-group col-xs-12">
              
                <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-object-ungroup"></i></span> 

                  <select class="form-control input-lg" name="seleccionarProceso" style="border-radius: 5px;">  
                    
                    <option value="Vendedor">Seleccione un Proceso...</option>
                    
                    <option value="Vendedor">Proceso 1</option>

                    <option value="Vendedor">Proceso 2</option>

                    <option value="Vendedor">Proceso 3</option>
                  
                  </select>

              </div>

            </div>


            <!-- ENTRADA PARA EL GRUPO -->
            
            <div class="form-group">
              
              <div class="input-group col-xs-12">
              
                <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-folder-open-o"></i></span> 

                  <select class="form-control input-lg" name="seleccionarDocumento" style="border-radius: 5px;">  
                    
                    <option value="Vendedor">Seleccione un Grupo...</option>

                    <option value="Vendedor">Grupo 1</option>

                    <option value="Vendedor">Grupo 2</option>

                    <option value="Vendedor">Grupo 3</option>
                  
                  </select>

              </div>

            </div>
          
          </div>
        
        </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="submit" class="btn btn-info" style="margin-right:10px">Filtrar Documentos</button>

        </div>

        <?php

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

        ?>

      </form>

    </div>



</div>
<br>
</section>
</div>

