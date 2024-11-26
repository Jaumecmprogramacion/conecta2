
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Eventos</title>
    <style>
       list-style:none 
    </style>
     <link rel="StyleSheet" href="estilo.css">
</head>
<body>
 <?php
include "cabecera.html";
    


    

    
    include "conexionb.php";
    $peticion = "SELECT * FROM enlaces";
    $resultado = mysqli_query($enlace,$peticion );
    while ($fila = $resultado->fetch_assoc()) {
        echo '
        
        <actividades>
            <p><strong>Nombre: </strong><br>'.$fila['nombre'].'<p>
            <strong> </strong> <a href="'.$fila['direccion'].'" style="color:blue;">'.$fila['direccion'].'</a>
            <p><strong>Descripcion: </strong> <br>'.$fila['descripcion'].'</p>
           
            </actividades>
            
            ';
        
       
    
        
        
       
    }
 

                
?>
</body>
</html>