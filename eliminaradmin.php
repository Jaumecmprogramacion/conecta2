<?php

include "conexionb.php";


$peticion = "DELETE FROM datos WHERE Identificador = ".$_GET['id'].""; 

mysqli_query($enlace,$peticion );

echo "Usuario eliminado";
    echo '<meta http-equiv="Refresh" 
    content="5; url=administradorpanel.php" />';

?>