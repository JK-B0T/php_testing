<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña</title>
</head>
<body>
    <h2>Cambio de contraseña</h2>
    <form action="../php/recuperar_pass.php" method="POST">
        <input type="hidden" id="id" name="id" value="<?php echo $GET['id'];?>">
        <label for="nuevopass">Contraseña</label>
        <input type="password" id="nuevopass" name="pass">
        <button type="submit">Submit</button>
    <form>
</body>
</html>