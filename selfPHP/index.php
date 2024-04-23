<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self PHP</title>
</head>
<body>
    <h1>Formulario Tremendo</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <ul>
            <li>
                <label for="nombreProducto"> Nombre de producto: </label>
                <input type="text" id="nombreProducto" name="nombreProducto">
            </li>
            <li>
                <label for="valorProducto">Valor del producto: </label>
                <input type="number" id="valorProducto" name="valorProducto">
            </li>
            <li>
                <input type="hidden" id="IVA" name="IVA" value="21" readonly>
            </li>
            <li>
                <button type="submit">Enviar</button>
            </li>
        </ul>
    </form>
</body>
<style>
    body {
        width: 400px;
        margin: 0 auto;
        text-align: center;
    }
    ul {
        display:inline-block;
    }
    li, ul {
        padding: 0;
        list-style: none;
    }
    li {
        text-align: right;
        margin-top: 4%;
    }
    button{
        display:block;
        margin: 4% auto 0;
        width: 50px;
    }
</style>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pago = $_POST["valorProducto"] * (1 + ($_POST["IVA"] / 100));
    $nombreProducto = $_POST["nombreProducto"];

    echo 'El producto "'.$nombreProducto.'" cuesta: '.$pago.'$.';
}
?>