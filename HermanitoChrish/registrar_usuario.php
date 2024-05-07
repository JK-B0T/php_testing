<?php
    $conexion = new mysqli("localhost", "root", "", "hermanito_en_cristo");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $contrasenya = $_POST["contrasenya"];
    
        $sql = "INSERT INTO USUARIO (nombre, email, contrasenya) VALUES ('$nombre', '$email', '$contrasenya')";

        if ($conexion->query($sql) === TRUE) {
            echo "Usuario registrado con éxito";
        } else {
            echo "Error" . $conexion->error;
        }
    }
    $conexion->close();
?>