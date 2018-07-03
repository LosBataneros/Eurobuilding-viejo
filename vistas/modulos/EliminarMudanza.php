<?php

 $valor = $rutas[1];
 $eliminar = ControladorMudanza::ctrEliminarRegistros($valor);

 echo '<script>

         window.location = "'.$frontend.'inicio";

       </script>';
