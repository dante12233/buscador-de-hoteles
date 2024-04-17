<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conexión MySQL</title>
</head>
<body>
  <?php
    // Datos de conexión
    $host = "localhost";
    $usuario = "root";
    $contrasena = "superadministrador";
    $base_de_datos = "ptimización de la experiencia del huésped a través de la domótica";

    // Conexión a la base de datos
    $enlace = new mysqli($host, $usuario, $contrasena, $base_de_datos);

    // Comprobar si la conexión se realizó correctamente
    if ($enlace->connect_error) {
      die("Error de conexión: " . $enlace->connect_error);
    }

    // Mostrar mensaje de conexión exitosa
    echo "Conexión exitosa";

    // Cerrar la conexión a la base de datos
    $enlace->close();
  ?>
</body>
</html>
