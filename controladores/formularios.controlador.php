<?php

class ControladorFormularios{

	/*=============================================
	REGISTRO DE DOCUMENTO
	=============================================*/

	public function ctrCrearFormulario(){

		if(isset($_POST["nuevoNombre"])){

			if(preg_match('/^[0-9]+$/', $_POST["nuevoCodigo"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevaVersion"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
			   preg_match('/^[0-9\/]+$/', $_POST["nuevoFecingreso"]) &&
			   preg_match('/^[0-9\/]+$/', $_POST["nuevaFechaUltimaRev"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoMacro"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoProceso"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ, ]+$/', $_POST["nuevoGrupo"]) &&
			   preg_match('/^[0-9]+$/', $_POST["idUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCiclo"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoOrigen"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoVista"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoRelacionados"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\/\ ]+$/', $_POST["nuevaRuta"])){

				/*=============================================
				VALIDACION DE DOCUMENTO
				=============================================*/
							
				if(isset($_FILES["rutaDocumento"]["tmp_name"])){

						$nombreTmp = $_FILES["rutaDocumento"]["tmp_name"];
				
						$nuevoNombreDoc = $_FILES["rutaDocumento"]["name"];

						/*=============================================
						DIRECTORIO DE RUTA LOCAL ALMACENAMIENTO
						=============================================*/
	
						$directorio = 'vistas/documentos/';

						/*=============================================
						GUARDAR EL DOCUMENTO
						=============================================*/

						$destino = 'vistas/documentos/'.$nuevoNombreDoc;
						
						if(!file_exists($directorio)){

						mkdir($directorio, 0755, true);

						}
						
						move_uploaded_file($nombreTmp, $destino);
	
						
	
				}
			
				$tabla = "documentos";
				
				$datos = array("codigo" => $_POST["nuevoCodigo"],
							   "version" => $_POST["nuevaVersion"],
							   "nombre" => $_POST["nuevoNombre"],
							   "fecha_elaboracion" => $_POST["nuevoFecingreso"],
							   "fecha_ultima_revision" => $_POST["nuevaFechaUltimaRev"],
							   "macroproceso" => $_POST["nuevoMacro"],
							   "proceso" => $_POST["nuevoProceso"],
							   "grupo" => $_POST["nuevoGrupo"],
							   "usuario" => $_POST["idUsuario"],
							   "ciclo" => $_POST["nuevoCiclo"],
							   "origen" => $_POST["nuevoOrigen"],
							   "vista" => $_POST["nuevoVista"],
							   "relacionados" => $_POST["nuevoRelacionados"],
							   "url" => $destino);
							   

				$respuesta = ModeloFormularios::mdlIngresarFormulario($tabla, $datos);
						
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "formularios";

						}

					});
				

					</script>';
					

				}	


			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡El Documento No ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "formularios";

						}

					});
				

				</script>';

			}


		}
	}
}