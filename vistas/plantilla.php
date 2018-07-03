<?php
	$frontend = Ruta::ctrRuta();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

	<?php include "modulos/head.php";  ?>

<body class="animsition">

			<?php

					/*CONTENIDO*/
					$rutas = array();

			    	if(isset($_GET["ruta"])){

							$rutas = explode("/", $_GET["ruta"]);

						 		if($rutas[0] == "inicio"){

							 		include "modulos/inicio.php";

						 		}else if($rutas[0] == "articulos"){

							 		include "modulos/articulos.php";

						 		}else if($rutas[0] == "mudanza"){

							 		include "modulos/mudanza.php";

						 		}else if($rutas[0] == "reportes"){

							 		include "modulos/reportes.php";

						 		}else if($rutas[0] == "modificar-articulo"){

							 		include "modulos/modificarArticulos.php";

								}else if($rutas[0] == "EliminarMudanza"){

									include "modulos/EliminarMudanza.php";

								}else if($rutas[0] == "ConsumoEnCantidad"){

									include "modulos/ConsumoEnCantidad.php";

						 		}else{

							 		include "modulos/404.php";

						 		}

			        }else{

			 			  include "modulos/inicio.php";

			 			 }

						 include "modulos/footer.php";
				?>
</body>
</html>
