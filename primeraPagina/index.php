<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>PHP down here </h1>
    <h1>
    <?="Hola Mundo!";?>
</h1>

<?php
    $string1 = "44";
    $string2 = "1";
    echo "Concatena: " . $string1 . $string2 . " / ";
    echo "Suma: " . $string1 + $string2 . " / ";
    echo "Le string '\$string1' con le variable  '$string1'"
?>

<br>

<?php
    $string1 = "44";
    echo var_dump($string1)
?>

<br>

<?php
    $string1 = "44";
    echo gettype($string1) . " / " . is_string($string1) . " / " . is_int($string1);
?>

<br>

<?php
    $string1 = "44";
    $string1 .= "44";
    echo $string1;
?>

<br>

<?php
    const CONSTANTE = "AbCdEfG";
    echo CONSTANTE;
?>

<br>

<?php
    echo strlen(CONSTANTE) . " / ";
    echo strtoupper(CONSTANTE) . " / ";
    echo strtolower(CONSTANTE);
?>

<br>

<?php

?>
</body>

<style>
    body {
    background-color: khaki;
    }
</style>
