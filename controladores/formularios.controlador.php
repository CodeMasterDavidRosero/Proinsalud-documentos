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
			   preg_match('/^[0-9]+$/', $_POST["nuevoMacro"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoProceso"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ, ]+$/', $_POST["nuevoGrupo"]) &&
			   preg_match('/^[0-9]+$/', $_POST["idUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\/\ ]+$/', $_POST["nuevaRuta"])){
	   														
				$tabla = "documentos";
				
				$datos = array("codigo" => $_POST["nuevoCodigo"],
							   "version" => $_POST["nuevaVersion"],
							   "nombre" => $_POST["nuevoNombre"],
							   "fecha_elaboracion" => $_POST["nuevoFecingreso"],
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