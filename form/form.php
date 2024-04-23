<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<form action="form.php" method="POST">
Nombre: <input type="text" name="nombre"><br>
Número 1: <input type="text" name="num1"><br>
Número 2: <input type="text" name="num2"><br>
Número 3: <input type="text" name="num3"><br>
Número 4: <input type="text" name="num4"><br>
Número 5: <input type="text" name="num5"><br>
Número 6: <input type="text" name="num6"><br>
<input type="submit">
</form>
    
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST["nombre"] . "<br>" . $_POST["num1"] + $_POST["num2"];
}

$nombre = $_POST["nombre"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];
$num4 = $_POST["num4"];
$num5 = $_POST["num5"];
$num6 = $_POST["num6"];

$asociar = [
    $nombre => $num1,
    $num3 => $num4,
    $num5 => $num6,
];

reset($asociar);

while (key($asociar) !== null) {
    echo "/" . key($asociar) . " => " . current($asociar);
    next($asociar);
}

?><br>

</body>
</html>