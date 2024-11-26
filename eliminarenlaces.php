<?php

include "conexionb.php";


$peticion = "DELETE FROM enlaces WHERE Identificador = ".$_GET['id'].""; 

mysqli_query($enlace,$peticion );

echo "Enlace eliminado";
    echo '<meta http-equiv="Refresh" 
    content="5; url=administradorpanel.php" />';

?>