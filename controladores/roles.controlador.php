<?php

class ControladorRoles{


    /*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarRoles($item, $valor){

		$tabla = "roles";

		$respuesta = ModeloRoles::MdlMostrarRoles($tabla, $item, $valor);

		return $respuesta;
	}
}
