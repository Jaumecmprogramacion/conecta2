

<html>
    
    <head>
        <link rel="StyleSheet" href="css/estilo.css">
        <script src="https://kit.fontawesome.com/0d0c128533.js" crossorigin="anonymous">
        </script>
        <style>
            <link rel="StyleSheet" href="css/estilo.css">
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
                width: 60%;
            }
        </style>
        
    </head>
    <body>
        <div id="logo">
        <img src="img/logo2.jpg">
        </div>
    <nav>
      <a href="index.jsp"> <b>Inicio</b></a>
        <a href="actividades.jsp"> <b>Actividades disponibles</b></a>
        
        <a href="paneldecontrol.jsp"> <b>Panel de control</b></a>
        <a href=""> <b>Enlaces de interes</b></a>
       
    </nav>
        
        <h1>Gestión de usuario y actividades</h1>




<?php
  session_start();
    if(!isset($_SESSION['pasas']) || $_SESSION['pasas'] == false){
        die("Te has intentado colar en el panel de control sin permiso, por favor, registrese en CONECTA2");
        
    }
      echo "<header>Bienvenido a Conecta2, ".$_SESSION['nombre']." ".$_SESSION['apellidos']." -";
    
    echo "<a href='logout.php'>  Cerrar sesión</a></header>"
 
?>
    <table cellpaddig=0 cellpacing=0>
    <tr>
    <th colspan="5">Sus datos de usuario</th>
    </tr>
    <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Teléfono</th>
    <th>Email</th>
    <th>Contraseña</th>
</tr>
    
<%
 	Class.forName("com.mysql.jdbc.Driver");
 	Connection conexion = null;
 try{
					String url = "jdbc:mysql://localhost:3306/conectados";
					String usuario = "conectados";
					String contrasena = "conectados";
					
					conexion = DriverManager.getConnection(url,usuario,contrasena);
					
					Statement peticion = conexion.createStatement();
					ResultSet resultados = peticion.executeQuery("SELECT * FROM actividad");
					
					while(resultados.next()){
						out.println(""+
								"<actividades>"+
									"<h1>Título:"+resultados.getString("titulo")+"</h1>"+
									"<p>Creado por:"+resultados.getString("creador")+"</p>"+
									"<p>Fecha:"+resultados.getString("fecha")+"</p>"+
           						 	"<p>Hora:"+resultados.getString("hora")+"</p>"+
           						 	"<p>Duración:"+resultados.getString("duracion")+"</p>"+
           						 	"<p>Lugar:"+resultados.getString("direccion")+"</p>"+
           						 	"<p>Descripción:"+resultados.getString("descripcion")+"</p>"+
								"</actividades>"+
								"");
					}
					
				}catch(Exception e){
					e.printStackTrace();
				}finally{
					if(conexion != null){
						conexion.close();
					}
				}
 %>
    <tr>

        





<table cellpaddig=0 cellpacing=0>
    <tr>
    <th colspan="7">Actividades creadas por otros usuarios</th>
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
       
       
       </tr>';
}
    
?>
    <tr>
   
        </tr>
    <h2>Formulario para crear actividad</h2>

<form action="crearactividad.php" method="POST">
    <label for="titulo"><b>Titulo:</b></label>
    <input type="text" id="titulo" name="titulo" required>
    <label for="nombre"><b>Creado por:</b></label>
    <input type="text" id="nombre" name="creador" required>

    <label for="fecha"><b>Fecha:</b></label>
    <input type="text" id="fecha" name="fecha" required>

    <label for="hora"><b>Hora:</b></label>
    <input type="hora" id="hora" name="hora" required>

    <label for="direccion"><b>Dirección:</b></label>
    <input type="tel" id="telefono" name="direccion" required>

   <label for="duracion"><b>Duración aproximada:</b></label>
    <input type="text" id="duracion" name="duracion" required>
    
    <label for="descripcion"><b>Descripción:</b></label>
    <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

    <input type="submit" value="Enviar">