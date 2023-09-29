<php?


?>


<!DOCTYPE html>
<html>
<head>
    <title>Menú de Navegación en PHP</title>
    <style>
        body {
            background-image: url('img/foto.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333;
            overflow: hidden;
        }
s
        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<div>
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Reserva</a></li>
        <li><a href="#">Pedidos</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">Ubicacion</a></li>
        <li><a href="carta.php">Carta</a></li>
    </ul>
</div>

</body>
</html>
