<?php
// Datos de conexión a la base de datos
$servername = "localhost";  // Nombre del servidor de la base de datos
$username = "root";      // Nombre de usuario de la base de datos
$password = "";   // Contraseña del usuario
$database = "agenda";    // Nombre de la base de datos a la que se desea conectar

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
