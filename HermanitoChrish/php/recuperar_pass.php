<?php
$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
    die("Error de la conexión: " . $conn->conect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $newPass = $_POST['newPass'];

    $sql = "UPDATE usuario set pass = '$newPass' WHERE id = '$id'";
    $conn->query($sql);
    header("Location: ../paginas/login.php?message=success_password");
}

$conn->close();
?>