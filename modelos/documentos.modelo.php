<?php

require_once "conexion.php";

class ModeloDocumentos{


	/*=============================================
	MOSTRAR DOCUMENTOS
	=============================================*/

	static public function mdlMostrarDocumentos($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}	

	/*=============================================
	EDITAR REGISTRO DE DOCUMENTO
	=============================================*/

	static public function mdlEditarDocumento($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET version = :version, nombre = :nombre, fecha_elaboracion = :fecha_elaboracion, macroproceso = :macroproceso, proceso = :proceso, grupo = :grupo, usuario = :usuario, url = :url WHERE codigo = :codigo");

		$stmt -> bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt -> bindParam(":version", $datos["version"], PDO::PARAM_STR);
		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":fecha_elaboracion", $datos["fecha_elaboracion"], PDO::PARAM_STR);
		$stmt -> bindParam(":macroproceso", $datos["macroproceso"], PDO::PARAM_STR);
		$stmt -> bindParam(":proceso", $datos["proceso"], PDO::PARAM_STR);
		$stmt -> bindParam(":grupo", $datos["grupo"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		
		
		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR REGISTRO DE DOCUMENTO
	=============================================*/

	static public function mdlActualizarDocumento($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR DOCUMENTO
	=============================================*/

	static public function mdlBorrarDocumento($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}		

		$stmt = null;


	}

}