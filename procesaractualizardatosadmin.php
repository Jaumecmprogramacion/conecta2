<?php

include "conexionb.php";


$peticion = "
UPDATE  administradores
SET nombre = '".$_POST['nombre']."',
apellidos = '".$_POST['apellidos']."',
contrasena = '".$_POST['contrasena']."',
email = '".$_POST['email']."'
WHERE
Identificador = ".$_POST['Identificador']."


"; 

mysqli_query($enlace,$peticion );



echo '<meta http-equiv="refresh" content="2; url=administradorpanel.php">';

?>