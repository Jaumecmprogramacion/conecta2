<form action="procesaractualizardatosadmin.php" method="POST">
    <link rel="StyleSheet" href="estilo.css">

<?php
include "conexionb.php";


$peticion = "SELECT * FROM administradores
WHERE Identificador =".$_GET['id']."

"; 

$resultado = mysqli_query($enlace,$peticion );

while ($fila = $resultado->fetch_assoc()) {
       echo '
<input type="hidden" name="Identificador" value="'.$fila['Identificador'].'">
      Nombre: <input type="text" name="nombre" value="'.$fila['nombre'].'"><br>
      Apellidos: <input type="text" name="apellidos" value="'.$fila['apellidos'].'"><br>
      Contraseña: <input type="text" name="contrasena" value="'.$fila['contrasena'].'"><br>
      Email: <input type="text" name="email" value="'.$fila['email'].'"><br>
   
      <input type="submit">
      ';
      
}
?>
</form>
<a href="administradorpanel.php">Volver a la pagina anterior</a>