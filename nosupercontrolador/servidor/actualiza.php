<?php
    
    $conexion = mysqli_connect("localhost","conectados","conectados","conectados");

    $peticion = "
    UPDATE ".$_GET['tabla']." 
    SET 
    ".$_GET['columna']." = '".$_GET['contenido']."' 
    WHERE 
    Identificador = ".$_GET['identificador'].";";
    
    $resultado = mysqli_query($conexion,$peticion);


?>