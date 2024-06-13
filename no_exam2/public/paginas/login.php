<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="../php/logear_usuario.php" method="POST">
        <ul>
            <li>
                <label for="user_name">Nombre</label>
                <input type="text" id="user_name" name="nombre">            
            </li>
            <li>
                <label for="user_pass">Contraseña</label>
                <input type="password" id="user_pass" name="pass">
            </li>
            <li>
                <button type="submit">Submit</button>
            </li>
        </ul>
    </form>
    <a href="../index.php">¿No se ha registrado aún? Haga click aquí</a>
    <br>
    <a href="../paginas/enviar_mail.php">¿Se le olvido la contraseña? Haga click aquí</a>
    <?php
    if (isset($_GET['message'])) {

        switch($_GET['message']){
            case 'OK':
                echo '<h2>Por favor revisa tu correo</h2>';
                break;
            case 'success_password':
                echo '<h2>Inicia sesion con tu nueva contraseña</h2>';
                break;
            case 'usuario_no_encontrado':
                echo '<h2>Usuario no encontrado</h2>';
                break;
            default:
                echo '<h2>Algo salio mal, intentalo de nuevo</h2>';
                break;
        }
    }
    ?>
</body>
</html>