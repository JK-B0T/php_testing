<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipo_informe = $_POST["informe"];

        switch ($tipo_informe) {
            case 'usuarios':
                include('generacion_informe.php');
                break;
            case 'prodcutos':
                include('generacion_productos.php');
                break;
            case 'ventas':
                include('generacion_ventas.php');
                break;
            default:
                echo "Tipo de informe no válido";
                break;
        }
    }
?>