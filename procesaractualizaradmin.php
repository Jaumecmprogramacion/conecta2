<?php

include "conexionb.php";


$peticion = "
UPDATE  datos
SET nombre = '".$_POST['nombre']."',
apellidos = '".$_POST['apellidos']."',
telefono = '".$_POST['telefono']."',
email = '".$_POST['email']."',
contrasena = '".$_POST['contrasena']."'
WHERE
Identificador = ".$_POST['Identificador']."


"; 

mysqli_query($enlace,$peticion );



echo '<meta http-equiv="refresh" content="2; url=administradorpanel.php">';

?>