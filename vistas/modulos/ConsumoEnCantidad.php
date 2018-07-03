<?php
require_once = "../../controladores/reportes.controlador.php";
require_once = "../../modelos/reportes.modelos.php";
?>

<div class="container">
  <div class="row">
    <div class="col-lg-12 p-b-30">
      <div class="t-center">
        <span class="tit2 t-center">
          Consumo en
        </span>

        <h3 class="tit3 t-center m-b-35 m-t-2">
          Cantidad
        </h3>
      </div>

      <div class="col-lg-12">

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Articulo</th>
              <th scope="col">Carniceria</th>
              <th scope="col">Comedor</th>
              <th scope="col">Jardin Cristal</th>
              <th scope="col">Terraza</th>
              <th scope="col">Room Service</th>
              <th scope="col">Banquetes</th>
              <th scope="col">Atenciones</th>
              <th scope="col">Donaciones</th>
            </tr>
          </thead>
            <tbody>
            <?php

                $consulta = ControladorReportes::ctrMostrarReportes();

                foreach ($consulta as $key => $value) {

                  echo'

                  <tr>
                  <td>'.$value["fecha"].'.</td>
                  <td>'.$value["origen"].'</td>
                  <td>'.$value["destino"].'</td>
                  <td>'.$value["articulo"].'</td>
                  <td>'.$value["cantidad"].' Kg</td>
                  <td>'.$value["merma"].' Kg</td>
                  <td>'.$value["costo"].' Bs</td>
                  <th><button type="button" class="btn  btn-dark btn-sm" data-toggle="modal" data-target="#edit'.$value["id_mudanza"].'">editar</button></th>
                  <th><a href="'.$frontend.'EliminarMudanza/'.$value["id_mudanza"].'" class="btn btn-danger btn-ok waves-effect">Eliminar</a></th>


                  </tr>
