<?php
use phpMailer\PHPMailer\PHPMailer;
use phpMailer\Exception;
use phpMailer\SMTP;
require './phpMailer/Exception.php';
require './phpMailer/PHPMailer.php';
require './phpMailer/SMTP.php';

/*function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}*/

    $conn = new mysqli("localhost", "root", "", "test");

    if ($conn->connect_error) {
        die("Error de la conexión: " . $conn->conect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $sql = "SELECT * FROM usuario WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($result->num_rows > 0) {
            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'popypxp@gmail.com';
                $mail->Password   = 'pxplove333';
                $mail->Port       = 587;
            
                $mail->setFrom('popypxp@gmail.com', 'pop');
                $mail->addAddress($email, 'test');

                $mail->isHTML(true);
                $mail->Subject = 'recuperacion de contraseña';
                $mail->Body    = 'Hola este es un correo para la recuperacion de tu contraseña, por favor ingresa 
                a este enlace: <a href="localhost/pagina/cambio_pass.php?id='.$row['id'].'">Recuperar contraseña</a>';
                $mail->AltBody = 'Bro que haces que tu mail no acepta HMTL';
            
                $mail->send();
                header("Location: ../paginas/login.php?message=OK");
            } catch (Exception $e) {
                header("Location: ../paginas/login.php?message=error");
            }
        } else {
            header("Location: ../paginas/login.php?message=usuario_no_encontrado");
        }
    }
    
    $stmt->close();
    $conn->close();
?>