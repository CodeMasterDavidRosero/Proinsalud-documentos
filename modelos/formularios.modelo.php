<?php

require_once "conexion.php";

class ModeloFormularios{

    /*=============================================
	REGISTRO DE DOCUMENTO
	=============================================*/

	static public function mdlIngresarFormulario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, version, nombre, fecha_elaboracion, fecha_ultima_revision, macroproceso, proceso, grupo, ciclo, usuario, url, origen, vista, relacionados) 
		VALUES (:codigo, :version, :nombre, :fecha_elaboracion, :fecha_ultima_revision, :macroproceso, :proceso, :grupo, :ciclo, :usuario, :url, :origen, :vista, :relacionados)");

		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":version", $datos["version"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);		
		$stmt->bindParam(":fecha_elaboracion", $datos["fecha_elaboracion"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_ultima_revision", $datos["fecha_ultima_revision"], PDO::PARAM_STR);
		$stmt->bindParam(":macroproceso", $datos["macroproceso"], PDO::PARAM_STR);
		$stmt->bindParam(":proceso", $datos["proceso"], PDO::PARAM_STR);
		$stmt->bindParam(":grupo", $datos["grupo"], PDO::PARAM_STR);
		$stmt->bindParam(":ciclo", $datos["ciclo"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":url", $datos["url"], PDO::PARAM_STR);
		$stmt->bindParam(":origen", $datos["origen"], PDO::PARAM_STR);
		$stmt->bindParam(":vista", $datos["vista"], PDO::PARAM_STR);
		$stmt->bindParam(":relacionados", $datos["relacionados"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}
		
		$stmt = null;

	}

    /*=============================================
	ACTUALIZAR REGISTRO DE DOCUMENTO
	=============================================*/

	static public function mdlActualizarFormulario($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}
		
		$stmt = null;

	}
}