<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Insert title here</title>
		
		<link rel="stylesheet" href="css/estilo.css">
		
    <style>
   
        </style>
      
        
</head>


</head>
<header>
       
        <div id="logo">
        <img src="img/logo2.jpg">
        </div>
        <nav>
        <a href="index.jsp"> <b>Inicio</b></a>
        <a href="actividades.jsp"> <b>Actividades disponibles</b></a>
        <!-- <a href="crearactividad.html"> <b>Crear actividad</b></a> -->
        <a href="enlaces.jsp"> <b>Enlaces de interes</b></a>
        <a href="registro.html"> <b>Registrarse</b></a>
         <a href="login.html"> <b>Login</b></a>
    </nav>
    </header>
<body>

    


    
 <%@ page import="java.sql.*" %>

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
       
            
       
    
        
        
       
    
 

                

</body>
</html>