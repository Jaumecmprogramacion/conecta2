<form action="actualizarenlaces1.php" method="POST">
    <link rel="StyleSheet" href="estilo.css">

<?php
include "conexionb.php";


$peticion = "SELECT * FROM enlaces
WHERE Identificador =".$_GET['id']."

"; 

$resultado = mysqli_query($enlace,$peticion );

while ($fila = $resultado->fetch_assoc()) {
       echo '
<input type="hidden" name="Identificador" value="'.$fila['Identificador'].'">
      Nombre: <input type="text" name="nombre" value="'.$fila['nombre'].'"><br>
      Dirección: <input type="text" name="direccion" value="'.$fila['direccion'].'"><br>
      Descripción: <input type="text" name="descripcion" value="'.$fila['descripcion'].'"><br>
      
   
      <input type="submit">
      ';
      
}
?>
</form>
<a href="administradorpanel.php">Volver a la pagina anterior</a>