<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<%@ page import="java.sql.*" %>

 <%
 	Class.forName("com.mysql.jdbc.Driver");
 	Connection conexion2 = null;
 	if(request.getParameter("nombre") != null){
 try{
					String url = "jdbc:mysql://localhost:3306/conectados";
					String usuario = "conectados";
					String contrasena = "conectados";
					
					conexion2 = DriverManager.getConnection(url,usuario,contrasena);
					
					String peticioninserccion = "INSERT INTO datos VALUES(NULL,'"+request.getParameter("nombre")+"','"+request.getParameter("apellidos")+"','"+request.getParameter("telefono")+"','"+request.getParameter("email")+"','"+request.getParameter("contrasena")+"')";
					PreparedStatement inserto = conexion2.prepareStatement(peticioninserccion);
					inserto.executeUpdate();
					
					
					
				}catch(Exception e){
					e.printStackTrace();
				}finally{
					if(conexion2!= null){
						conexion2.close();
					}
				}
 	}
 	
 %>
 






<b>Su registro se ha hecho de forma satisfactoria, bienvenido a Conecta2</b>

<meta http-equiv="refresh"
 content="3; url=login.jsp">';


?>