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
        $('#valorEfectivo12').remove();
        $('#valorEfectivo13').remove();
        $('#valorEfectivo14').remove();
    
        $(".nuevoProcesos").append(
               
            '<div class="input-group" id="valorEfectivo1">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px;" id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;  width:100%" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+
    
            '<option value="1">Gerencia</option>'+
    
            '<option value="2">Control interno</option>'+
    
            '</div>')

            /* OJO LA SOLUCION ES LLEVAR ESTE VALOR A UN INPUT TEXT HIDDEN QUE ALMACENE EL VALOR QUE CAMBIA, LUGO LLEVARLO AL CONTROLADOR*/

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })          
    
    }
    
    if (seleccionMacro == "2"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo2">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un SubProceso--</option>'+

            '<option value="3">Calidad</option>'+

            '<option value="4">Gestión Ambiental</option>'+

            '<option value="5">Seguridad y salud en el trabajo</option>'+

            '<option value="6">SIAU</option>'+     
    
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
            $('#valorEfectivo12').remove();
            $('#valorEfectivo13').remove();
            $('#valorEfectivo14').remove();

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })
    }
    
    if (seleccionMacro == "3"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo3">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+
    
            '<option value="7">Jurídica</option>'+    
            
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
            $('#valorEfectivo12').remove();
            $('#valorEfectivo13').remove();
            $('#valorEfectivo14').remove();

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })          
    
    }
    
    if (seleccionMacro == "4"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo4">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+
    
            '<option value="8">Auditoria asistencial</option>'+       

            '<option value="9">Seguridad del paciente</option>'+

            '<option value="10">Vigilancia epidemiológica</option>'+   
            
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
            $('#valorEfectivo12').remove();
            $('#valorEfectivo13').remove();
            $('#valorEfectivo14').remove();

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })          
    
    }
    
    if (seleccionMacro == "5"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo5">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+
    
            '<option value="11">Citas</option>'+

            '<option value="12">Consulta externa</option>'+

            '<option value="13">Quimioterapia</option>'+

            '<option value="14">Odontología</option>'+
            
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
            $('#valorEfectivo12').remove();
            $('#valorEfectivo13').remove();
            $('#valorEfectivo14').remove();

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })          
    
    }
    
    if (seleccionMacro == "6"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo6">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+
    
            '<option value="15">Promoción y mantenimiento de la salud</option>'+
        
            '<option value="16">Ruta alteraciones nutricionales (SAN - obesidad)</option>'+

            '<option value="17">Ruta de alteraciones y trastornos de la salud bucal</option>'+

            '<option value="18">Ruta de alteraciones y trastornos visuales</option>'+

            '<option value="19">Ruta de alternaciones y trastornos de la audición y comunicación</option>'+

            '<option value="20">Ruta de Cáncer</option>'+

            '<option value="21">Ruta de enfermedades huérfanas</option>'+

            '<option value="22">Ruta de enfermedades infecciosas</option>'+

            '<option value="23">Ruta de enfermedades zoonóticas</option>'+

            '<option value="24">Ruta de Promoción y mantenimiento de la salud</option>'+

            '<option value="25">Ruta de Salud Mental (PSM - Violencia - SPA)</option>'+

            '<option value="26">Ruta enfermedades crónicas (CNT-EPOC)</option>'+

            '<option value="27">Ruta Materno Perinatal</option>'+

            '<option value="28">Ruta trastornos degenerativos neuropatías y enfermedades autoinmunes</option>'+
    
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
            $('#valorEfectivo12').remove();
            $('#valorEfectivo13').remove();
            $('#valorEfectivo14').remove();

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })          
    
    }
    
    if (seleccionMacro == "7"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo7">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+
    
            '<option value="29">Urgencias</option>'+

            '<option value="30">TAB</option>'+
    
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
            $('#valorEfectivo12').remove();
            $('#valorEfectivo13').remove();
            $('#valorEfectivo14').remove();

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })          
    
                
    }
    
    if (seleccionMacro == "8"){
    
        $(".nuevoProcesos").append(

            '<div class="input-group" id="valorEfectivo8">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+
    
            '<option value="31">Imagenología</option>'+

            '<option value="32">Laboratorio</option>'+
    
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
            $('#valorEfectivo12').remove();
            $('#valorEfectivo13').remove();
            $('#valorEfectivo14').remove();

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })          
    
                
    }
    
    if (seleccionMacro == "9"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo9">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+
    
            '<option value="33">Servicio farmacéutico</option>'+       

            '<option value="34">Central de mezclas</option>'+
            
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
            $('#valorEfectivo12').remove();
            $('#valorEfectivo13').remove();
            $('#valorEfectivo14').remove();

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })          
    
    }
    
    if (seleccionMacro == "10"){
    
        $(".nuevoProcesos").append(
    
            '<div class="input-group" id="valorEfectivo10">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+
    
            '<option value="35">Hospitalización</option>'+

            '<option value="36">Home Care</option>'+

            '<option value="37">UCIA</option>'+

            '<option value="38">UCIN</option>'+

            '<option value="39">Quirófano</option>'+
            
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
            $('#valorEfectivo12').remove();
            $('#valorEfectivo13').remove();
            $('#valorEfectivo14').remove();

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })          
    
    }
    
    if (seleccionMacro == "11"){
    
        $(".nuevoProcesos").append(


            '<div class="input-group" id="valorEfectivo11">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+
    
            '<option value="40">Medicina laboral</option>'+

            '<option value="41">Coordinación de municipios</option>'+

            '<option value="42">Habilitación</option>'+

            '<option value="43">Registro y control</option>'+

            '<option value="44">Referencia</option>'+

            '<option value="45">Cuentas médicas</option>'+

            '<option value="46">Gestión de red</option>'+
    
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
            $('#valorEfectivo12').remove();
            $('#valorEfectivo13').remove();
            $('#valorEfectivo14').remove();

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })          
    
    }

    if (seleccionMacro == "12"){
    
        $(".nuevoProcesos").append(


            '<div class="input-group" id="valorEfectivo12">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+
    
            '<option value="47">Compras</option>'+

            '<option value="48">Suministros</option>'+
            
            '<option value="59">Contabilidad</option>'+

            '<option value="50">Costos</option>'+

            '<option value="51">Cartera</option>'+

            '<option value="52">Facturación</option>'+

            '<option value="53">Pagaduría</option>'+
    
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
            $('#valorEfectivo11').remove();
            $('#valorEfectivo13').remove();
            $('#valorEfectivo14').remove();

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })          
    
    }

    if (seleccionMacro == "13"){
    
        $(".nuevoProcesos").append(


            '<div class="input-group" id="valorEfectivo13">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+
    
            '<option value="54">Mantenimiento y apoyo logístico</option>'+
    
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
            $('#valorEfectivo11').remove();
            $('#valorEfectivo12').remove();
            $('#valorEfectivo14').remove();

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })          
    
    }

    if (seleccionMacro == "14"){
    
        $(".nuevoProcesos").append(


            '<div class="input-group" id="valorEfectivo14">'+ 
    
            '<span class="input-group-addon" style="border-radius:5px; id="iconSelProceso"><i class="fa fa-object-ungroup"></i></span>'+
    
            '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 
    
            '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+
    
            '<option value="55">Sistemas</option>'+

            '<option value="56">Estadística</option>'+

            '<option value="57">Gestión documental e historias clínicas</option>'+
    
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
            $('#valorEfectivo11').remove();
            $('#valorEfectivo12').remove();
            $('#valorEfectivo13').remove();

            $("#SelProce").change(function(){

                var valores = $(this).val()

                $("#nuevoProceso").val(valores);            
                
            })          
    
    }

    
    
    })

/*=========================================
VERIFICAR EL VALUE DE PROCESOS
=========================================*/

