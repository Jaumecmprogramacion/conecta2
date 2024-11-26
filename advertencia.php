<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertencia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        #confirmarBtn {
            background-color: #4CAF50;
            color: white;
        }

        #cancelarBtn {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>¡Advertencia!</h2>
        <p>¿Estás seguro de que deseas eliminar esto?</p>
        <button id="confirmarBtn" onclick="eliminar()">Sí</button>
        <button id="cancelarBtn" onclick="cancelar()">No</button>
    </div>

    <script>
        function eliminar() {
            // Mostrar alerta
            alert('Elemento eliminado');

            // Redirigir a otra página PHP
            window.location.href = 'eliminarusuarioadmin.php';
        }

        function cancelar() {
            // Alerta de cancelación
            alert('Eliminación cancelada');
        }
    </script>
</body>
</html>
