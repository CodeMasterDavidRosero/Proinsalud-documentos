<?php

class ControladorFormularios{
/*=============================================
	REGISTRO DE DOCUMENTO
	=============================================*/

	static public function ctrCrearFormulario(){

		if(isset($_POST["nuevoCodigo"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCodigo"]) &&
			   preg_match('/^[0-9 ]+$/', $_POST["nuevaVersion"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ()\-0-9 ]+$/', $_POST["nuevoFechaElaboracion"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoMacro"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoProceso"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoGrupo"]) &&
			   preg_match('/^[0-9 ]+$/', $_POST["idUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaRuta"])){
	   						
								
				$tabla = "documentos";
				
				$datos = array("codigo" => $_POST["nuevoCodigo"],
							   "version" => $_POST["nuevaVersion"],
							   "nombre" => $_POST["nuevoNombre"],
							   "fecha_elaboracion" => $_POST["nuevoFechaElaboracion"],
							   "macroproceso" => $_POST["nuevoMacro"],
							   "proceso" => $_POST["nuevoProceso"],
							   "grupo" => $_POST["nuevoGrupo"],
							   "usuario" => $_POST["idUsuario"],							   					           					   
							   "url" => $_POST["nuevaRuta"],
					           );

				$respuesta = ModeloFormularios::mdlIngresarFormulario($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El Documento ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "documentos";

						}

					});
				

					</script>';


				}	


			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡El Documento no puede ir vacío o llevar caracteres especiales!",
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