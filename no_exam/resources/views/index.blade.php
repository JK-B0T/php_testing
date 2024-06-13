<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="{{ route('registrar_usuario') }}" method="POST">
        <ul>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <li>
                <label for="user_name">Nombre</label>
                <input type="text" id="user_name" name="nombre">            
            </li>
            <li>
                <label for="user_email">Correo</label>
                <input type="email" id="user_email" name="email">
            </li>
            <li>
                <label for="user_pass">Contraseña</label>
                <input type="password" id="user_pass" name="pass">
            </li>
            <li>
                <button type="submit">Submit</button>
            </li>
        </ul>
        <?php
        if (isset($_GET['error']) && $_GET['error'] == 'user_exists') {
            echo "<p style='color: red;'>El nombre de usuario ya existe</p>";
        }
        ?>
    </form>
    <a href="{{route('login')}}">¿Ya se registro? Haga click aquí</a>
</body>
</html>