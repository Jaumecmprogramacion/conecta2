<?php
    
    $conexion = mysqli_connect("localhost","conectados","conectados","conectados");

    $peticion = "SHOW TABLES in conectados;";
    
    $resultado = mysqli_query($conexion,$peticion);

    $tablas = [];

    while($fila = mysqli_fetch_assoc($resultado)){
        $tablas[] = $fila['Tables_in_conectados'];
    }

    $json = json_encode($tablas);
    echo $json;

?>