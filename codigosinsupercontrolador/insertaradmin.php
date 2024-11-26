<?php

include "conexionb.php";

$peticion = "

INSERT INTO
administradores
VALUES
(null,
'".$_POST['nombre']."',
'".$_POST['apellidos']."',
'".$_POST['contrasena']."',
'".$_POST['email']."'
)
"; 
$resultado = mysqli_query($enlace,$peticion );
echo "Administrador agregado";
echo '<meta http-equiv="refresh" content="1; url=administradorpanel.php">';




?>
