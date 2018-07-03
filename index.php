<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/core.php";
require_once "controladores/rutas.php";
require_once "controladores/mudanza.controlador.php";
require_once "controladores/articulos.controlador.php";

require_once "modelos/mudanza.modelos.php";
require_once "modelos/articulos.modelos.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();

?>
