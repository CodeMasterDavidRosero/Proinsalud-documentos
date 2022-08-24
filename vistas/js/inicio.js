/*=============================================
Lista Desplegable Dinamica, Macroprocesos INICIO
=============================================*/

$("#selMacro").change(function(){

var seleccionMacro = $(this).val();

if (seleccionMacro == "1"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo1">'+ 

        '<span class="input-group-addon" style="border-radius:5px;"><i class="fa fa-object-ungroup"></i></span>'+

        '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 

        '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+

        '<option value="1">Gerencia</option>'+

        '<option value="2">Control interno</option>'+

        '</div>')

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
        

}

if (seleccionMacro == "2"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo2">'+ 

        '<span class="input-group-addon" style="border-radius:5px; id="span1"><i class="fa fa-object-ungroup"></i></span>'+

        '<select class="form-control input-lg" name="SelProce" id="SelProce" style="border-radius: 5px;" required>'+ 

        '<option value="" selected disabled>--Selecionar un Subproceso--</option>'+

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
}

if (seleccionMacro == "3"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo3">'+ 

        '<span class="input-group-addon" style="border-radius:5px; id="span1"><i class="fa fa-object-ungroup"></i></span>'+

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
}

if (seleccionMacro == "4"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo4">'+ 

        '<span class="input-group-addon" style="border-radius:5px; id="span1"><i class="fa fa-object-ungroup"></i></span>'+

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
}

if (seleccionMacro == "5"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo5">'+ 

        '<span class="input-group-addon" style="border-radius:5px; id="span1"><i class="fa fa-object-ungroup"></i></span>'+

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
}

if (seleccionMacro == "6"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo6">'+ 

        '<span class="input-group-addon" style="border-radius:5px; id="span1"><i class="fa fa-object-ungroup"></i></span>'+

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
}

if (seleccionMacro == "7"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo7">'+ 

        '<span class="input-group-addon" style="border-radius:5px;"><i class="fa fa-object-ungroup"></i></span>'+

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
            
}

if (seleccionMacro == "8"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo8">'+ 

        '<span class="input-group-addon" style="border-radius:5px;"><i class="fa fa-object-ungroup"></i></span>'+

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
            
}

if (seleccionMacro == "9"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo9">'+ 

        '<span class="input-group-addon" style="border-radius:5px; id="span1"><i class="fa fa-object-ungroup"></i></span>'+

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
}

if (seleccionMacro == "10"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo10">'+ 

        '<span class="input-group-addon" style="border-radius:5px; id="span1"><i class="fa fa-object-ungroup"></i></span>'+

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
}

if (seleccionMacro == "11"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo11">'+ 

        '<span class="input-group-addon" style="border-radius:5px;"><i class="fa fa-object-ungroup"></i></span>'+

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
}

if (seleccionMacro == "12"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo12">'+ 

        '<span class="input-group-addon" style="border-radius:5px;"><i class="fa fa-object-ungroup"></i></span>'+

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
}

if (seleccionMacro == "13"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo13">'+ 

        '<span class="input-group-addon" style="border-radius:5px;"><i class="fa fa-object-ungroup"></i></span>'+

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
}

if (seleccionMacro == "14"){

    $(".selProcesos").append(

        '<div class="input-group col-xs-12" id="valorEfectivo14">'+ 

        '<span class="input-group-addon" style="border-radius:5px;"><i class="fa fa-object-ungroup"></i></span>'+

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
}

})