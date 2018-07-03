<?php
  require_once "conexion.php";

  class ModeloArticulos{

    static public function mdlMostrarArticulos($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }


    static public function mdlIngresarArticulos($tabla, $descripcion){

      $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (descripcion) VALUES ( '$descripcion')");

      $stmt -> execute();

    }
}
