<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos (ajusta los valores según tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tapes_bar";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Obtener los datos del formulario y evitar la inyección SQL usando consultas preparadas
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso
        echo "Inicio de sesión exitoso. ¡Bienvenido!";
        // Puedes redirigir al usuario a otra página aquí
    } else {
        // Credenciales incorrectas
        echo "Usuario o contraseña incorrectos.";
    }

    // Cerrar la conexión a la base de datos
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/fondo1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: black;
        }

        .login-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 40px; /* Ajusta el padding interno según tus preferencias */
            width: 300px;
            border: 1px solid #ccc; /* Agregar un borde alrededor del contenedor */
            margin: 20px; /* Agregar márgenes externos */
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: 0;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        /* Estilo para el enlace y el checkbox */
        #enlace-terminos {
            text-decoration: none; /* Quita el subrayado del enlace */
            color: blue; /* Cambia el color del enlace */
            margin-right: 10px; /* Añade margen a la derecha del enlace */
        }

        #miCheckbox {
            vertical-align: left; /* Alinea verticalmente el checkbox con el texto del enlace */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="index1.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>

            <input type="submit" value="Iniciar Sesión">
            <br>
            <br>
            <div>
                <!-- Coloca el checkbox al lado del enlace -->
                <input type="checkbox" id="miCheckbox">
                <a id="enlace-terminos" href="https://www.boe.es/buscar/act.php?id=BOE-A-2021-8806&p=20220729&tn=1">Acepto los términos y condiciones</a>
              
            </div>
        </form>
    </div>
</body>
</html>
