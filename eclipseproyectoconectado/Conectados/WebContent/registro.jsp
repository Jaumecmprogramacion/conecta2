
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Eventos</title>
    <style>
       list-style:none 
    </style>
     
    <link rel="StyleSheet" href="css/estilo.css">
</head>
<body>
    <div id="logo">
        <img src="img/logo2.jpg">
        </div>
    
     <nav>
        <a href="index.php"> <b>Inicio</b></a>
        <a href="actividades.php"> <b>Actividades disponibles</b></a>
        <a href=""> <b>Enlaces de interes</b></a>
        <a href="registro.html"> <b>Registrarse</b></a>
         <a href="login.html"> <b>Login</b></a>
    </nav>
     
</head>
<body>
    
<h2>Registro</h2>

<form action="registro1.jsp" method="POST">
    <label for="nombre"><b>Nombre:</b></label>
    <input type="text" name="nombre" required>

    <label for="apellido"><b>Apellidos:</b></label>
    <input type="text" id="apellidos" name="apellidos">


    <label for="telefono"><b>Tel�fono:</b></label>
    <input type="int" id="telefono" name="telefono" required>

   <label for="email"><b>Email:</b></label>
    <input type="text" id="email" name="email" required>
    
    <label for="contrasena"><b>Contrase�a:</b></label>
    <input type="password" id="contrasena" name="contrasena" required>
    


    <input type="submit" value="Enviar">
    </form>
    </body>
</html>