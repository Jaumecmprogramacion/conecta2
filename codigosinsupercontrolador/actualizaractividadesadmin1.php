<?php

include "conexionb.php";


$peticion = "
UPDATE  actividad
SET titulo = '".$_POST['titulo']."',
creador = '".$_POST['creador']."',
fecha = '".$_POST['fecha']."',
hora = '".$_POST['hora']."',
direccion = '".$_POST['direccion']."',
descripcion = '".$_POST['descripcion']."',
duracion = '".$_POST['duracion']."'
WHERE
Identificador = ".$_POST['Identificador']."


"; 

mysqli_query($enlace,$peticion );



echo '<meta http-equiv="refresh" content="2; url=administradorpanel.php">';

?>