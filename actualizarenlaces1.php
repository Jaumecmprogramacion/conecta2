<?php

include "conexionb.php";


$peticion = "
UPDATE  enlaces
SET nombre = '".$_POST['nombre']."',
direccion = '".$_POST['direccion']."',
descripcion = '".$_POST['descripcion']."'
WHERE
Identificador = ".$_POST['Identificador']."


"; 

mysqli_query($enlace,$peticion );



echo '<meta http-equiv="refresh" content="2; url=administradorpanel.php">';

?>