
/*=============================================
SUBIENDO EL DOCUMENTO
=============================================*/
$(".nuevaRuta").change(function(){

	var documento = this.files[0];
	
	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

  	if(documento["type"] != "documento/xlsx" && documento["type"] != "documento/docx"){

  		$(".nuevaRuta").val("");

  		 swal({
		      title: "Error al subir la documento",
		      text: "¡La documento debe estar en formato Office/PDF/Imagen!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else if(documento["size"] > 20000000){

  		$(".nuevaRuta").val("");

  		 swal({
		      title: "Error al subir la documento",
		      text: "¡La documento no debe pesar más de 20MB!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else{

  		var datosDocumento = new FileReader;
  		datosDocumento.readAsDataURL(documento);

  		$(datosDocumento).on("load", function(event){

  			var rutaDocumento = event.target.result;

  			$(".previsualizar").attr("src", rutaDocumento);

  		})

  	}
})

/*=============================================
EDITAR REGISTRO DOCUMENTO
=============================================*/
$(".tablas").on("click", ".btnEditarDocumento", function(){

	var idDocumento = $(this).attr("idDocumento");
	
	var datos = new FormData();
	datos.append("idDocumento", idDocumento);

	$.ajax({

		url:"ajax/documentos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			/*=============================================
			Traer los valores de la base de datos a editar
			=============================================*/
			
			$("#editarCodigo").val(respuesta["codigo"]);
			$("#editarNombre").val(respuesta["nombre"]);
			$("#editarVersion").val(respuesta["version"]);
			$("#editarMacro").val(respuesta["macroproceso"]);
			$("#editarProceso").val(respuesta["proceso"]);
			$("#editarGrupo").val(respuesta["grupo"]);			
			$("#editarFecingreso").val(respuesta["fecha_elaboracion"]);			
			

		}

	});

})

/*=============================================
REVISAR SI EL DOCUMENTO YA ESTÁ REGISTRADO
=============================================*/

$("#nuevoCodigo").change(function(){

	$(".alert").remove();

	var document = $(this).val();

	var datos = new FormData();
	datos.append("validarDocumento", document);

	 $.ajax({
	    url:"ajax/documentos.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success:function(respuesta){
	    	
	    	if(respuesta){

	    		$("#nuevoCodigo").parent().after('<div class="alert alert-warning">Este documento ya existe en la base de datos</div>');

	    		$("#nuevoCodigo").val("");

	    	}

	    }

	})
})

/*=============================================
ELIMINAR DOCUMENTO
=============================================*/
$(".table").on("click", ".btnEliminarDocumento", function(){

  var idDocumento = $(this).attr("idDocumento");
  var rutaDocumento = $(this).attr("rutaDocumento");
  var nombre = $(this).attr("nombre");

  swal({
    title: '¿Está seguro de borrar el Documento?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar el Documento!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=documentos&idDocumento="+idDocumento+"&nombre="+nombre+"&rutaDocumento="+rutaDocumento;

    }

  })

})

/*=============================================
Calendario DataPicker
=============================================*/
$('.dp-date').datepicker({
    format: "yyyy/mm/dd",
    todayBtn: true,
    language: "es",
    orientation: "bottom auto",
    forceParse: false,
    autoclose: true,
    todayHighlight: true,
    toggleActive: true
});

/*=============================================
EDITAR REGISTRO DOCUMENTO
=============================================*/
$(".tablas").on("click", ".btnAbrirDocumento", function(){

	var idDocumento = $(this).attr("idDocumento");
	
	var datos = new FormData();
	datos.append("idDocumento", idDocumento);

	$.ajax({

		url:"ajax/documentos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			/*=============================================
			Visualizar docuemento
			=============================================*/
			if(respuesta["url"] != ""){

				$(".visualizarDocumento").attr("src", respuesta["url"]);
					
			}

		}

	});

})

