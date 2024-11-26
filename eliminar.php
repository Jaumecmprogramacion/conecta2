<?php

include "conexionb.php";


$peticion = "DELETE FROM datos WHERE Identificador = ".$_GET['id'].""; 

mysqli_query($enlace,$peticion );

echo "Su usuario ha sido eliminado, volverá a la página principal";
    echo '<meta http-equiv="Refresh" 
    content="5; url=index.php" />';

?>