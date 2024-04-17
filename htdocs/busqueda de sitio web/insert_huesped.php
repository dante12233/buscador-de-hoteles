<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción de Huésped - Hotel Digital</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href="css/style.css"> <!-- Asegúrate de ajustar la ruta del archivo de estilos -->
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #8E44AD, #3498DB); /* Fondo celeste a morado */
            color: #fff;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 99;
        }

        .header .logo {
            font-size: 2em;
            font-weight: 700;
            color: #fff;
            text-decoration: none;
        }

        .header .nav a {
            position: relative;
            font-size: 1.2em;
            color: #fff;
            text-decoration: none;
            margin-left: 40px;
            font-weight: 600;
        }

        .header .nav a::after {
            content: '';
            position: absolute;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #ff6633;
            border-radius: 5px;
            bottom: -6px;
            transform: scaleX(0);
            transition: 0.5s;
        }

        .header .nav a:hover::after {
            transform: scaleX(1);
        }

        .home {
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .home .content,
        .home .login {
            color: #fff;
            width: calc(50% - 100px);
        }

        .home .content {
            text-align: left;
        }

        .home .content h2 {
            font-size: 3em;
        }

        .home .content p {
            font-size: 1.5em;
        }

        .home .login {
            text-align: center;
        }

        .home .login input[type="text"],
        .home .login input[type="password"] {
            width: calc(100% - 40px);
            padding: 10px;
            padding-left: 40px;
            margin-bottom: 10px;
            border: none;
            border-radius: 20px;
            position: relative;
        }

        .home .login input[type="text"]::before,
        .home .login input[type="password"]::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            background-color: #ff6633;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .home .login input[type="text"]::before::before,
        .home .login input[type="password"]::before::before {
            content: '\f0e0';
            font-family: 'Font Awesome 5 Free';
            color: #fff;
        }

        .home .login input[type="password"]::before {
            content: '\f023';
        }

        .home .login button {
            padding: 10px 20px;
            background-color: #ff6633;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .home .login button:hover {
            background-color: #dd5522;
        }

        .footer {
            /* Estilos para el pie de página si es necesario */
        }

        .btn {
            /* Estilos para botones si es necesario */
        }

        .btn:hover {
            /* Estilos para el estado hover de los botones si es necesario */
        }

        .home .login a {
            color: #fff;
            font-weight: bold;
        }

        .home .login a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="#" class="logo">Alojamiento Digital</a>
            <div class="nav">
            <h3><a href="Servicio.php">servicios</a></h3>
                <a href="index.php">Ir a inicio</a>
                <a href="#">Contacto</a>
            </div>
        </div>
        <div class="home">
            <div class="content">
                <h2>Inscripción de Huésped</h2>
                <p>Hotel digital se dedica a proporcionar servicios de alojamiento de alta calidad a nuestros clientes. Ofrecemos una amplia gama de servicios.</p>
            </div>
            <div class="login">
                <form action="procesar_inscripcion.php" method="post">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" required><br>

                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" required><br>

                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" name="correo" required><br>

                    <input type="submit" value="Inscribirse">
                </form>
            </div>
        </div>
