<?php



include "conexionb.php";

$peticion = "

INSERT INTO datos
VALUES(NULL,
    '".$_POST['nombre']."',
    '".$_POST['apellidos']."',
    '".$_POST['telefono']."',
    '".$_POST['email']."',
    '".$_POST['contrasena']."')

";

mysqli_query($enlace,$peticion );

mysqli_close($enlace);


echo "<b>Su registro se ha hecho de forma satisfactoria, bienvenido a Conecta2<b>";

echo '<meta http-equiv="refresh"
 content="3; url=login.html">';


?>




