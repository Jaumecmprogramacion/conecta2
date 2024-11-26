<?php

include "conexionb.php";
session_start();

$peticion = "DELETE FROM actividad WHERE Identificador = ".$_GET['id'].""; 

mysqli_query($enlace,$peticion );

echo "Actividad eliminada";
    echo '<meta http-equiv="Refresh" 
    content="5; url=administradorpanel.php" />';

?>