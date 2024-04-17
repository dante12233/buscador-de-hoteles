<?php
session_start();
include('conexion.php'); // Incluye el archivo de conexión

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los valores del formulario
    $clave = $_POST['clave'];
    $contrasena = $_POST['contrasena'];

    // Escapa los valores para prevenir inyecciones SQL
    $clave = mysqli_real_escape_string($conn, $clave);
    $contrasena = mysqli_real_escape_string($conn, $contrasena);

    // Consulta para verificar las credenciales del administrador
    $query = "SELECT * FROM administrador WHERE clave = '$clave' AND contraseña = '$contrasena'";
    $result = mysqli_query($conn, $query);

    // Verifica si hay una fila que coincida con las credenciales
    if (mysqli_num_rows($result) == 1) {
        // Inicio de sesión exitoso
        $_SESSION['admin_logged_in'] = true;
        header("Location: administradorhotel.php"); // Redirige a administradorhotel.php
        exit();
    } else {
        // Credenciales incorrectas

        // Código para la inserción de un nuevo administrador
        $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);
        $insert_query = "INSERT INTO administrador (clave, contraseña) VALUES ('$clave', '$hashed_password')";

        if (mysqli_query($conn, $insert_query)) {
            echo "Nuevo administrador insertado con éxito.";
        } else {
            echo "Error al insertar el administrador: " . mysqli_error($conn);
        }
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conn);
}
?>
