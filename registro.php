
<?php


<head>
   
    include "cabecera.html";
    <title>Registro</title>
    <link rel="StyleSheet" href="estilo.css">
    
</head>
<body>
<header>
      include "cabecera.html";
 <html>
<h2>Registro</h2>
     </header>
include "cabecera.html";
<form action="registro1.php" method="POST">
    <label for="nombre"><b>Nombre4334:</b></label>
    <input type="text"  id="nombre" name="nombre" required>

    <label for="apellido"><b>Apellido:</b></label>
    <input type="text" id="apellidos" name="apellidos" required>


    <label for="telefono"><b>Teléfono:</b></label>
    <input type="int" id="telefono" name="telefono" required>

   <label for="email"><b>Email:</b></label>
    <input type="text" id="email" name="email" required>
    
    <label for="contrasena"><b>Contraseña:</b></label>
    <input type="password" id="contrasena" name="contrasena" required>
    


    <input type="submit" value="Enviar">
    </form>
    </body>
        
        </html>
?>