<?php
    session_start();

    $conexion = new mysqli("localhost", "root", "", "hermanito_en_cristo");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $contrasenya = $_POST["contrasenya"];
    
        $sqlLogin = "SELECT id FROM usuario WHERE nombre = '$nombre' AND contrasenya = '$contrasenya'";

        if ($conexion->query($sqlLogin)->num_rows == 1) {
            $_SESSION['nombre'] = $nombre;
            //echo "Bienvenido mi loquete el " . $_SESSION['nombre'];
            header("Location: http://localhost/pages/HermanitoChrish/index.php");
        } else {
            echo "Contraseña o usuario introducidos de forma incorrecta";
            echo "<br><a href='index.php'>Click aquí para vovler a intentarlo</a>";
        }
    }
    $conexion->close();
?>