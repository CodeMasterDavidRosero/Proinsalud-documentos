<?php
#LLAMADA A CONTROLADORES
require_once "controladores/plantilla.controlador.php";
require_once "controladores/documentos.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/roles.controlador.php";
require_once "controladores/formularios.controlador.php";

#LLAMADA A MODELOS
require_once "modelos/documentos.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/formularios.modelo.php";
require_once "modelos/roles.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();