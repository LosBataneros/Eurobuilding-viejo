<!-- Header -->
<header>
  <!-- Header desktop -->
  <div class="wrap-menu-header gradient1 trans-0-4">
    <div class="container h-full">
      <div class="wrap_header trans-0-3">
        <!-- Logo -->
        <div class="logo">
          <a href="index.html">
            <img src="<?php echo $frontend; ?>assets/images/icons/logo.png" alt="IMG-LOGO" data-logofixed="<?php echo $frontend; ?>assets/images/icons/logo2.png">
          </a>
        </div>

        <!-- Menu -->
        <div class="wrap_menu p-l-45 p-l-0-xl">
          <nav class="menu">
            <ul class="main_menu">

              <li>
                <a href="<?php echo $frontend; ?>inicio">Inicio</a>
              </li>

              <li>
                <a href="<?php echo $frontend; ?>articulos">Articulos</a>
              </li>

              <li>
                <a href="<?php echo $frontend; ?>reportes">Reportes</a>
              </li>



          </nav>
        </div>

        <!-- Social -->
        <div>

        </div>
      </div>
    </div>
  </div>
</header>


<!-- Reservation -->
<section class="section-reservation bg1-pattern p-t-100 p-b-113">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 p-b-30">
        <div class="t-center">
          <span class="tit2 t-center">
            Registro
          </span>

          <h3 class="tit3 t-center m-b-35 m-t-2">
            operaciones
          </h3>
        </div>

        <form method="post" class="wrap-form-reservation size22 m-l-r-auto">
          <div class="row">

            <div class="col-md-12">
              <!-- Date -->
              <span class="txt9">
                Fecha
              </span>

              <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                <input class=" bo-rad-10 sizefull txt10 p-l-20" type="date" name="fecha" required>

              </div>
            </div>

            <div class="col-md-4">
              <!-- People -->
              <span class="txt9">
                Departamento origen
              </span>

              <div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
                <!-- Select2 -->
                <select class="selection-1" name="origen" required>
                  <option>Carnicería</option>
                  <option>Almacén</option>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <!-- People -->
              <span class="txt9">
                Departamento destino
              </span>

              <div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
                <!-- Select2 -->
                <select data-live-search="true" class="selection-1" name="destino" required>
                  <option >Comedor</option>
				          <option>Jardin Cristal</option>
				          <option>Terraza</option>
				          <option>Room Service</option>
				          <option>Banquetes</option>
				          <option>Atenciones</option>
				          <option>Donaciones</option>
				          <option>Carniceria</option>
                </select>
              </div>
            </div>


            <div class="col-md-4">
              <!-- Name -->
              <span class="txt9">
                Articulo
              </span>

              <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                <select data-live-search="true" class="selection-1" name="articulo" required >
                <?php    $articulos = ControladorArticulos::ctrMostrarArticulos();
                                foreach ($articulos as $key => $value) {
                                    echo'
                                      <tr>
                                          <option>'.$value["descripcion"].'</option>
                                            </tr>
                                          ';
                                        }
                                        ?>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <!-- Phone -->
              <span class="txt9">
                Cantidad
              </span>

              <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="cantidad" placeholder="Cantidad" required>
              </div>
            </div>

            <div class="col-md-4">
              <!-- Email -->
              <span class="txt9">
                Merma
              </span>

              <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="merma" placeholder="Merma" required>
              </div>
            </div>

            <div class="col-md-4">
              <!-- Phone -->
              <span class="txt9">
                Costo
              </span>

              <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="costo" placeholder="Costo" required>
              </div>
            </div>

          </div>

          <div class="wrap-btn-booking flex-c-m m-t-6">
            <!-- Button3 -->
            <?php
            $agregar = new ControladorMudanza();
            $agregar -> ctrIngresarRegistros();

             ?>

            <button type="submit" name="registro" class="btn3 flex-c-m size13 txt11 trans-0-4">
              registrar
            </button>

          </div>
        </form>
      </div>
    </div>

  </div>

   <br><br><hr><br><br>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 p-b-30">
        <div class="t-center">
          <span class="tit2 t-center">
            Consulta
          </span>

          <h3 class="tit3 t-center m-b-35 m-t-2">
            Registros
          </h3>
        </div>

        <div class="col-lg-12">

          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Origen</th>
                <th scope="col">Destino</th>
                <th scope="col">Articulo</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Merma</th>
                <th scope="col">Costo</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
              <tbody>
              <?php

                  $consulta = ControladorMudanza::ctrMostrarMudanza();

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


                    <!-- Modal -->
                    <div class="modal fade" id="edit'.$value["id_mudanza"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <form id="sign_in" method="POST">
                        <div class="msg">
                          <h4>Editar la categoría "'.$value["articulo"].'"</h4>
                        </div>
                        <hr>
                        <div class="input-group">
                        <div class="row">



                          <div class="col-md-12">
                            <!-- Date -->
                            <span class="txt9">
                              Fecha
                            </span>
                            <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                              <input class=" bo-rad-10 sizefull txt10 p-l-20" type="date" name="fecha" required value="'.$value["fecha"].'" >
                            </div>
                          </div>


                          <div class="col-md-12">
                            <span class="txt9">
                              Departamento origen
                            </span>
                            <div class="form-group">
                              <select class="form-group  size12 bo2 bo-rad-10 m-t-3 m-b-23" name="origen" required value="'.$value["origen"].'">
                              <option>Carnicería</option>
                              <option>Almacén</option>
                              </select>

                              <span class="txt9">
                                Departamento destino
                              </span>
                              <div class="form-group">
                                <select class="form-group  size12 bo2 bo-rad-10 m-t-3 m-b-23" name="destino" required value="'.$value["destino"].'">
                                <option>Comedor</option>
                                <option>Jardin Cristal</option>
                                <option>Terraza</option>
                                <option>Room Service</option>
                                <option>Banquetes</option>
                                <option>Atenciones</option>
                                <option>Donaciones</option>
                                <option>Carniceria</option>
                                </select>

                                <span class="txt9">
                                  Articulo
                                </span>
                                <div class="form-group">
                                  <select class="form-group  size12 bo2 bo-rad-10 m-t-3 m-b-23" name="articulo" required value="'.$value["articulo"].'">
                                  ';

                                  foreach ($articulos as $key => $valor) {
                                      echo'

                                            <option>'.$valor["descripcion"].'</option>

                                            ';
                                          }



                                  echo '
                                  </select>

                                  <span class="txt9">
                                    Cantidad
                                  </span>
                                  <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="cantidad" placeholder="cantidad" required value="'.$value["cantidad"].'">
                                  </div>

                                  <span class="txt9">
                                    Merma
                                  </span>
                                  <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="merma" placeholder="merma" required value="'.$value["merma"].'">
                                  </div>

                                  <span class="txt9">
                                    Costo
                                  </span>
                                  <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="costo" placeholder="costo" required value="'.$value["costo"].'">
                                  </div>





                                               </div>


                                           </div>


                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                           ';

                                                   $editar = new ControladorMudanza();
                                                   $editar -> ctrModificarRegistros();

                                               echo '
                                           <button type="submit" class="btn btn-primary" name="editar">Guardar</button>
                                           </form>
                                         </div>
                                         </div>
                                       </div>


                        ';
                }

              ?>
            </tbody>
          </table>

        </div>

      </div>
    </div>

  </div>
</section>
