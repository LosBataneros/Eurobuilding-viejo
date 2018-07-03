<?php
  require_once "conexion.php";

  class ModeloMudanza{

    static public function mdlMostrarMudanza($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }

    static public function mdlIngresarRegistros($tabla, $fecha,  $origen,  $destino,  $articulo,  $cantidad,  $merma,  $costo){

      $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ( fecha, origen,destino, articulo, cantidad, merma, costo) VALUES ( '$fecha',  '$origen',  '$destino',  '$articulo',  $cantidad,  $merma,  $costo)");

      $stmt -> execute();

    }

    static public function mdlModificarRegistros($tabla, $id, $fecha,  $origen,  $destino,  $articulo,  $cantidad,  $merma,  $costo){

      $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET `id_mudanza`= $id,`fecha`= '$fecha',`origen`='$origen',`destino`='$destino',`articulo`='$articulo',`cantidad`=$cantidad,`merma`=$merma,`costo`=$costo WHERE id_mudanza = $id)");

      $stmt -> execute();

    }

    static public function mdlEliminarRegistros($tabla, $valor){

      $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE $tabla.`id_mudanza` = $valor");

      $stmt -> execute();

    }

}
