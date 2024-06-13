<?php
    $conexion = new mysqli("localhost", "root", "", "test");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
    
        $sql1 = "SELECT * FROM usuario WHERE nombre = ?";
        $stmt = $conexion->prepare($sql1);
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $result =  $stmt->get_result();

        if ($result->num_rows > 0) {
            header("Location: ../index.php?error=user_exists");
        } else {
            $sql2 = "INSERT INTO usuario (nombre, email, pass) VALUES ('$nombre', '$email', '$pass')";

            if ($conexion->query($sql2) === TRUE) {
                echo "Usuario registrado con éxito";
                echo "<br><a href='../paginas/login.php'>Volver a inicio</a>";
            } else {
                echo "Error" . $conexion->error;
            }
        }
    }
    $stmt->close();
    $conexion->close();
?>