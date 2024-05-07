<?php
    $conexion = new mysqli("localhost", "root", "", "hermanito_en_cristo");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["user_name"];
        $email = $_POST["user_email"];
        $pass = $_POST["user_pass"];
    

        $sql = "INSERT INTO USUARIO (nombre, email, contrasenya) VALUES ($name, $email, $pass)";

        if ($conexion->query($sql) === TRUE) {
            echo "Usuario registrado con éxito";
        } else {
            echo "Error"
        }
    }
    $conexion->close();
?>