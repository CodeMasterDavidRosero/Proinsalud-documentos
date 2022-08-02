<?php

require_once "../controladores/documentos.controlador.php";
require_once "../modelos/documentos.modelo.php";

class AjaxDocumentos{

	/*=============================================
	EDITAR DOCUMENTO
	=============================================*/	

	public $idDocumento;

	public function ajaxEditarDocumento(){

		$item = "id";
		$valor = $this->idDocumento;

		$respuesta = ControladorDocumentos::ctrMostrarDocumentos($item, $valor);

		echo json_encode($respuesta);

	}	

	/*=============================================
	VALIDAR NO REPETIR DOCUMENTO
	=============================================*/	

	public $validarDocumento;

	public function ajaxValidarDocumento(){

		$item = "codigo";
		$valor = $this->validarDocumento;

		$respuesta = ControladorDocumentos::ctrMostrarDocumentos($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR REGISTRO DOCUMENTOS
=============================================*/
if(isset($_POST["idDocumento"])){

	$editar = new AjaxDocumentos();
	$editar -> idDocumento = $_POST["idDocumento"];
	$editar -> ajaxEditarDocumento();

}


/*=============================================
VALIDAR NO REPETIR DOCUMENTO
=============================================*/

if(isset( $_POST["validarDocumento"])){

	$valDocumento = new AjaxDocumentos();
	$valDocumento -> validarDocumento = $_POST["validarDocumento"];
	$valDocumento -> ajaxValidarDocumento();

}