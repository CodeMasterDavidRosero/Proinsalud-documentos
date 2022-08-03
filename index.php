<?php
#LLAMADA A CONTROLADORES
require_once "controladores/plantilla.controlador.php";
require_once "controladores/documentos.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/macros.controlador.php";
require_once "controladores/procesos.controlador.php";
require_once "controladores/carpetas.controlador.php";
require_once "controladores/formularios.controlador.php";

#LLAMADA A MODELOS
require_once "modelos/documentos.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/formularios.modelo.php";
require_once "modelos/macros.modelo.php";
require_once "modelos/procesos.modelo.php";
require_once "modelos/carpetas.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();