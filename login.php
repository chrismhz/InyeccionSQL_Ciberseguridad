<?php
// Establecer conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ciberseguridad";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta para verificar las credenciales del usuario
$sql = "SELECT * FROM usuario WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("Location: welcome.php"); // Redirigir a la página de bienvenida
} else {
    echo "Usuario o contraseña incorrectos.";
}

$conn->close();
?>
