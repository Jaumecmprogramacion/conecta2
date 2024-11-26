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
        <a href="enlaces.php"> <b>Enlaces de interes</b></a>
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
					ResultSet resultados = peticion.executeQuery("SELECT * FROM enlaces");
					
					while(resultados.next()){
						out.println(""+
								"<enlaces>"+
									"<h1>Nombre:"+resultados.getString("nombre")+"</h1>"+
									"<a>Dirección:"+resultados.getString("direccion")+"</a>"+						          						
           						 	"<p>Descripción:"+resultados.getString("descripcion")+"</p>"+
								"</enlaces>"+
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