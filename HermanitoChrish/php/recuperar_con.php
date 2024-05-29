<?php
    session_start();

    $conexion = new mysqli("localhost", "root", "", "test");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $pass = $_POST["pass"];
    
        $sqlLogin = "SELECT id FROM usuario WHERE nombre = '$nombre' AND pass = '$pass'";

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