<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="../php/recuperar_con.php" method="POST">
        <ul>
            <li>
                <label for="user_name">Nombre</label>
                <input type="text" id="user_name" name="nombre">            
            </li>
            <li>
                <label for="user_pass">Contraseña</label>
                <input type="password" id="user_pass" name="contrasenya">
            </li>
            <li>
                <button type="submit">Submit</button>
            </li>
        </ul>
    </form>
    <a href="../index.php">¿No se ha registrado aún? Haga click aquí</a>
</body>
</html>