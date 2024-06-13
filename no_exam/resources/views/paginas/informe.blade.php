<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe</title>
</head>
<body>
    <h1>Bienvenidos al portal de consultas de nuestra plataforma</h1>
    <h2>Seleccione el informe que desea generar:</h2>
    <form action="{{ route('generacion_informe') }}" method="post">
        <label for="informe">Informe:</label>
        <select name="informe" id="informe">
            <option value="usuarios">usuarios</option>
            <option value="productos">productos</option>
            <option value="ventas">ventas</option>
        </select>
        <input type="submit" value="Generar Informe">
    </form>
</body>
</html>