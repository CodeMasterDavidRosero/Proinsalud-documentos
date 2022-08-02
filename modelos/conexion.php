<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=documentos",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}


}

/*<?php



class Conexion{



	static public function conectar(){



		$miconexion=new PDO('mysql:host=190.8.176.51; dbname=proinsal_apps_dev', 'proinsal_dev', 'pr01nsal_dev');

		$miconexion->exec("SET NAMES 'utf8';");

		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	



		return $miconexion;



	}



}*/