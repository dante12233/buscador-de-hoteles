<?php


$clave = $_POST['clave']; // Corregir el nombre de la variable $clave
$contrasena = $_POST['contrasena']; // Corregir el nombre de la variable $contrasena
session_start();



$conn = mysqli_connect("localhost", "root", "", "hoteldigital");

// Evitar inyección SQL usando consultas preparadas
$consulta = "SELECT * FROM login WHERE clave=? AND contrasena=?";
$stmt = mysqli_prepare($conn, $consulta);
mysqli_stmt_bind_param($stmt, "ss", $clave, $contrasena);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);
$filas = mysqli_num_rows($resultado);

if ($filas) {
    $_SESSION['clave'] = $clave; // Establecer la variable de sesión 'clave'
    header("Location: administradorhotel.php"); // Redirigir a administradorhotel.php en caso de éxito
    exit(); // Terminar la ejecución del script después de redirigir
} else {
    echo "Error en la autenticación"; // Mensaje de error o acción adicional si la autenticación falla
}

mysqli_stmt_close($stmt); // Cerrar la consulta preparada
mysqli_close($conn); // Cerrar la conexión a la base de datos
?>
