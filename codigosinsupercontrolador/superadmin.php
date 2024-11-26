<html>
    <link rel="StyleSheet" href="estilo.css">
    <head>
        <script src="https://kit.fontawesome.com/0d0c128533.js" crossorigin="anonymous">
        </script>
        <style>
            body,html{
            background: white;
            font-family:sans-serif;
                padding:0px;
                margin:0px;
                
            
            }
            
            header {
                background: black;
                color: white;
                padding: 10px;
                width:100%;
                height:20px;
                text-align: right;
                
            }
            
        
            header a{
                color:inherit;
                text-decoration: none;
                text-align: right;
            }
            
            table tr:nth-child(odd){
                background: rgb(220,220,220);
                padding: 5px;
                
            }
            Table tr td{
                padding: 5px;
                
            }
        </style>
    </head>
    <body>
    




<?php
session_start();

if(!isset($_SESSION['pasas']) || $_SESSION['pasas'] == false){
    die("te has intentado colar en el panel de control sin permiso");
    
    
}

echo "<header>Bienvenido, ".$_SESSION['nombre']." ".$_SESSION['apellidos']."-";
echo "<a href='logout.php'>Cerrar sesión</a></header>"
?>


<h1> Gestión de usarios</h1>


<table cellpaddig=0 cellpacing=0>
    <tr>
    <th>Usuario</th>
    <th>Contraseña</th>
    <th>Nombre</th>
    <th>Apellidos</th>
</tr>


<?php
include "admin/conexiondb.php";


$peticion = "SELECT * FROM usuarios"; 
$resultado = mysqli_query($enlace,$peticion );

while ($fila = $resultado->fetch_assoc()) {
       echo '<tr>
       <td>'.$fila['usuario'].'</td>
       <td>'.$fila['password'].'</td>
       <td>'.$fila['nombre'].'</td>
       <td>'.$fila['apellidos'].'</td>
       <td><a href="ver.php?id='.$fila['Identificador'].'"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
       <td><a href="actualizar.php?id='.$fila['Identificador'].'"><i class="fa fa-refresh" aria-hidden="true"></i></a></td>
       <td><a href="eliminar.php?id='.$fila['Identificador'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
       </tr>';
}
?>
    <tr>
    <form action="insertar.php" method="POST">
        <td><input type="text" name="usuario" placeholder="Usuario"></td>
        <td><input type="text" name="password" placeholder="Password"></td>
        <td><input type="text" name="nombre" placeholder="Nombre"></td>
        <td><input type="text" name="apellidos" placeholder="Apellidos"></td>
        <td><input type="submit" value="Enviar"></td>
        
        
    </form>
    </tr>
</table>
        </body>
    
</html>