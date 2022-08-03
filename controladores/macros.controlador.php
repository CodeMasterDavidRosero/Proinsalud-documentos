<?php

class ControladorMacros{


    /*=============================================
	MOSTRAR MACROPROCESOS
	=============================================*/

	static public function ctrMostrarMacros($item, $valor){

		$tabla = "macros";

		$respuesta = ModeloMacros::MdlMostrarMacros($tabla, $item, $valor);

		return $respuesta;
	}
}
