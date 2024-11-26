<?php

session_start();



include "conexionb.php";


$peticion = "
SELECT * FROM administradores
WHERE
nombre = '".$_POST['nombre']."'
AND
contrasena = '".$_POST['contrasena']."'
LIMIT 1


";

$resultado = mysqli_query($enlace,$peticion );

$pasas = false;
$_SESSION['pasas'] = false;

if ($fila = $resultado->fetch_assoc()) {
   echo $fila['nombre']." ".$fila['apellidos']."<br>";
    $pasas = true;
    $_SESSION['nombre'] = $fila['nombre'];
    $_SESSION['apellidos'] = $fila['apellidos'];
        
}else{
    
    $pasas = false;
    

}
if($pasas){
    echo"Bienvenido a Conecta2, desde aqui puedes administrar toda la plataforma";
    $_SESSION['pasas'] = true;
    echo '<meta http-equiv="Refresh" 
    content="3; url=administradorpanel.php" />';
}else{
    $_SESSION['pasas'] = false;
    echo "Por favor, revise su usuario y contraseña, datos incorrectos";
    echo '<meta http-equiv="Refresh" 
    content="5; url=loginadmin.html" />';
}

mysqli_close($enlace);









?>