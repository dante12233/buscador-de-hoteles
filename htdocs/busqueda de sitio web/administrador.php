<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio de Sesión Administrador</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #d0f0c0; /* Cambiado a un tono de verde claro */
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-container {
      text-align: center;
    }

    h2 {
      color: #333333;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    label {
      margin-top: 10px;
      color: #333333;
    }

    .input-group {
      margin: 10px 0;
    }

    input {
      padding: 8px;
      border: 1px solid #dddddd;
      border-radius: 5px;
      width: 200px;
    }

    .forgot-password {
      display: block;
      margin: 10px 0;
      color: #333333;
      text-decoration: none;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .google-login {
      margin-top: 20px;
    }

    a {
      text-decoration: none;
      color: #4CAF50;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="login-container">

      <h2>Acceso solo Administrador</h2>

      <form action="login.php" method="post"> <!-- Cambiado 'login.php' al archivo que manejará el inicio de sesión -->

        <label for="clave">Clave:</label>
        <div class="input-group">
          <input type="text" id="clave" name="clave" required />
        </div>

        <label for="contrasena">Contraseña:</label>
        <div class="input-group">
          <input type="password" id="contrasena" name="contrasena" required />
        </div>

        <div class="input-group">
          <button type="submit">Entrar</button>
        </div>

      </form>

    </div>
  </div>
</body>
</html>
