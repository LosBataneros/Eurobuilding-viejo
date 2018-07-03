<?php

class ControladorConsumoEnCantidad {

  static public function ctrMostrarConsumoEnCantidad(){

    $tabla = "cantidad";

    $respuesta = ModeloConsumoEnCantidad::mdlMostrarConsumoEnCantidad($tabla);

    return $respuesta;

  }








}
