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


          </nav>
        </div>

        <!-- Social -->

      </div>
    </div>
  </div>
</header>

<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?php echo $frontend; ?>assets/images/bg-title-page-02.jpg);">
  <h2 class="tit6 t-center">
     Ingresar Articulos
  </h2>
</section>


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
            Articulos
          </h3>
        </div>

        <form method="post" class="wrap-form-reservation size22 m-l-r-auto">
          <div class="row">

            <div class="col-md-4">
              <!-- Phone -->
              <span class="txt9">

              </span>


            </div>

            <div class="col-md-4">
              <!-- Email -->
              <span class="txt9">
                Descripcion
              </span>

              <div class="wrap-input size12 bo2 bo-rad-10 m-t-3 m-b-23">
                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="descripcion" placeholder="Descripcion">
              </div>
            </div>

          </div>

          <div class="wrap-btn-booking flex-c-m m-t-6">
            <!-- Button3 -->

            <?php
            $agregar = new ControladorArticulos();
            $agregar -> ctrIngresarArticulos();
             ?>
            <button type="submit" name="registro" class="btn3 flex-c-m size13 txt11 trans-0-4">
              registrar
            </button>
          </div>
        </form>
      </div>
    </div>

  </div>



</section>
