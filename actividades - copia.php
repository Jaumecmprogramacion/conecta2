
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
    $peticion = "SELECT * FROM actividad";
    $resultado = mysqli_query($enlace,$peticion );
    while ($fila = $resultado->fetch_assoc()) {
        echo '
        
        <actividades>
            <h1><strong>Título: </strong><br>'.$fila['titulo'].'</h1>
            <p><strong>Creado por: </strong><br>'.$fila['creador'].'</p>
            <p><strong>Fecha: </strong> <br>'.$fila['fecha'].'</p>
            <p><strong>Hora: </strong><br> '.$fila['hora'].'</p>
            <p><strong>Duración apróximada: </strong><br> '.$fila['duracion'].'</p>
             <p><strong>Lugar: </strong><br> '.$fila['direccion'].'</p>
            <p><strong>Descripción: </strong> <br>'.$fila['descripcion'].'</p>
            </div>
            </actividades>
            
            ';
        
       
    
        
        
       
    }
 

                
?>
</body>
</html>
