<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prologo Sitio Web</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <script src="https://kit.fontawesome.com/c9f5871d83.js" crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
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
        }

        .home .content {
            position: absolute;
            top: 50%;
            left: 50px;
            transform: translateY(-50%);
            text-align: left;
            z-index: 1;
            color: #fff;
            width: calc(50% - 100px);
        }

        .home .content h2 {
            font-size: 3em;
        }

        .home .content p {
            font-size: 1.5em;
        }

        .home .login {
            position: absolute;
            top: 50%;
            right: 50px;
            transform: translate(0, -50%);
            z-index: 1;
            color: #fff;
            width: calc(50% - 100px);
        }

        /* Estilos para los campos de entrada con bordes curvos y posición de iconos dentro de un círculo */
        .home .login input[type="text"],
        .home .login input[type="password"] {
            width: calc(100% - 40px);
            padding: 10px;
            padding-left: 40px; /* Añade espacio a la izquierda para el icono */
            margin-bottom: 10px;
            border: none;
            border-radius: 20px; /* Ajusta el valor según tu preferencia */
            position: relative; /* Permite posicionar los iconos de manera absoluta */
        }

        .home .login input[type="text"]::before,
        .home .login input[type="password"]::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 10px; /* Ajusta la posición del ícono */
            transform: translateY(-50%);
            width: 30px; /* Ancho del círculo */
            height: 30px; /* Alto del círculo */
            background-color: #ff6633; /* Color del círculo */
            border-radius: 50%; /* Crea un círculo */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .home .login input[type="text"]::before::before,
        .home .login input[type="password"]::before::before {
            content: '\f0e0'; /* Ícono de correo (puedes cambiarlo a tu preferencia) */
            font-family: 'Font Awesome 5 Free'; /* Cambia a la fuente de los íconos */
            color: #fff; /* Color del ícono */
        }

        .home .login input[type="password"]::before {
            content: '\f023'; /* Ícono de contraseña (puedes cambiarlo a tu preferencia) */
            font-family: 'Font Awesome 5 Free'; /* Cambia a la fuente de los íconos */
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

        .full-screen-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: 0;
        }

        .footer {
        }

        .btn {
        }

        .btn:hover {
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
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-globe"></i> Hotel digital</a>
        <nav class="nav">
            <a href="insert_huesped.php">Huesped</a>
            <a href="Servicio.php">Personal</a>
            <a href="tecnico.php">Técnico</a>
            <a href="contactanos.php">Contactos</a>
        </nav>
    </header>

    <section class="home">
        <div class="content">
            <h2>Bienvenido</h2>
            <p>Hola, ¡Bienvenido a este sitio web que te ayudará a conocer más sobre el Alojamiento digital y lo que puedes hacer!</p>
        </div>
        <div class="login">
            <h2>Iniciar sesión</h2>
            <form action="procesar_inicio_sesion.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="text" name="correo" class="input" placeholder="Ingresa tu correo electrónico" autocomplete="off" required>
                </div>
                <div class="input_box">
                    <span class="icon">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="contrasena" class="input" placeholder="Ingresa tu contraseña" autocomplete="off" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Recordarme</label>
                    <a href="#" class="forgot-password">¿Olvidaste la contraseña?</a>
                </div>
                <button type="submit">Iniciar sesión</button>
                <div class="user-link">
                    <p>¿No eres miembro?</p>
                    <a href="Administrador.php" class="register-here">Regístrate aquí</a>
                </div>
            </form>
        </div>
        <img src="283603-la-paz2.jpg" alt="La imagen de La Paz 2" class="full-screen-image">
    </section>
</body>
</html>
