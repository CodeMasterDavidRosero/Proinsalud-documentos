<?php

class ControladorDocumentos{

	/*=============================================
	MOSTRAR DOCUMENTO
	=============================================*/

	static public function ctrMostrarDocumentos($item, $valor){

		$tabla = "documentos";

		$respuesta = ModeloDocumentos::MdlMostrarDocumentos($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR DOCUMENTO
	=============================================*/

	static public function ctrEditarDocumento(){

		if(isset($_POST["editarDocumento"])){
			
				$tabla = "documentos";

				if($_POST["editarPassword"] != ""){

					if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])){

						$encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

					}else{

						echo'<script>

								swal({
									  type: "error",
									  title: "¡La contraseña no puede ir vacía o llevar caracteres especiales!",
									  showConfirmButton: true,
									  confirmButtonText: "Cerrar"
									  }).then(function(result){
										if (result.value) {

										window.location = "documentos";

										}
									})

						  	</script>';

					}

				}else{

					$encriptar = $_POST["passwordActual"];

				}

				$datos = array("nombre" => $_POST["editarNombre"],
							   "usuario" => $_POST["editarUsuario"],
							   "password" => $encriptar,
							   "perfil" => $_POST["editarPerfil"]
			);

				$respuesta = ModeloDocumentos::mdlEditarDocumento($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El documento ha sido registrado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "documentos";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El documento no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "formularios";

							}
						})

			  	</script>';

			}

		}

	

	/*=============================================
	BORRAR DOCUMENTO
	=============================================*/

	static public function ctrBorrarDocumento(){

		if(isset($_GET["idDocumento"])){

			$tabla ="documentos";
			$datos = $_GET["idDocumento"];

			if($_GET["rutaDocumento"] != ""){

				unlink($_GET["rutaDocumento"]);
				rmdir('vistas/img/documentos/'.$_GET["nombre"]);

			}

			$respuesta = ModeloDocumentos::mdlBorrarDocumento($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El Documento ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "documentos";

								}
							})

				</script>';

			}		

		}

	}

}
	


