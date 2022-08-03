<?php

class ControladorCarpetas{


    /*=============================================
	MOSTRAR CARPETAS
	=============================================*/

	static public function ctrMostrarCarpetas($item, $valor){

		$tabla = "carpetas";

		$respuesta = ModeloCarpetas::MdlMostrarCarpetas($tabla, $item, $valor);

		return $respuesta;
	}
}