<?php

include "conexionb.php";

$peticion = "

INSERT INTO
datos
VALUES
(null,
'".$_POST['nombre']."',
'".$_POST['apellidos']."',
'".$_POST['telefono']."',
'".$_POST['email']."',
'".$_POST['contrasena']."'
)
"; 
$resultado = mysqli_query($enlace,$peticion );
echo "Usuario agregado";
echo '<meta http-equiv="refresh" content="1; url=administradorpanel.php">';




?>
