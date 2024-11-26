<?php

include "conexionb.php";

$peticion = "

INSERT INTO
actividad
VALUES
(null,
'".$_POST['titulo']."',
'".$_POST['creador']."',
'".$_POST['fecha']."',
'".$_POST['hora']."',
'".$_POST['direccion']."',
'".$_POST['descripcion']."',
'".$_POST['duracion']."'
)
"; 
$resultado = mysqli_query($enlace,$peticion );
echo "Actividad agregada";
echo '<meta http-equiv="refresh" content="1; url=administradorpanel.php">';




?>
