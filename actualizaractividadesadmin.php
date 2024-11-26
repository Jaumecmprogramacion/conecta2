<form action="actualizaractividadesadmin1.php" method="POST">
     <link rel="StyleSheet" href="estilo.css">

<?php
include "conexionb.php";


$peticion = "SELECT * FROM actividad
WHERE Identificador =".$_GET['id']."

"; 

$resultado = mysqli_query($enlace,$peticion );

while ($fila = $resultado->fetch_assoc()) {
       echo '
<input type="hidden" name="Identificador" value="'.$fila['Identificador'].'">
      Titulo: <input type="text" name="titulo" value="'.$fila['titulo'].'"><br>
      Creador: <input type="text" name="creador" value="'.$fila['creador'].'"><br>
      Fecha: <input type="text" name="fecha" value="'.$fila['fecha'].'"><br>
      Hora: <input type="text" name="hora" value="'.$fila['hora'].'"><br>
      Dirección: <input type="text" name="direccion" value="'.$fila['direccion'].'"><br>
      Descripción: <input type="text" name="descripcion" value="'.$fila['descripcion'].'"><br>
      Duración: <input type="text" name="duracion" value="'.$fila['duracion'].'"><br>
   
      <input type="submit">
      ';
      
}
?>
</form>
<a href="administradorpanel.php">Volver a la pagina anterior</a>