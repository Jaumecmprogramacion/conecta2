<?php

include "conexionb.php";

$peticion = "

INSERT INTO
enlaces
VALUES
(null,
'".$_POST['nombre']."',
'".$_POST['direccion']."',
'".$_POST['descripcion']."'
)
"; 
$resultado = mysqli_query($enlace,$peticion );
echo "Enlace agregado";
echo '<meta http-equiv="refresh" content="1; url=administradorpanel.php">';




?>