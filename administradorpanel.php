

<html>
    
    <head>
        <link rel="StyleSheet" href="estilo.css">
        <script src="https://kit.fontawesome.com/0d0c128533.js" crossorigin="anonymous">
        </script>
        <style>
            <link rel="StyleSheet" href="estilo.css">
            body,html{
            background: white;
            font-family:sans-serif;
                padding:0px;
                margin:55px;
                
            
            }
            
            header {
                background: green;
                color: white;
                padding: 10px;
                width:100%;
                height:20px;
                text-align: right;
                
            }
             nav a {
            text-decoration: none;
            color: #333;
            padding: 1em;
            margin: 0 0.5em;
            border-radius: 5px;
            transition: background-color 0.3s;
                 
        }

        
            header a{
                color:inherit;
                text-decoration: none;
                text-align: right;
            }
            
            table tr:nth-child(odd){
                background: rgb(220,220,220);
                padding: 11px;
                
                
                
            }
            Table tr td{
                padding: 5px;
                
                
            }
            input, textarea{
                width: 100%;
            }
        </style>
        
    </head>
    <body>
        <div id="logo">
        <img src="img/logo2.jpg">
        </div>
    <nav>
      <a href="index.php"> <b>Inicio</b></a>
        <a href="actividades.php"> <b>Actividades disponibles</b></a>
        
        <a href="paneldecontrol.php"> <b>Panel de control</b></a>
        <a href="enlaces.php"> <b>Enlaces de interes</b></a>
       
    </nav>
        
        <h1>Panel de control del administrador</h1>




<?php
  session_start();
    if(!isset($_SESSION['pasas']) || $_SESSION['pasas'] == false){
        die("Te has intentado colar en el panel de control sin permiso, por favor, registrese en CONECTA2");
        
    }
      echo "<header>Bienvenido al panel de control de Conecta2, ".$_SESSION['nombre']." ".$_SESSION['apellidos']." -";
    
    echo "<a href='logout.php'>  Cerrar sesión</a></header>"
 
?>
    <table cellpaddig=0 cellpacing=0>
    <tr>
    <th colspan="5">Sus datos de de administrador</th>
    </tr>
    <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Contraseña</th>
    <th>Email</th>
        
    
</tr>
          
 
<?php
        //mostramos los datos del administrador
include "conexionb.php";
    
    

$peticion = "SELECT * FROM administradores






"; 
$resultado = mysqli_query($enlace,$peticion );

while ($fila = $resultado->fetch_assoc()) {
       echo '<tr>
       <td>'.$fila['nombre'].'</td>
       <td>'.$fila['apellidos'].'</td>
       <td>'.$fila['contrasena'].'</td>
       <td>'.$fila['email'].'</td>
       
       <td><a href="actualizardatosadmin.php?id='.$fila['Identificador'].'"><i class="fa fa-refresh" aria-hidden="true"></i></a></td>
       <td><a href="eliminarusuarioadmin.php?id='.$fila['Identificador'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
       </tr>';
}
?>
    <tr>

           <tr>
    <form action="insertaradmin.php" method="POST">
        <td><input type="text" name="nombre" placeholder="Nombre"></td>
        <td><input type="text" name="apellidos" placeholder="Apellidos"></td>
        <td><input type="text" name="contrasena" placeholder="Contraseña"></td>
        <td><input type="text" name="email" placeholder="Email"></td>
        <td><input type="submit" value="Enviar"></td>
        
        
    </form>
    </tr>





<table cellpaddig=0 cellpacing=0>
    <tr>
    <th colspan="7">Usuarios registrados</th>
    </tr>
    <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Télefono</th>
    <th>Email</th>
    <th>Contraseña</th>
    
</tr>

 
<?php
    //Aqui mostramos todos los usuarios que se han dado de alta   
$peticion = "SELECT * FROM datos





"; 
$resultado = mysqli_query($enlace,$peticion );

while ($fila = $resultado->fetch_assoc()) {
       echo '<tr>
       <td>'.$fila['nombre'].'</td>
       <td>'.$fila['apellidos'].'</td>
       <td>'.$fila['telefono'].'</td>
       <td>'.$fila['email'].'</td>
       <td>'.$fila['contrasena'].'</td>
       <td><a href="actualizaradmin.php?id='.$fila['Identificador'].'"><i class="fa fa-refresh" aria-hidden="true"></i></a></td>
       <td><a href="eliminaradmin.php?id='.$fila['Identificador'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
       </tr>';
       
    
       
}
     
    
?>
     <tr>
    <form action="insertarusuario.php" method="POST">
        <td><input type="text" name="nombre" placeholder="Nombre"></td>
        <td><input type="text" name="apellidos" placeholder="Apellidos"></td>
        <td><input type="text" name="telefono" placeholder="Teléfono"></td>
        <td><input type="text" name="email" placeholder="Email"></td>
        <td><input type="text" name="contrasena" placeholder="Contraseña"></td>
        <td><input type="submit" value="Enviar"></td>
        
        
    </form>
    </tr>
    <table cellpaddig=0 cellpacing=0>
    <tr>
    <th colspan="7">Actividades creadas</th>
    </tr>
    <tr>
    <th>Titulos</th>
    <th>Creador</th>
    <th>Fecha</th>
    <th>Hora</th>
    <th>Dirección</th>
    <th>Duración</th>
    <th>Descripción</th>
</tr>


<?php
 //Aqui mostramos todos las actividades que se han dado de alta          
$peticion = "SELECT * FROM actividad





"; 
$resultado = mysqli_query($enlace,$peticion );

while ($fila = $resultado->fetch_assoc()) {
       echo '<tr>
       <td>'.$fila['titulo'].'</td>
       <td>'.$fila['creador'].'</td>
       <td>'.$fila['fecha'].'</td>
       <td>'.$fila['hora'].'</td>
       <td>'.$fila['direccion'].'</td>
       <td>'.$fila['descripcion'].'</td>
       <td>'.$fila['duracion'].'</td>
       <td><a href="actualizaractividadesadmin.php?id='.$fila['Identificador'].'"><i class="fa fa-refresh" aria-hidden="true"></i></a></td>
       <td><a href="borraractividad.php?id='.$fila['Identificador'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
       </tr>';
       
     
}
      
    
?>
        
         <tr>
    <form action="insertaractividad.php" method="POST">
        <td><input type="text" name="titulo" placeholder="Título"></td>
        <td><input type="text" name="creador" placeholder="Creador"></td>
        <td><input type="text" name="fecha" placeholder="Fecha"></td>
        <td><input type="text" name="hora" placeholder="Hora"></td>
        <td><input type="text" name="direccion" placeholder="Dirección"></td>
        <td><input type="text" name="descripcion" placeholder="Descripción"></td>
        <td><input type="text" name="duracion" placeholder="Duración"></td>
        <td><input type="submit" value="Enviar"></td>
        
        
    </form>
    </tr>
        <table cellpaddig=0 cellpacing=0>
    <tr>
    <th colspan="3">Enlaces</th>
    </tr>
    <tr>
    <th>Nombre</th>
    <th>Dirección</th>
    <th>Descripción</th>
    
</tr>

        
<?php
        
$peticion = "SELECT * FROM enlaces





"; 
$resultado = mysqli_query($enlace,$peticion );

while ($fila = $resultado->fetch_assoc()) {
       echo '<tr>
       <td>'.$fila['nombre'].'</td>
       <td>'.$fila['direccion'].'</td>
       <td>'.$fila['descripcion'].'</td>
       
       <td><a href="actualizarenlaces.php?id='.$fila['Identificador'].'"><i class="fa fa-refresh" aria-hidden="true"></i></a></td>
       <td><a href="eliminarenlaces.php?id='.$fila['Identificador'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
       </tr>';
       
     
}
       
    
?>
     <tr>
    <form action="insertarenlace.php" method="POST">
        <td><input type="text" name="nombre" placeholder="Nombre de la web"></td>
        <td><input type="text" name="direccion" placeholder="Enlace"></td>
        <td><input type="text" name="descripcion" placeholder="Descripción"></td>
        <td><input type="submit" value="Enviar"></td>
        
        
    </form>
    </tr>
 