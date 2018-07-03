<?php

class ControladorMudanza{

  static public function ctrMostrarMudanza(){

    $tabla = "mudanza";

    $respuesta = ModeloMudanza::mdlMostrarMudanza($tabla);

    return $respuesta;

  }
  static public function ctrModificarRegistros(){

    if (isset( $_POST["id_mudanza"],$_POST["fecha"], $_POST["origen"], $_POST["destino"],
                $_POST["cantidad"], $_POST["merma"], $_POST["costo"], $_POST["editar"])){

                $tabla = "mudanza";

                $id = $_POST["id_mudanza"];
                $fecha = $_POST["fecha"];
                $origen = $_POST["origen"];
                $destino = $_POST["destino"];
                $cantidad = $_POST["cantidad"];
                $articulo = $_POST["articulo"];
                $merma = $_POST["merma"];
                $costo = $_POST["costo"];

    $respuesta = ModeloMudanza::mdlModificarRegistros($tabla, $id,$fecha, $origen, $destino,$articulo, $cantidad, $merma, $costo);


    echo '<script>
        window.location = "inicio"
          </script>';
  }
  }

  static public function ctrIngresarRegistros(){

    if (isset( $_POST["fecha"], $_POST["origen"], $_POST["destino"], $_POST["articulo"],
                $_POST["cantidad"], $_POST["merma"], $_POST["costo"])){

                $tabla = "mudanza";

                $fecha = $_POST["fecha"];
                $origen = $_POST["origen"];
                $destino = $_POST["destino"];
                $cantidad = $_POST["cantidad"];
                $articulo = $_POST["articulo"];
                $merma = $_POST["merma"];
                $costo = $_POST["costo"];

    $respuesta = ModeloMudanza::mdlIngresarRegistros($tabla, $fecha, $origen, $destino,$articulo, $cantidad, $merma, $costo);


    echo '<script>
        window.location = "inicio"
          </script>';
  }
}

static public function ctrEliminarRegistros($valor){

  $tabla = "mudanza";

  $respuesta = ModeloMudanza::mdlEliminarRegistros($tabla, $valor);


}







}
