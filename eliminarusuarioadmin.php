<?php

include "conexionb.php";
session_start();

$peticion = "DELETE FROM administradores WHERE Identificador = ".$_GET['id'].""; 

mysqli_query($enlace,$peticion );

echo "Administrador eliminado";
    echo '<meta http-equiv="Refresh" 
    content="5; url=administradorpanel.php" />';

?>