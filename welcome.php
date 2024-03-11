<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
</head>
<body>
    <center>
    <h1>Bienvenido usuario, `<?php echo $_SESSION['username']; ?>!`</h1>
    <br>
        <div class="container">
            <!-- <h3><p>Usted ha hackeado el sistema, por favor, no haga esto mas dificil</p><h3> -->
            <?php
            // Aquí defines la URL de la imagen de Google
            $url_imagen = "https://img.freepik.com/foto-gratis/firewall-datos-negro_1150-1733.jpg";
            ?>
            <img src="<?php echo $url_imagen; ?>" alt="Imagen desde Google" width="500" height="300">
        </div>
    <br>
    <a href="logout.php">Cerrar sesión</a>
    </center>
</body>
</html>
