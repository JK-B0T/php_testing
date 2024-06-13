<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';

/*function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}*/

    $conn = new mysqli("localhost", "root", "", "no_exam");

    if ($conn->connect_error) {
        die("Error de la conexión: " . $conn->connect_error);
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
                $mail->Host       = 'smtp-mail.outlook.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'yeipis@outlook.es';
                $mail->Password   = 'JuanPablo333';
                $mail->Port       = 587;
            
                $mail->setFrom('yeipis@outlook.es', 'Yeipis');
                $mail->addAddress($email, 'test');

                $mail->isHTML(true);
                $mail->Subject = 'recuperacion de contraseña';
                $mail->Body    = 'Hola este es un correo para la recuperacion de tu contraseña, por favor ingresa 
                a este enlace: <a href="http://localhost/pages/HermanitoChrish/paginas/cambio_pass.php?id='.$row['id'].'">Recuperar contraseña</a>';
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