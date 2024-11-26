<?php



include "conexionb.php";



$peticion = "

INSERT INTO actividad
VALUES(NULL,
    '".$_POST['titulo']."',
    '".$_POST['creador']."',
    '".$_POST['fecha']."',
    '".$_POST['hora']."',
    '".$_POST['direccion']."',
    '".$_POST['descripcion']."',
    '".$_POST['duracion']."')

";

mysqli_query($enlace,$peticion );

mysqli_close($enlace);


echo "<b>Su actividad se ha registrado de forma satisfactoria, muchas gracias<b>";
 echo '<meta http-equiv="refresh"
 content="3; url=actividades.php">';



?>