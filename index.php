<?php
#LLAMADA A CONTROLADORES
require_once "controladores/plantilla.controlador.php";
require_once "controladores/documentos.controlador.php";
require_once "controladores/usuarios.controlador.php";

#LLAMADA A MODELOS
require_once "modelos/documentos.modelo.php";
require_once "modelos/usuarios.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();