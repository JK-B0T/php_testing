<?php
    $conn = new mysqli("localhost", "root", "", "test");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT nombre, email, pass FROM usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
        <tr>
        <th>Nombre</th>
        <th>Correo Electrónico</th>
        <th>Contraseña</th>
        </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["pass"] . "</tr>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href='../paginas/informe.php'>Volver a selección de informes</a>";
        echo "<br><a href='../index.php'>Volver a inicio</a>";
    } else {
        echo "No se encontraron resultados";
    }

    $conn->close();
?>