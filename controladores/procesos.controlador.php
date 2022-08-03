<?php

class ControladorProcesos{


    /*=============================================
	MOSTRAR PROCESOS
	=============================================*/

	static public function ctrMostrarProcesos($item, $valor){

		$tabla = "procesos";

		$respuesta = ModeloProcesos::MdlMostrarProcesos($tabla, $item, $valor);

		return $respuesta;
	}
}