<div class="content-wrapper">

  <section class="content-header">
    
  <div class="modal-content">

  <form role="form" method="post" enctype="multipart/form-data">

    <!--=====================================
    CABEZA DEL MODAL
    ======================================-->

    <section class="content-header" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">

      <h1 style="font-size:30px">Formulario Carga Documentos</h1>
    
    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-list-ol"></i>Menu Documentos</a></li>
    
      <li><a href="documentos"><i class="fa fa-plus"></i>Plantilla Tablas</a></li>
    
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

            <!-- ENTRADA PARA EL NOMBRE-->

            <div class="form-group row">

             <div class="col-xs-8">
  
              <div class="input-group">
              
                <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-file-text"></i></span> 

                <input type="text" class="form-control input-lg" style="border-radius: 5px;" name="nuevoNombre" placeholder="Nombre del documento" id="nuevoNombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA VERSION DOCUMENTO -->

            <div class="col-xs-4">
                          
              <div class="input-group">
              
                <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-pencil-square-o"></i></span> 

                <input type="number" class="form-control input-lg" style="border-radius: 5px;" name="nuevaVersion" min="1" placeholder="Versión del documento" id="nuevaVersion" required>

              </div>

            </div>

            </div>

            <!-- ENTRADA PARA EL MACROPROCESO-->

            <div class="form-group row">

             <div class="col-xs-6">
  
              <div class="input-group">
              
              <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-object-group"></i></span> 

                  <select class="form-control input-lg" name="seleccionarMacroProceso" style="border-radius: 5px;">  

                    <option value="Vendedor"> Seleccione un Macroproceso...</option>
                                    
                    <option value="Vendedor">Macroproceso 1</option>

                    <option value="Vendedor">Macroproceso 2</option>

                    <option value="Vendedor">Macroproceso 3</option>

                  </select>

              </div>

            </div>

              <!-- ENTRADA PARA EL PROCESO-->

            <div class="col-xs-6">
                          
              <div class="input-group">
              
              <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-object-ungroup"></i></span> 

                  <select class="form-control input-lg" name="seleccionarProceso" style="border-radius: 5px;" require>  
                    
                    <option value="Vendedor">Seleccione un Proceso...</option>
                    
                    <option value="Vendedor">Proceso 1</option>

                    <option value="Vendedor">Proceso 2</option>

                    <option value="Vendedor">Proceso 3</option>

                  </select>

              </div>

            </div>

          </div>

          <!-- ENTRADA PARA EL GRUPO -->

          <div class="form-group row">

            <div class="col-xs-6">

            <div class="input-group">
                        
            <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-folder-open-o"></i></span> 

              <select class="form-control input-lg" name="seleccionarGrupo" style="border-radius: 5px;">  
                
                <option value="Vendedor">Seleccione un Grupo...</option>

                <option value="Vendedor">Grupo 1</option>

                <option value="Vendedor">Grupo 2</option>

                <option value="Vendedor">Grupo 3</option>

              </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL FECHA DE ELABORACION -->

            <div class="col-xs-6">
                          
              <div class="input-group date dp-date">

                <span class="input-group-addon" style="border-radius: 5px;"><i class="fa fa-calendar"></i></span> 
                
                <input type="date" class="form-control input-lg" style="border-radius: 5px;" name="nuevoFechaElaboracion" placeholder="Fecha de Elaboración"
                
                data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>
              
              </div>

            </div>

          </div>

            <!-- ENTRADA PARA SUBIR EL DOCUMENTO -->
            <br>

            <br>
            

            <div class="form-group">
              
              <div class="input-group">
                       
              <div class="panel">SUBIR DOCUMENTO</div>

              <input type="file" class="nuevaFoto" name="nuevaFoto">

              <p class="help-block" style="color: rgb(0 123 255); font-size:12px">Tipo de Archivo: <b>WORD, EXCEL, PDF, PPT</b></p>
              
              </div>

             </div>

             </div>
    
            </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="submit" class="btn btn-info" style="margin-right:10px">Guardar Documento</button>

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

