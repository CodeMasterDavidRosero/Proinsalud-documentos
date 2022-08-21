/*=========================================
SUBIR EL DOCUMENTO
=========================================*/
$(".rutaDocumento").change(function(){

	var documento = this.files[0];
    console.log("documento", documento);
	
        /*=========================================
        SUBIR EL DOCUMENTO
        =========================================*/
        if(documento["type"]  != "application/msword" && documento["type"] != "application/vnd.openxmlformats-officedocument.wordprocessingml.document" &&
        documento["type"] != "application/vnd.ms-excel" && documento["type"] !="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" &&
        documento["type"] != "application/vnd.ms-powerpoint" && documento["type"] != "application/vnd.openxmlformats-officedocument.presentationml.presentation" &&
        documento["type"] != "image/jpeg" && documento["type"] != "image/png" &&
        documento["type"] != "application/pdf"){

            $(".rutaDocumento").val("");

            swal({
                title: "¡Formato de documento No permitido!",
                text: "Por favor, verifique el tipo de archivo...",
                type: "error",
                confirmButtonText: "¡Cerrar!"
              }); 
        } else if(documento["size"]> 20000000){

            $(".rutaDocumento").val("");            

            swal({
                title: "¡Tamaño de Documento No permitido!",
                text: "Por favor, verifique el tamaño maximo permitido...",
                type: "error",
                confirmButtonText: "¡Cerrar!"
              });       
        } else{
            var datosDocumento = new FileReader;
            datosDocumento.readAsDataURL(documento);

        }

})

/*=============================================
Lista Desplegable Dinamica, Macroprocesos INICIO
=============================================*/

$("#nuevoMacro").change(function(){

    var seleccionMacro = $(this).val();        
    
    if (seleccionMacro == "1"){

        $('#SelProce').remove();
        $('#iconSelProceso').remove();            
        $('#valorEfectivo2').remove();
        $('#valorEfectivo3').remove();
        $('#valorEfectivo4').remove();
        $('#valorEfectivo5').remove();
        $('#valorEfectivo6').remove();
        $('#valorEfectivo7').remove();
        $('#valorEfectivo8').remove();
        $('#valorEfectivo9').remove();
        $('#valorEfectivo10').remove();
        $('#valorEfectivo11').remove();
    
        $(".nuevoProcesos").append(
               
            '<div class="input-group" id="valorEfectivo1">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px;" id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;  width:100%" required>'+ 
    
            '<option value="" readonly>--Selecionar un proceso--</option>'+
    
            '<option value="1">Gerencia</option>'+
    
            '<option value="2">Control Interno</option>'+
    
            '</div>')          
    
    }
    
    if (seleccionMacro == "2"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo2">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" readonly>--Selecionar un proceso--</option>'+
    
            '<option value="3">Gestión Calidad</option>'+
    
            '<option value="4">SIAU</option>'+
    
            '<option value="5">Seguridad del paciente</option>'+
    
            '<option value="6">Auditoría Asistencial</option>'+
    
            '<option value="7">Gestión Ambiental</option>'+
    
            '<option value="8">Seguridad y Salud en el trabajo</option>'+
    
            '</div>')

            $('#SelProce').remove();
            $('#iconSelProceso').remove(); 
            $('#valorEfectivo1').remove();
            $('#valorEfectivo3').remove();
            $('#valorEfectivo4').remove();
            $('#valorEfectivo5').remove();
            $('#valorEfectivo6').remove();
            $('#valorEfectivo7').remove();
            $('#valorEfectivo8').remove();
            $('#valorEfectivo9').remove();
            $('#valorEfectivo10').remove();
            $('#valorEfectivo11').remove();
    }
    
    if (seleccionMacro == "3"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo3">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" readonly>--Selecionar un proceso--</option>'+
    
            '<option value="9">Gestión jurídica y asuntos empresariales</option>'+       
            
            '</div>')
            
            $('#SelProce').remove();
            $('#iconSelProceso').remove(); 
            $('#valorEfectivo1').remove();
            $('#valorEfectivo2').remove();
            $('#valorEfectivo4').remove();
            $('#valorEfectivo5').remove();
            $('#valorEfectivo6').remove();
            $('#valorEfectivo7').remove();
            $('#valorEfectivo8').remove();
            $('#valorEfectivo9').remove();
            $('#valorEfectivo10').remove();
            $('#valorEfectivo11').remove();
    }
    
    if (seleccionMacro == "4"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo4">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" readonly>--Selecionar un proceso--</option>'+
    
            '<option value="10">Docencia y servicio</option>'+       
            
            '</div>')
            
            $('#SelProce').remove();
            $('#iconSelProceso').remove(); 
            $('#valorEfectivo1').remove();
            $('#valorEfectivo2').remove();
            $('#valorEfectivo3').remove();
            $('#valorEfectivo5').remove();
            $('#valorEfectivo6').remove();
            $('#valorEfectivo7').remove();
            $('#valorEfectivo8').remove();
            $('#valorEfectivo9').remove();
            $('#valorEfectivo10').remove();
            $('#valorEfectivo11').remove();
    }
    
    if (seleccionMacro == "5"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo5">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" readonly>--Selecionar un proceso--</option>'+
    
            '<option value="11>Coodinación Departamental</option>'+
    
            '<option value="12">Coordinación Municipios</option>'+
    
            '<option value="13">Referencia - Contrarreferencia</option>'+
    
            '<option value="14">Cuentas Médicas</option>'+
    
            '<option value="15">Registro y Control</option>'+
            
            '</div>')
            
            $('#SelProce').remove();
            $('#iconSelProceso').remove(); 
            $('#valorEfectivo1').remove();
            $('#valorEfectivo2').remove();
            $('#valorEfectivo3').remove();
            $('#valorEfectivo4').remove();
            $('#valorEfectivo6').remove();
            $('#valorEfectivo7').remove();
            $('#valorEfectivo8').remove();
            $('#valorEfectivo9').remove();
            $('#valorEfectivo10').remove();
            $('#valorEfectivo11').remove();
    }
    
    if (seleccionMacro == "6"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo6">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" readonly>--Selecionar un proceso--</option>'+
    
            '<option value="16">Contabilidad</option>'+
    
            '<option value="17">Cartera</option>'+
    
            '<option value="18">Pagaduría</option>'+
    
            '<option value="19">Facturación</option>'+
    
            '<option value="20">Compras</option>'+
    
            '<option value="21">Suministros</option>'+
    
            '<option value="22">Costos</option>'+
    
            '</div>')
    
            $('#SelProce').remove();
            $('#iconSelProceso').remove(); 
            $('#valorEfectivo1').remove();
            $('#valorEfectivo2').remove();
            $('#valorEfectivo3').remove();
            $('#valorEfectivo4').remove();
            $('#valorEfectivo5').remove();
            $('#valorEfectivo7').remove();
            $('#valorEfectivo8').remove();
            $('#valorEfectivo9').remove();
            $('#valorEfectivo10').remove();
            $('#valorEfectivo11').remove();
    }
    
    if (seleccionMacro == "7"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo7">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" readonly>--Selecionar un proceso--</option>'+
    
            '<option value="23">Sistemas</option>'+
    
            '<option value="24">Estadística</option>'+
    
            '<option value="25">Gestión Documental</option>'+
    
            '</div>')

            $('#SelProce').remove();
            $('#iconSelProceso').remove(); 
            $('#valorEfectivo1').remove();
            $('#valorEfectivo2').remove();
            $('#valorEfectivo3').remove();
            $('#valorEfectivo4').remove();
            $('#valorEfectivo5').remove();
            $('#valorEfectivo6').remove();
            $('#valorEfectivo8').remove();
            $('#valorEfectivo9').remove();
            $('#valorEfectivo10').remove();
            $('#valorEfectivo11').remove();
                
    }
    
    if (seleccionMacro == "8"){
    
        $(".nuevoProcesos").append(

            '<div class="input-group" id="valorEfectivo8">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" readonly>--Selecionar un proceso--</option>'+
    
            '<option value="26">Mantenimiento Biométrico e infraestructura</option>'+
    
            '<option value="27">Investigación, Desarrollo E Innovación</option>'+
    
            '<option value="28">Apoyo Logístico</option>'+
    
            '</div>')

            $('#SelProce').remove();
            $('#iconSelProceso').remove(); 
            $('#valorEfectivo1').remove();
            $('#valorEfectivo2').remove();
            $('#valorEfectivo3').remove();
            $('#valorEfectivo4').remove();
            $('#valorEfectivo5').remove();
            $('#valorEfectivo6').remove();
            $('#valorEfectivo7').remove();
            $('#valorEfectivo9').remove();
            $('#valorEfectivo10').remove();
            $('#valorEfectivo11').remove();
                
    }
    
    if (seleccionMacro == "9"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo9">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" readonly>--Selecionar un proceso--</option>'+
    
            '<option value="29">Gestión de Recursos Humanos</option>'+       
            
            '</div>')

            $('#SelProce').remove();
            $('#iconSelProceso').remove();     
            $('#valorEfectivo1').remove();
            $('#valorEfectivo2').remove();
            $('#valorEfectivo3').remove();
            $('#valorEfectivo4').remove();
            $('#valorEfectivo5').remove();
            $('#valorEfectivo6').remove();
            $('#valorEfectivo7').remove();
            $('#valorEfectivo8').remove();
            $('#valorEfectivo10').remove();
            $('#valorEfectivo11').remove();
    }
    
    if (seleccionMacro == "10"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo10">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" readonly>--Selecionar un proceso--</option>'+
    
            '<option value="30>Procesos prioritarios</option>'+
    
            '<option value="31">Rutas integrales de atención en Salud</option>'+
    
            '<option value="32">Vigilancia epidemiológica</option>'+
    
            '<option value="33">Guías de práctica clínica</option>'+
    
            '<option value="34">Procesos (SF, BPM, BPE, LAB, IMAG, CITAS)</option>'+
            
            '</div>')

            $('#SelProce').remove();
            $('#iconSelProceso').remove();     
            $('#valorEfectivo1').remove();
            $('#valorEfectivo2').remove();
            $('#valorEfectivo3').remove();
            $('#valorEfectivo4').remove();
            $('#valorEfectivo5').remove();
            $('#valorEfectivo6').remove();
            $('#valorEfectivo7').remove();
            $('#valorEfectivo8').remove();
            $('#valorEfectivo9').remove();
            $('#valorEfectivo11').remove();
    }
    
    if (seleccionMacro == "11"){
    
        $(".nuevoProcesos").append(


            '<div class="input-group" id="valorEfectivo11">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" readonly>--Selecionar un proceso--</option>'+
    
            '<option value="35">Citas</option>'+
    
            '<option value="36">IEC</option>'+
    
            '</div>')

            $('#SelProce').remove();
            $('#iconSelProceso').remove();             
            $('#valorEfectivo1').remove();
            $('#valorEfectivo2').remove();
            $('#valorEfectivo3').remove();
            $('#valorEfectivo4').remove();
            $('#valorEfectivo5').remove();
            $('#valorEfectivo6').remove();
            $('#valorEfectivo7').remove();
            $('#valorEfectivo8').remove();
            $('#valorEfectivo9').remove();
            $('#valorEfectivo10').remove();
    }
    
    })

