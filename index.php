
<html lang="es">
<head>
    <meta charset="UTF-8">
   
    <title>Conecta2</title>
    
    <link rel="StyleSheet" href="css/estilo.css">
</head>
<body>
<?php
include "cabecera.html";
    
    ?>
  
    
     <img id="carrusel" src="img/06.jpg">

    <script>
       
        const imagenes = ["img/07.jpg", "img/01.jpg", "img/03.jpg","img/09.jpg","img/05.jpg","img/04.jpg","img/06.jpg"];

        let index = 0;

        function cambiarImagen() {
            
            document.getElementById("carrusel").src = imagenes[index];
            index = (index + 1) % imagenes.length;
        }

        
        setInterval(cambiarImagen, 4000);
    </script>

    <main>
        <!-- contenido de la web -->
    </main>
    <footer>
    <!-- pie de la web -->
    </footer>
    
</body>
</html>

