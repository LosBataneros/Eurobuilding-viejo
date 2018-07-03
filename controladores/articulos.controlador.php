<?php

class ControladorArticulos{

  static public function ctrMostrarArticulos(){

    $tabla = "articulos";

    $respuesta = ModeloArticulos::mdlMostrarArticulos($tabla);

    return $respuesta;

  }


  static public function ctrIngresarArticulos(){

    if (isset( $_POST["descripcion"])){

                $tabla = "articulos";

                $descripcion = $_POST["descripcion"];

    $respuesta = ModeloArticulos::mdlIngresarArticulos($tabla, $descripcion);


    echo '<script>
      window.location = "articulos"

      ;
          </script>';
  }
}




}
